<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderResource\Pages;
use App\Filament\Resources\OrderResource\RelationManagers;
use App\Models\Order;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Enums\UserStatus;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Forms\Components\TextInput::make('invoice_number'),
                // Forms\Components\TextInput::make('status'),
                // Forms\Components\TextInput::make('invoice_date')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('invoice_number')
                ->searchable(),
                Tables\Columns\BadgeColumn::make('status'),
                Tables\Columns\TextColumn::make('invoice_date')
                ->date()
                ->searchable(),
                Tables\Columns\TextColumn::make('due_date')
                ->date()
                ->searchable(),
                Tables\Columns\BadgeColumn::make('transaction')
                ->getStateUsing(function($record){

                    $transactions = $record->transactions()->count();
                    $pendingTransactions = $record->transactions()->where('status',UserStatus::Pending())->count();
                    
          
                    if($transactions == 0) return "No Transaction";
                    if($pendingTransactions) return $pendingTransactions.' '.'New Pending Transactions';

                })
                ->color('primary'),


            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                // Tables\Actions\EditAction::make(),
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
            RelationManagers\TransactionsRelationManager::class
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOrders::route('/'),
            'create' => Pages\CreateOrder::route('/create'),
            'view' => Pages\ViewOrder::route('/{record}'),
            'edit' => Pages\EditOrder::route('/{record}/edit'),
        ];
    }

    public static function getWidgets(): array
    {
        return [
            OrderResource\Widgets\OrderOverview::class,
            OrderResource\Widgets\PlanOverview::class,
            OrderResource\Widgets\EmployerOverview::class
        ];
    }
    
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }

    protected static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    protected static function getNavigationBadgeColor(): ?string
    {
        return 'warning';
    }
}
