<?php

namespace App\Http\Livewire\Employer\Subscription;

use App\Models\Order;
use Livewire\Component;
class InvoiceDetail extends Component
{   
    public $order;

    public function mount(Order $order){

        $this->order;

    }
    public function render()
    {
        return view('livewire.employer.subscription.invoice-detail');
    }
}
