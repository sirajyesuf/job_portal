<?php

namespace App\Http\Livewire\Employer\Subscription;

use Livewire\Component;
use App\Models\Plan;

class Checkout extends Component
{   
    public Plan $plan;

    public function mount(Plan $plan)
    {
     $this->plan = $plan;

    }

    public function render()
    {
        return view('livewire.employer.subscription.checkout');
    }
}
