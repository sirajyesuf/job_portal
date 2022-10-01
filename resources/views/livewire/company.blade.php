    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Company') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">


    <x-form-section submit="createBasic">
    <x-slot name="title">
        {{ __('Basic Information') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update your company\'s basic informations.') }}
    </x-slot>

    <x-slot name="form">
        {{ $this->basicForm }}

    </x-slot>

    <x-slot name="actions">
        <x-jet-button type="submit">
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
</x-form-section>

            

    <x-jet-section-border />

    @if($this->employer_profile)
    <x-form-section submit="createAddress">
    <x-slot name="title">
        {{ __('Social Media') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update your company\'s basic informations.') }}
    </x-slot>

    <x-slot name="form">
        {{ $this->addressForm }}

    </x-slot>

    <x-slot name="actions">
        <x-jet-button type="submit">
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
</x-form-section>
@endif



        </div>
    </div>
