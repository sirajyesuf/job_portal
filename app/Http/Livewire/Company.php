<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Filament\Forms;
use App\Models\EmployerProfile;
use Filament\Notifications\Notification; 

class Company extends Component  implements forms\Contracts\HasForms
{

    use Forms\Concerns\InteractsWithForms;
    
    public EmployerProfile | null $employer_profile;
    public $company_name;
    public $agency_license_number;
    public $primary_phone_number;
    public $contact_name;
    public $recruiter_company;
    public $address;
    public $about;
    public $website;
    public $facebook;
    public $instagram;
    public $twitter;
    public $telegram;
    public $youtube;
    public $tiktok;
    public $logo;
    
    public function mount(){

         $this->employer_profile = EmployerProfile::where('user_id',auth()->user()->id)->first();

         if($this->employer_profile){


            $this->basicForm->fill([

                'company_name' => $this->employer_profile->company_name,
                'agency_license_number' => $this->employer_profile->agency_license_number,
                'primary_phone_number' => $this->employer_profile->primary_phone_number,
                'contact_name' => $this->employer_profile->contact_name,
                'recruiter_company' => $this->employer_profile->recruiter_company
             ]);
    
             $this->addressForm->fill([
                'address' => $this->employer_profile->address,
                'website' => $this->employer_profile->website,
                'about' => $this->employer_profile->about,
                'facebook' => $this->employer_profile->facebook,
                'twitter' => $this->employer_profile->twitter,
                'instagram' => $this->employer_profile->instagram,
                'telegram' => $this->employer_profile->telegram,
                'tiktok' => $this->employer_profile->tiktok,
                'youtube' => $this->employer_profile->youtube,
                'logo'   => $this->employer_profile->logo
             ]);

         }



    }

    public function render()
    {
        return view('livewire.company');
    }

    protected function getBasicFormSchema(): array 
    {
        return [
            Forms\Components\TextInput::make('company_name')->required(),
            Forms\Components\TextInput::make('agency_license_number')->required(),
            Forms\Components\TextInput::make('primary_phone_number')->required(),
            Forms\Components\TextInput::make('contact_name')->required(),
            Forms\Components\Checkbox::make('recruiter_company'),
        ];
    }

    protected function getAddressFormSchema():array
    {

        return [

            Forms\Components\TextInput::make('address'),
            Forms\Components\TextInput::make('website'),
            Forms\Components\Textarea::make('about'),
            Forms\Components\TextInput::make('facebook')
            ->url(),
            Forms\Components\TextInput::make('twitter')
            ->url(),

            Forms\Components\TextInput::make('telegram')
            ->url(),
            Forms\Components\TextInput::make('tiktok')
            ->url(),

            Forms\Components\TextInput::make('instagram')
            ->url(),
            Forms\Components\TextInput::make('youtube')
            ->url(),
            Forms\Components\FileUpload::make('logo')
            ->image(),
        ];

    }

    protected function getForms(): array 
    {
        return [
            'basicForm' => $this->makeForm()
                ->schema($this->getBasicFormSchema()),
            'addressForm' => $this->makeForm()
                ->schema($this->getAddressFormSchema())
        ];
    } 
    
    public function createBasic(): void 
    {   

        if(auth()->user()->employerProfile){
          
            $this->employer_profile->update($this->basicForm->getState());

        }else{
        $this->employer_profile = auth()->user()->employerProfile()->create($this->basicForm->getState());
        }

        Notification::make() 
        ->title('Saved successfully')
        ->success()
        ->send(); 
    }

    public function createAddress(): void 
    {   

        if(auth()->user()->employerProfile){

          
            $this->employer_profile->update($this->addressForm->getState());

        }else{
        auth()->user()->employerProfile()->create($this->addressForm->getState());
        }

        Notification::make() 
        ->title('Saved successfully')
        ->success()
        ->send(); 
    } 


}
