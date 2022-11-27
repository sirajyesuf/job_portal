<x-slot name="header">
   <div class="flex justify-between">
<h1 class="font-bold text-2xl text-grey-900">
{{ __('Order Successful') }}
<br>
<span class="text-sm">
Make the payment to get your service activated instantly.

  
  </span>

</h1>
<div class="">

<a href="{{asset($invoice)}}"  target="_blank" class="text-blue text-lg text-indingo underline underline-offset-2 mx-3">
  Invoice Detail
</a>
<a href="{{route('employer.confirm_your_payment',['order' => $order])}}" class="text-blue text-lg text-indingo underline underline-offset-2">
  confirm your payment
</a>
</div>
   </div>
</x-slot>
<div>
<div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8" x-data="{tab:@js($tab) , pay_mtds:@js($pay_mtds)}">
<div class="mb-4 border-b border-gray-200 dark:border-gray-700">
    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">

      <template x-for="paymentmtd in pay_mtds">
          <!-- <button class="mr-2 inline-block p-4 rounded-t-lg border-b-2 text-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-500" :class="tab !== paymentmtd.id ? '' : 'border-blue-600'" x-text="paymentmtd.name"
          @click="tab=paymentmtd.id"  
          >
        </button> -->
        <a href="#" class="inline-flex p-4 rounded-t-lg border-b-2 border-transparent" :class="tab !== paymentmtd.id ? '' : 'border-blue-600'"
          @click="tab=paymentmtd.id">
                <!-- <svg aria-hidden="true" class="mr-2 w-5 h-5 text-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path></svg> -->
                <img :src="paymentmtd.logo" alt="">
                <span  x-text="paymentmtd.name"></span>
        </a>
      </template>



    </ul>
</div>
<div id="myTabContent">
   <template x-for="paymentmtd in pay_mtds">
     <div class="p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="profile" role="tabpanel" aria-labelledby="profile-tab" x-show="tab==paymentmtd.id">

  <div class="border-gray-200 px-4 py-5 sm:p-0">
    <dl class="sm:divide-y sm:divide-gray-200">
      <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Account Holder</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0" x-text="paymentmtd.account_holder_name"></dd>
      </div>
      <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5 sm:px-6">
        <dt class="text-sm font-medium text-gray-500" x-show="paymentmtd.type == 'bank'">Account Number</dt>
        <dt class="text-sm font-medium text-gray-500" x-show="paymentmtd.type == 'wallet'">Phone Number</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0" x-show="paymentmtd.type == 'bank'" x-text="paymentmtd.account_number"></dd>
        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0" x-show="paymentmtd.type == 'wallet'"x-text="paymentmtd.phone_number"></dd>
      </div>
      <!-- <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Email address</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">margotfoster@example.com</dd>
      </div>
      <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Salary expectation</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">$120,000</dd>
      </div>
      <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">About</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">Fugiat ipsum ipsum deserunt culpa aute sint do nostrud anim incididunt cillum culpa consequat. Excepteur qui ipsum aliquip consequat sint. Sit id mollit nulla mollit nostrud in ea officia proident. Irure nostrud pariatur mollit ad adipisicing reprehenderit deserunt qui eu.</dd>
      </div> -->
 
    </dl>
  </div>
</div>

    </div>

    
    </template>
</div>

</div>

