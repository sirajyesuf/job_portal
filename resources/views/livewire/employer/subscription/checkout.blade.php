@if($active_plan_id != $plan->id)

<x-slot name="header">
   <div class="flex justify-start">
<h1 class="font-bold text-2xl text-grey-900">
{{ __('Order Successful') }}
        </h1>
   </div>
</x-slot>
<div>
      <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">

        <div class="overflow-hidden bg-white shadow sm:rounded-lg mx-auto p-10 ">
  <div class="px-4 py-5 sm:px-6">
  <img src="/4436481.png" alt="" width="50" height="50">
  <br>

    <h3 class="text-lg font-medium leading-6 text-gray-900">Plan Detail</h3>
    <p class="mt-1 max-w-2xl text-sm text-gray-500">make the payment to get your service activated instantly.</p>
  </div>
  <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
    <dl class="sm:divide-y sm:divide-gray-200">
      <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Plan</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{$plan->name}}</dd>
      </div>
      <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Price</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{$plan->price}} ETB</dd>
      </div>
      <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Number of Jobs</dt>
        @if(is_null($plan->number_jobs))
          <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">Unlimited</dd>
        @else
          <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{$plan->number_jobs}}</dd>
        @endif
      </div>
      <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Duration</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{$plan->duration}} Days</dd>
      </div>
      <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Description</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{$plan->description}}</dd>
      </div>
      <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">post on telegram channel</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
          @if($plan->post_on_telegram_channel)
          <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
          </svg>
          @else
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-600">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
          @endif
        </dd>
      </div>
      <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">featured on the home page</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
        @if($plan->featured_employer_on_the_homepage)
          <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
          </svg>
          @else
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-600">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        @endif
        </dd>
      </div>
      <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5 sm:px-6">
            <div class="ml-4 flex-shrink-0">
              <a  href="{{route('employer.processed_payment',['order' => $order])}}" type="button" class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 mr-2 mb-2">
              <svg class="text-gray-400 group-hover:text-gray-500 -ml-0.5 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M2.5 4A1.5 1.5 0 001 5.5V6h18v-.5A1.5 1.5 0 0017.5 4h-15zM19 8.5H1v6A1.5 1.5 0 002.5 16h15a1.5 1.5 0 001.5-1.5v-6zM3 13.25a.75.75 0 01.75-.75h1.5a.75.75 0 010 1.5h-1.5a.75.75 0 01-.75-.75zm4.75-.75a.75.75 0 000 1.5h3.5a.75.75 0 000-1.5h-3.5z" clip-rule="evenodd" />
          </svg>
  Processed To Payment
</a>
      </div>
           
    
        </dd>
      </div>
    </dl>
  </div>
</div>

  
        </div>
</div>

@endif


@if($active_plan_id == $plan->id)

<x-slot name="header">
   <div class="flex justify-start">
<h1 class="font-bold text-2xl text-grey-900">
{{ __('Active Plan') }}
        </h1>
   </div>
</x-slot>
<div>
      <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">

        <div class="overflow-hidden bg-white shadow sm:rounded-lg mx-auto p-10 ">
  <div class="px-4 py-5 sm:px-6">
  <img src="/4436481.png" alt="" width="50" height="50">
  <br>

    <h3 class="text-lg font-medium leading-6 text-gray-900">Plan Detail</h3>
    <p class="mt-1 max-w-2xl text-sm text-gray-500">make the payment to get your service activated instantly.</p>
  </div>
  <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
    <dl class="sm:divide-y sm:divide-gray-200">
      <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Plan</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{$plan->name}}</dd>
      </div>
      <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Price</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{$plan->price}} ETB</dd>
      </div>
      <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Number of Jobs</dt>
        @if(is_null($plan->number_jobs))
          <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">Unlimited</dd>
        @else
          <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{$plan->number_jobs}}</dd>
        @endif
      </div>
      <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Duration</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{$plan->duration}} Days</dd>
      </div>
      <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Description</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{$plan->description}}</dd>
      </div>
      <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">post on telegram channel</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
          @if($plan->post_on_telegram_channel)
          <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
          </svg>
          @else
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-600">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
          @endif
        </dd>
      </div>
      <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">featured on the home page</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
        @if($plan->featured_employer_on_the_homepage)
          <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
          </svg>
          @else
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-600">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        @endif
        </dd>
      </div>
      <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5 sm:px-6">
            <div class="ml-4 flex-shrink-0">
              <a  href="{{route('employer.processed_payment',['order' => $order])}}" type="button" class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 mr-2 mb-2">
            
  Cancel 
</a>
      </div>
           
    
        </dd>
      </div>
    </dl>
  </div>
</div>

  
        </div>
</div>

@endif

