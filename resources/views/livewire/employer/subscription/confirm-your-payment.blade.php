<x-slot name="header">
   <div class="flex justify-between ">
   <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Confirm Your Payment') }}
        </h2>
   </div>
</x-slot>

@if($can_confirm_payment)
        
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
    <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">

<a href="" class="text-blue-900">
this invoice is expired.

</a>    you cant confirm your payment for this invoice.

    </div>

    </div>
@else

    <div>
        
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
   ይህንን ፎርም የሚሞሉት በባንክ ክፍያ ከፈፀሙ በኋላ ብቻ ነው！


</div>
        <x-form-section-two submit="create">
  

    <x-slot name="form">
        {{ $this->form }}
    </x-slot>

    <x-slot name="actions">
        <x-jet-button type="submit">
            {{ __('Confirm Payment') }}
        </x-jet-button>
    </x-slot>
    </x-form-section-two>
        </div>
    </div>
@endif