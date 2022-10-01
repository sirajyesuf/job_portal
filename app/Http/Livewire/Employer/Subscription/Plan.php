<?php

namespace App\Http\Livewire\Employer\Subscription;

use Livewire\Component;
use App\Enums\PlanDuration;
use App\Models\Plan as PlanModel;

class Plan extends Component
{

    public $monthly_plans;
    public $yearly_plans;





    public function mount(){

        $this->monthly();
        $this->yearly();


    }

    public function yearly(){

        $this->yearly_plans = PlanModel::where('duration',PlanDuration::Yearly())->get();
    }

    public function monthly(){


        $this->monthly_plans = PlanModel::where('duration',PlanDuration::Monthly())->get();

    }
    public function render()
    {
        return view('livewire.employer.subscription.plan');
    }
}
