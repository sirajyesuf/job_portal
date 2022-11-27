<?php

namespace App\Services;
use LaravelDaily\Invoices\Invoice;
use LaravelDaily\Invoices\Classes\Party;
use LaravelDaily\Invoices\Classes\InvoiceItem;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use Carbon\Carbon;

class  GenerateInvoice
{

    public static function handle(Order $order)
    {
        $user = auth()->user();
        $customer = new Party([
            'name'          => $user->name,
            'address'       => $user->employerProfile->address
        ]);

        $client = new Party([
            'name'          => $user->name,
            'address'       => $user->employerProfile->address,
            'custom_fields' => [
                'bank' => 'cbe',
                'account_holder' => 'siraj',
                'account_number' => '10023567890'
            ]
        ]);

        $items = [
            (new InvoiceItem())
                ->title($order->plan->name)
                ->description($order->plan->description)
                ->pricePerUnit($order->plan->price)
        ];


        $invoice = Invoice::make('Invoice')
            ->status(__($order->status))
            ->sequence(667)
            ->serialNumberFormat('{SEQUENCE}')
            ->seller($client)
            ->buyer($customer)
            ->date(Carbon::parse($order->invoice_date))
            ->dateFormat('m/d/Y')
            ->payUntilDays(2)
            ->currencyCode('ETB')
            ->currencyFormat('{SYMBOL}{VALUE}')
            ->currencyThousandsSeparator('.')
            ->currencyDecimalPoint(',')
            ->filename($order->invoice_number)
            ->addItems($items);

        
            return $invoice;


    } 

}
