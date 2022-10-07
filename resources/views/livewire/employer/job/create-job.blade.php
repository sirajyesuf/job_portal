<x-slot name="header">
   <div class="flex justify-between ">
   <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create New Job') }}
        </h2>
   </div>
</x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <x-form-section-two submit="createBasic">
  

    <x-slot name="form">
        {{ $this->form }}
    </x-slot>

    <x-slot name="actions">
        <x-jet-button type="submit">
            {{ __('Publishe') }}
        </x-jet-button>
    </x-slot>
    </x-form-section-two>
        </div>
    </div>