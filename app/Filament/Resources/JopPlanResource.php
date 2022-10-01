<?php

namespace App\Filament\Resources;

use App\Enums\PlanDuration;
use App\Enums\PlanType;
use App\Filament\Resources\JopPlanResource\Pages;
use App\Filament\Resources\JopPlanResource\RelationManagers;
use App\Models\Plan;
use Filament\Forms;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Spatie\LaravelOptions\Options;


class JopPlanResource extends Resource
{
    protected static ?string $model = Plan::class;
    protected static ?string $navigationGroup = 'PLan';
    protected static ?string $navigationLabel = 'JobPlan';
    protected static ?string $slug = 'job_plan';
    protected static ?string $navigationIcon = 'heroicon-o-collection';

 
    public static function form(Form $form): Form
    {
    
        return $form
        ->schema([
            Forms\Components\Group::make()
                ->schema([
                    Forms\Components\Card::make()
                        ->schema([
                            Forms\Components\TextInput::make('name')
                                ->required()
                                ->unique(Plan::class, 'name', ignoreRecord: true),
                                Forms\Components\Select::make('duration')
                                ->options(collect(Options::forEnum(PlanDuration::class))->pluck('label','value')),
                                Forms\Components\Textarea::make('description')
                                ->cols(2)
                                ->rows(2)
                                ->columnSpan(2),
                            Forms\Components\TextInput::make('price')
                                ->required(),
                            Forms\Components\TextInput::make('number_jobs')
                                ->hint('leave empty for unlimited job'),
                        ])
                        ->columns(2),

                ])
                ->columnSpan(['lg' => 2]),

            Forms\Components\Group::make()
                ->schema([
                    Forms\Components\Section::make('Telegram Channel')
                        ->schema([
                    
                            Forms\Components\Toggle::make('post_on_telegram')
                                ->label('Post On Telegram Channel')
                                ->default(now())
                                ->required()
                            
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
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('duration'),
                Tables\Columns\TextColumn::make('price')
                ->label('Price (ETB)'),
                Tables\Columns\TextColumn::make('number_job')
                ->formatStateUsing(fn (string|null $state)  => is_null($state) ?  'UnLimited' : $state),
                Tables\Columns\BooleanColumn::make('post_on_telegram'),
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
            'index' => Pages\ListJopPlans::route('/'),
            'create' => Pages\CreateJopPlan::route('/create'),
            'view' => Pages\ViewJopPlan::route('/{record}'),
            'edit' => Pages\EditJopPlan::route('/{record}/edit'),
        ];
    }    
    
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
        ->where('type',PlanType::Job()->value)
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
