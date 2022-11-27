<?php

namespace App\Filament\Resources\OrderResource\RelationManagers;

use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Models\PaymentMethod;
use App\Enums\InvoiceStatus;
use App\Models\Subscription;
use Carbon\Carbon;
use Filament\Notifications\Notification;
use App\Enums\UserStatus;

class TransactionsRelationManager extends RelationManager
{
    protected static string $relationship = 'transactions';

    protected static ?string $recordTitleAttribute = 'id';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

            Forms\Components\Select::make('payment_method_id')
                ->options(PaymentMethod::all()->pluck('name','id'))
                ->required()
                ->label('Payment Method'),
            Forms\Components\TextInput::make('name')
                ->required()
                ->label('full name')
                ->maxLength(255),
            Forms\Components\TextInput::make('reference_number')
                ->required()
                ->label('transaction_number')
                ->maxLength(255),
            Forms\Components\DatePicker::make('payment_date')
                ->required()
                ->label('payment_date')

            ]);
    }

    public static function table(Table $table): Table
    {

        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\BadgeColumn::make('reference_number'),
                Tables\Columns\TextColumn::make('payment_date'),
                Tables\Columns\BadgeColumn::make('paymentMethod.name'),
                Tables\Columns\BadgeColumn::make('status')
                ->enum([
                    1 => UserStatus::Pending()->label,
                    2 => UserStatus::Approve()->label,
                    3 => UserStatus::Rejecte()->label
                ])

            ])
            ->filters([
                //
            ])
            ->headerActions([
                // Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
                // Tables\Actions\DeleteAction::make(),
                Tables\Actions\Action::make('Accept')
                ->action('acceptTransaction')
                ->label('Approve')
                ->visible(fn($record) => $record->status == UserStatus::Pending()->value),
                Tables\Actions\Action::make('Reject')
                ->action('rejectTransaction')
                ->visible(fn($record) => $record->status == UserStatus::Pending()->value)
                ->color('danger')
            ])
            ->bulkActions([
                // Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public function acceptTransaction($record){

        //accept the transaction
        $record->update([
            'status' => UserStatus::Approve()
        ]);

        //update the order
        $this->ownerRecord->update([
            'status' => InvoiceStatus::Paid()
        ]);

        //create the subscription
        Subscription::create([
            'employer_id' => $this->ownerRecord->employer_id,
            'plan_id'  => $this->ownerRecord->plan_id,
            'transaction_id' => $record->id,
            'start_date' => Carbon::today()
        ]);

        Notification::make() 
        ->title('Accepted successfully')
        ->success()
        ->send(); 

    }

    public function rejectTransaction($record){

        //reject the transaction
        $record->update([
            'status' => UserStatus::Rejecte()
        ]);

        //update the order
        $this->ownerRecord->update([
            'status' => InvoiceStatus::UnPaid()
        ]);

        //delete the subscription
        $subscription = Subscription::where('transaction_id',$record->id)->first();

        if($subscription) $subscription->delete();

        Notification::make() 
        ->title('Rejected successfully')
        ->success()
        ->send();


        
    }
}
