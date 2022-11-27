<?php

namespace App\Http\Livewire\Employer\Subscription;

use Livewire\Component;
use App\Models\PaymentMethod;
use App\Models\Order;
use App\Services\GenerateInvoice;
class Payment extends Component
{
    public $pay_mtds;
    public $tab;
    public $order;
    public $invoice;

    public function mount(Order $order){

        $this->tab = PaymentMethod::first()->id;
        $this->pay_mtds = PaymentMethod::all();
        $this->order = $order;
        $this->invoice = GenerateInvoice::handle($this->order)->save('public')->url();

    }
    public function render()
    {
        return view('livewire.employer.subscription.payment');
    }
}
