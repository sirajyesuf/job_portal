<?php

namespace App\Http\Livewire\Employer\Subscription;

use App\Models\Order;
use Livewire\Component;
use Filament\Forms;
use App\Models\PaymentMethod;
use App\Models\Transaction;
use Carbon\Carbon;
use Filament\Notifications\Notification;
use App\Enums\UserStatus;

class ConfirmYourPayment extends Component implements forms\Contracts\HasForms
{
    use Forms\Concerns\InteractsWithForms;

    public Order $order;
    public $name;
    public $payment_method_id;
    public $reference_number;
    public $can_confirm_payment = true;

    public function mount(Order $order)
    {
        $this->order = $order;

        //check for the invoice due date
        if(!Carbon::parse($order->due_date)->lessThan(Carbon::today())) $this->can_confirm_payment = false;
    }

    public function render()
    {
        return view('livewire.employer.subscription.confirm-your-payment');
    }
    protected function getFormSchema(): array
    {

        return [

            Forms\Components\Select::make('payment_method_id')
            ->label('Payment Method')
            ->options(PaymentMethod::all()->pluck('name','id'))
            ->required(),
            Forms\Components\TextInput::make('name')
            ->required()
            ->label('Full Name'),
            Forms\Components\TextInput::make('reference_number')
            ->required()
            ->label('transaction_number'),


        ];
    }

    public function create(){

        // if any pending transaction found dont create the transaction

        if($this->order->transactions()->where('status',UserStatus::Pending())->first()){

            return Notification::make() 
            ->title('Please wait for approval!')
            ->success()
            ->send();


        }

        $data = $this->form->getState();
        $data['order_id'] = $this->order->id;
        $data['payment_date'] = Carbon::today();
        Transaction::create($data);

        Notification::make() 
        ->title('Created successfully!')
        ->success()
        ->send();     
    }
}
