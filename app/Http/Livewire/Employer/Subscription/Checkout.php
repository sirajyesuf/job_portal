<?php

namespace App\Http\Livewire\Employer\Subscription;

use Livewire\Component;
use App\Models\Plan;
use Illuminate\Support\Facades\Auth;
use LaravelDaily\Invoices\Invoice;
use App\Enums\InvoiceStatus;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use App\Services\GenerateInvoice;
class Checkout extends Component
{   
    public Plan $plan;
    public $user;
    public $order = null;
    public $active_plan_id = null;

    public function mount(Plan $plan)
    {
     $this->user = auth()->user();
     $this->plan = $plan;
     $this->active_plan_id = $this->user->activePlan->id;

     $this->createOrder();

    //  $notification = new \MBarlow\Megaphone\Types\Important(
    //     'Order Created Successfully!', // Notification Title
    //     'We are expecting some downtime today at around 15:00 UTC for some planned maintenance. Read more on a blog post!', // Notification Body
    //     'https://example.com/link', // Optional: URL. Megaphone will add a link to this URL within the Notification display.
    //     'Read More...' // Optional: Link Text. The text that will be shown on the link button.
    // );

    // auth()->user()->notify($notification);

    }


    


    public function createOrder()
    {

        // check for order is already created or not for that specific plan
        $this->order= $this->user->orders()->where('plan_id',$this->plan->id)->where('status',InvoiceStatus::UnPaid())->where('due_date','<',Carbon::today())->first();

        if(is_null($this->order)){

            $data = [
                'invoice_number' => Str::random(5),
                'invoice_date' => Carbon::today(),
                'due_date' => Carbon::today()->addDays(2),
                'plan_id' => $this->plan->id,
                'status' => InvoiceStatus::UnPaid(),
            ];

            return $this->order = $this->user->orders()->create($data);
        }

    }

    public function render()
    {
        return view('livewire.employer.subscription.checkout');
    }
}
