<?php

namespace App\Filament\Resources;

use App\Enums\EducationType;
use App\Filament\Resources\JobResource\Pages;
use App\Filament\Resources\JobResource\RelationManagers;
use App\Models\Category;
use App\Models\Education;
use App\Models\Job;
use App\Models\Location;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Pages\Actions;
use Illuminate\Support\Str;

class JobResource extends Resource
{
    protected static ?string $model = Job::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';



    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\Group::make()
                ->schema([
                    Forms\Components\Card::make()
                        ->schema([
                            Forms\Components\TextInput::make('title')
                                ->required()
                                ->lazy()
                                ->afterStateUpdated(fn (string $context, $state, callable $set) => $context === 'create' ? $set('slug', Str::slug($state)) : null),

                            Forms\Components\TextInput::make('slug')
                                ->disabled()
                                ->required()
                                ->unique(Job::class, 'slug', ignoreRecord: true),

                            Forms\Components\MarkdownEditor::make('description')
                                ->columnSpan('full'),
                            Forms\Components\MarkdownEditor::make('requirement')
                                ->columnSpan('full'),
                           
                        ])
                        ->columns(2),

 

                    Forms\Components\Section::make('Salary')
                        ->schema([
                            Forms\Components\TextInput::make('salary')
                                ->default('As per the Company Scale')
                                ->required(),
                            Forms\Components\TextInput::make('number_position')
                                ->label('Number of Position')
                                ->numeric()
                                ->rules(['regex:/^\d{1,6}(\.\d{0,2})?$/'])
                                ->required()
    
                        ])
                        ->columns(2),


                    Forms\Components\Section::make('How To apply')
                        ->schema([
                            Forms\Components\MarkdownEditor::make('how_to_apply')
                            ->columnSpan('full'),
                        ])
                        ->columns(2),
                ])
                ->columnSpan(['lg' => 2]),

            Forms\Components\Group::make()
                ->schema([
                    Forms\Components\Section::make('Dates')
                        ->schema([
                    
                            Forms\Components\DatePicker::make('date_of_announcement')
                                ->label('Date of Announcement')
                                ->default(now())
                                ->required(),
                            Forms\Components\DatePicker::make('date_of_closing')
                                ->label('Date of Closing')
                                ->default(now())
                                ->required(),
                        ]),

                    Forms\Components\Section::make('Job Seeker')
                        ->schema([
                            Forms\Components\Select::make('location_id')
                                // ->options(Education::where('type',EducationType::CarrerLevel())->get()->pluck('name','id'))
                                ->relationship('location','name')
                                ->searchable(),
                            Forms\Components\Select::make('education_id')
                                // ->options(Education::where('type',EducationType::CarrerLevel())->get()->pluck('name','id'))
                                ->relationship('education','name')
                                ->searchable(),

                            Forms\Components\MultiSelect::make('categories')
                            // ->options(Category::get()->pluck('name','id'))
                            ->relationship('categories','name')
                            ->required(),
                        ]),
                ])
                ->columnSpan(['lg' => 1]),
        ])
        ->columns(3);
        
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
                Tables\Actions\RestoreBulkAction::make(),
                Tables\Actions\ForceDeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListJobs::route('/'),
            'create' => Pages\CreateJob::route('/create'),
            'view' => Pages\ViewJob::route('/{record}'),
            'edit' => Pages\EditJob::route('/{record}/edit'),
        ];
    }    
    
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->current()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
