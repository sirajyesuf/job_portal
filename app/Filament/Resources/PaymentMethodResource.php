<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PaymentMethodResource\Pages;
use App\Filament\Resources\PaymentMethodResource\RelationManagers;
use App\Models\PaymentMethod;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Enums\PaymentMethodType;
use phpDocumentor\Reflection\Types\Callable_;
use Spatie\LaravelOptions\Options;
class PaymentMethodResource extends Resource
{
    protected static ?string $model = PaymentMethod::class;
    protected static ?string $navigationGroup = 'Data';
    protected static ?string $navigationLabel = 'Payt Mtd';
    protected static ?string $navigationIcon = 'heroicon-o-collection';
    

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\TextInput::make('name'),
                Forms\Components\TextInput::make('account_holder_name'),
                Forms\Components\Select::make('type')
                ->options(collect(Options::forEnum(PaymentMethodType::class))->pluck('label','value')->toArray())
                ->default('wallet')
                ->reactive(),
                Forms\Components\TextInput::make('account_number')
                ->hidden(fn(Callable $get)=>$get('type') == PaymentMethodType::Wallet() ),
                Forms\Components\TextInput::make('phone_number')
                ->hidden(fn(Callable $get)=>$get('type') == PaymentMethodType::Bank() ),
                Forms\Components\FileUpload::make('logo')
                ->image()
                ->directory('payment_method_logos')
                ->required()
                ->columnSpan(2)

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('logo'),
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('account_holder_name'),
                Tables\Columns\TextColumn::make('account_number'),
                // ->visible(fn ( PaymentMethod $record) => $record->type == PaymentMethodType::Bank()),
                Tables\Columns\TextColumn::make('phone_number')
                
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ManagePaymentMethods::route('/'),
        ];
    }    
    
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
