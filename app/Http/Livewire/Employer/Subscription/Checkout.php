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

    public function mount(Plan $plan)
    {
     $this->plan = $plan;
     $this->createOrder();

     $notification = new \MBarlow\Megaphone\Types\Important(
        'Expected Downtime!', // Notification Title
        'We are expecting some downtime today at around 15:00 UTC for some planned maintenance. Read more on a blog post!', // Notification Body
        'https://example.com/link', // Optional: URL. Megaphone will add a link to this URL within the Notification display.
        'Read More...' // Optional: Link Text. The text that will be shown on the link button.
    );


    auth()->user()->notify($notification);



    }

    public function generateInvoice(){



    }


    public function createOrder()
    {

        $data = [
            'invoice_number' => Str::random(5),
            'invoice_date' => Carbon::today(),
            'due_date' => Carbon::today()->addDays(2),
            'plan_id' => $this->plan->id,
            'status' => InvoiceStatus::UnPaid()
        ];

        $invoice = GenerateInvoice::handle($data);

        // dump($invoice->save());
        // dump($invoice->url());



        $user = auth()->user();
        $order= $user->orders()->where('plan_id',$this->plan->id)->where('status',InvoiceStatus::UnPaid())->latest()->first();

        if(is_null($order)){

            $data = [
                'invoice_number' => Str::random(5),
                'invoice_date' => Carbon::today(),
                'due_date' => Carbon::today()->addDays(2),
                'plan_id' => $this->plan->id,
                'status' => InvoiceStatus::UnPaid()
            ];

            $data = GenerateInvoice::handle($data);

            $user->orders()->create($data);
        }
        elseif(Carbon::parse($order->due_date)->lessThan(Carbon::today())){

                        // create new order 

                        $user->orders()->create([
                            'invoice_number' => Str::random(5),
                            'invoice_date' => Carbon::today(),
                            'due_date' => Carbon::today()->addDays(2),
                            'plan_id' => $this->plan->id,
                            'status' => InvoiceStatus::UnPaid()
                        ]);


        }


        




    }

    public function render()
    {
        return view('livewire.employer.subscription.checkout');
    }
}
