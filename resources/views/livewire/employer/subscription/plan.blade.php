<div class="bg-white" x-data="{active:1 , monthly_plans:@js($monthly_plans),yearly_plans:@js($yearly_plans),employer_active_plan:@js($employer_active_plan)}">
  <div class="mx-auto max-w-7xl py-24 px-4 sm:px-6 lg:px-8">
    <div class="sm:align-center sm:flex sm:flex-col">
      <h1 class="text-5xl font-bold tracking-tight text-gray-900 sm:text-center">Pricing Plans</h1>
      <p class="mt-5 text-xl text-gray-500 sm:text-center">Start building for free, then add a site plan to go live. Account plans unlock additional features.</p>
      <div class="relative mt-6 flex self-center rounded-lg bg-gray-100 p-0.5 sm:mt-8">
        <button x-on:click="active=1" x-bind:class="active==1 ? 'bg-white' : ''"  type="button" class="relative w-1/2 whitespace-nowrap rounded-md border-gray-200  py-2 text-sm font-medium text-gray-900 shadow-sm focus:z-10 focus:outline-none focus:ring-2 focus:ring-indigo-500 sm:w-auto sm:px-8">Monthly billing</button>
        <button x-on:click="active=2" x-bind:class="active==2 ? 'bg-white' : ''"  type="button" class="relative ml-0.5 w-1/2 whitespace-nowrap rounded-md border border-transparent py-2 text-sm font-medium text-gray-700 focus:z-10 focus:outline-none focus:ring-2 focus:ring-indigo-500 sm:w-auto sm:px-8">Yearly billing</button>
      </div>
    </div>

 
  <div class="mt-12 space-y-4 sm:mt-16 sm:grid sm:grid-cols-2 sm:gap-6 sm:space-y-0 lg:mx-auto lg:max-w-4xl xl:mx-0 xl:max-w-none xl:grid-cols-4">

    <!-- monthly -->    
  <template  x-for="plan in monthly_plans">
  <div class="divide-y divide-gray-200 rounded-lg border border-gray-200 shadow-sm" x-show="active==1">
        <div class="p-6">
          <h2 class="text-lg font-medium leading-6 text-gray-900" x-text="plan.name"></h2>
          <p class="mt-4 text-sm text-gray-500" x-text="plan.description"></p>
          <p class="mt-8">
            <span class="text-4xl font-bold tracking-tight text-gray-900" x-text="plan.price"></span>
            <span class="text-base font-medium text-gray-500">/mo</span>
          </p>

          <template x-if="plan.id != employer_active_plan">

          <a  x-bind:href="'/employer/checkout/' + plan.id" class="mt-8 block w-full rounded-md border border-gray-800 bg-gray-800 py-2 text-center text-sm font-semibold text-white hover:bg-gray-900">Buy</a>
          
        </template>
        <template x-if="plan.id == employer_active_plan">

        <a  x-bind:href="'/employer/checkout/' + plan.id" class="mt-8 block w-full rounded-md border border-blue-800 bg-blue-800 py-2 text-center text-sm font-semibold text-white" disabled="true">Active</a>
        
      </template>

        </div>
        <div class="px-6 pt-6 pb-8">
          <h3 class="text-sm font-medium text-gray-900">What's included</h3>
          <ul role="list" class="mt-6 space-y-4">

          <template x-if="plan.number_jobs == null">
          <li class="flex space-x-3" >
              <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-500">Publish Unlimited Number of Jobs.</span>
            </li>
          </template>
          <template  x-if="plan.number_jobs != null">
            <li class="flex space-x-3">
              <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-500" x-text="`Publish${plan.number_jobs} number of jobs only.`"></span>
            </li>
          </template>

          <template x-if="plan.post_on_telegram_channel==1">

              <li class="flex space-x-3"  >
                <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                </svg>
                <span class="text-sm text-gray-500"> Publish on Telegram Channel</span>
              </li>

            </template>

            <template x-if="plan.post_on_telegram_channel == 0">

                <li class="flex space-x-3"  >
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-500 flex-shrink-0">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
                  <span class="text-sm text-gray-500"> Publish on Telegram Channel</span>
                </li>

            </template>


            <template   x-if="plan.featured_employer_on_the_homepage == 1">
              <li class="flex space-x-3">
                <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                </svg>
                <span class="text-sm text-gray-500"> Featured Employer On Home Page</span>
              </li>
            </template>


              <template x-if="plan.featured_employer_on_the_homepage==0">

                          <li class="flex space-x-3">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-500 flex-shrink-0">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                          </svg>
                          <span class="text-sm text-gray-500"> Featured Employer On Home Page</span>
                          </li>

              </template>


          </ul>
        </div>
      </div>
    </template>

    <!-- yearly -->

  <template x-for="plan in yearly_plans">
  <div class="divide-y divide-gray-200 rounded-lg border border-gray-200 shadow-sm" x-show="active==2">
        <div class="p-6">
          <h2 class="text-lg font-medium leading-6 text-gray-900" x-text="plan.name"></h2>
          <p class="mt-4 text-sm text-gray-500" x-text="plan.description"></p>
          <p class="mt-8">
            <span class="text-4xl font-bold tracking-tight text-gray-900" x-text="plan.price"></span>
            <span class="text-base font-medium text-gray-500">/yr</span>
          </p>
          <a x-bind:href="'/employer/checkout/' + plan.id" class="mt-8 block w-full rounded-md border border-gray-800 bg-gray-800 py-2 text-center text-sm font-semibold text-white hover:bg-gray-900">Buy</a>
        </div>
        <div class="px-6 pt-6 pb-8">
          <h3 class="text-sm font-medium text-gray-900">What's included</h3>
          <ul role="list" class="mt-6 space-y-4">

          <template x-if="plan.number_jobs == null">
          <li class="flex space-x-3" >
              <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-500">Publish Unlimited Number of Jobs.</span>
            </li>
          </template>
          <template  x-if="plan.number_jobs != null">
            <li class="flex space-x-3">
              <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-500" x-text="`Publish${plan.number_jobs} number of jobs only.`"></span>
            </li>
          </template>

          <template x-if="plan.post_on_telegram_channel==1">

              <li class="flex space-x-3"  >
                <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                </svg>
                <span class="text-sm text-gray-500"> Publish on Telegram Channel</span>
              </li>

            </template>

            <template x-if="plan.post_on_telegram_channel == 0">

                <li class="flex space-x-3"  >
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-500 flex-shrink-0">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
                  <span class="text-sm text-gray-500"> Publish on Telegram Channel</span>
                </li>

            </template>


            <template   x-if="plan.featured_employer_on_the_homepage == 1">
              <li class="flex space-x-3">
                <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                </svg>
                <span class="text-sm text-gray-500"> Featured Employer On Home Page</span>
              </li>
            </template>


              <template x-if="plan.featured_employer_on_the_homepage==0">

                          <li class="flex space-x-3">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-500 flex-shrink-0">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                          </svg>
                          <span class="text-sm text-gray-500"> Featured Employer On Home Page</span>
                          </li>

              </template>


          </ul>
        </div>
      </div>
    </template>



    </div>
  </div>
</div>
