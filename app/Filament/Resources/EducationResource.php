<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EducationResource\Pages;
use App\Filament\Resources\EducationResource\RelationManagers;
use App\Models\Education;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Spatie\LaravelOptions\Options;
use App\Enums\EducationType;

class EducationResource extends Resource
{
    protected static ?string $model = Education::class;
    protected static ?string $navigationGroup = 'Data';
    protected static ?string $navigationLabel = 'Education';
    protected static ?string $navigationIcon = 'heroicon-o-collection';

  

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
              Forms\Components\TextInput::make('name')
              ->required(),
              Forms\Components\Select::make('type')
              ->options(collect(Options::forEnum(EducationType::class))->pluck('label','value')->toArray())
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\BadgeColumn::make('type')
                ->enum(collect(Options::forEnum(EducationType::class))->pluck('label','value')->toArray())

            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
                Tables\Filters\SelectFilter::make('type')
                ->options(collect(Options::forEnum(educationType::class))->pluck('label','value')->toArray())
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ForceDeleteAction::make(),
                Tables\Actions\RestoreAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
                Tables\Actions\RestoreBulkAction::make(),
                Tables\Actions\ForceDeleteBulkAction::make(),
            ]);
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageEducation::route('/'),
            'view'  => Pages\ViewEducation::route('/{record}')
        ];
    }    
    
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }

    public static function getRelations():array{

        return [

        RelationManagers\SkillsRelationManager::class

        ];

    }

}
