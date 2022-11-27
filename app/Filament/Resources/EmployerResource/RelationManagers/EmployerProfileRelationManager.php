<?php

namespace App\Filament\Resources\EmployerResource\RelationManagers;

use App\Filament\Resources\EmployerResource;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EmployerProfileRelationManager extends RelationManager
{
    protected static string $relationship = 'employerProfile';

    protected static ?string $recordTitleAttribute = 'user_id';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('user_id')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('logo'),
                Tables\Columns\TextColumn::make('company_name'),
                Tables\Columns\TextColumn::make('agency_license_number'),
                Tables\Columns\TextColumn::make('primary_phone_number'),
                Tables\Columns\TextColumn::make('contact_name'),
                Tables\Columns\BooleanColumn::make('recruiter_company'),
                Tables\Columns\BadgeColumn::make('address'),
                Tables\Columns\BadgeColumn::make('website')
                ->toggleable(),
                Tables\Columns\BadgeColumn::make('linkedin')
                ->toggleable(),
                Tables\Columns\BadgeColumn::make('facebook')
                ->toggleable(),
                Tables\Columns\BadgeColumn::make('twitter')
                ->toggleable(),
                Tables\Columns\BadgeColumn::make('telegram')
                ->toggleable(),
                Tables\Columns\BadgeColumn::make('instagram')
                ->toggleable(),
                Tables\Columns\BadgeColumn::make('tiktok')
                ->toggleable(),
                Tables\Columns\BadgeColumn::make('youtube')
                ->toggleable(),
                Tables\Columns\BadgeColumn::make('about')
                ->toggleable()
            ])
            ->filters([
                
            ])
            ->headerActions([
                // Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                // Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    protected function isTablePaginationEnabled(): bool
    {
        return false;
    }

    protected function getTableEmptyStateHeading(): ?string
    {
        return 'No company profile yet';
    }


    
    
    
}
