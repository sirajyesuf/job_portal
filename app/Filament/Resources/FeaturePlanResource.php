<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FeaturePlanResource\Pages;
use App\Filament\Resources\FeaturePlanResource\RelationManagers;
use App\Models\Plan;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Spatie\LaravelOptions\Options;
use App\Enums\PlanDuration;
use App\Enums\PlanType;

class FeaturePlanResource extends Resource
{
    protected static ?string $model = Plan::class;
    protected static ?string $navigationGroup = 'PLan';
    protected static ?string $navigationLabel = 'FeaturePlan';
    protected static ?string $slug = 'feature_plan';

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
                            Forms\Components\TextInput::make('price')
                                ->required(),

                        ])
                        ->columns(1),
                    Forms\Components\Section::make('Icon')
                        ->schema([
                            Forms\Components\FileUpload::make('icon')
                            ->image()
                            ->directory('plan_icons')
                            ->columnSpan('full'),
                        ])
                        ->columns(1),
                ])
                ->columnSpan(3),


        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('duration'),
                Tables\Columns\TextColumn::make('price')
                ->label('Price (ETB)'),
   
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
            'index' => Pages\ListFeaturePlans::route('/'),
            'create' => Pages\CreateFeaturePlan::route('/create'),
            'view' => Pages\ViewFeaturePlan::route('/{record}'),
            'edit' => Pages\EditFeaturePlan::route('/{record}/edit'),
        ];
    }    
    
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
        ->where('type',PlanType::Featuring()->value)
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
