<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Order;
use App\Models\User;
class OrderConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public $order;
    public $employer;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Order $order ,User $employer)
    {
        $this->order = $order;
        $this->employer = $employer;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.order_confirmation', [
            'url' => 'http',
        ]);

    }
}
