<?php

namespace App\Services;
use LaravelDaily\Invoices\Invoice;
use LaravelDaily\Invoices\Classes\Party;
use LaravelDaily\Invoices\Classes\InvoiceItem;
use Illuminate\Support\Facades\Auth;
use App\Models\Plan;
class  GenerateInvoice
{

    public static function handle(Array $data)
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
                ->title('Service 1')
                ->description('Your product or service description')
                ->pricePerUnit(Plan::find($data['plan_id'])->price)
        ];


        $invoice = Invoice::make('Invoice')
            ->status(__('invoices::invoice.paid'))
            ->sequence(667)
            ->serialNumberFormat('{SEQUENCE}')
            ->seller($client)
            ->buyer($customer)
            ->date(now()->subWeeks(3))
            ->dateFormat('m/d/Y')
            ->payUntilDays(14)
            ->currencySymbol('$')
            ->currencyCode('USD')
            ->currencyFormat('{SYMBOL}{VALUE}')
            ->currencyThousandsSeparator('.')
            ->currencyDecimalPoint(',')
            ->filename($client->name . ' ' . $customer->name)
            ->addItems($items);

        
            return $invoice;


    } 

}
