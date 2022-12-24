<?php

namespace App\Http\Livewire\Employer\Subscription;

use Livewire\Component;
use App\Enums\PlanDuration;
use App\Models\Plan as PlanModel;
use App\Enums\SubscriptionStatus;

class Plan extends Component
{

    public $monthly_plans;
    public $yearly_plans;
    public $employer_active_plan;





    public function mount(){

        // $this->employer_active_plan = auth()->user()->subscriptions()->where('status',SubscriptionStatus::Active())->first()->plan->id;
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

    public function cancelSubscription($plan){

    }
}
