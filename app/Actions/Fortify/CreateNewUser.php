<?php

namespace App\Actions\Fortify;

use App\Enums\UserRole;
use App\Enums\UserStatus;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        $role = request()->query('role');


        if($role == UserRole::Employer()->value){
            
            return User::create([
                'name'  => $input['name'],
                'email' => $input['email'],
                'password' => Hash::make($input['password']),
                'role' => $role,
                'status' => UserStatus::Pending()->value

            ]);


        }


        if($role == UserRole::JobSeeker()->value){


            return User::create([
                'name'  => $input['name'],
                'email' => $input['email'],
                'password' => Hash::make($input['password']),
                'role' => $role,
                'status' => UserStatus::Approve()->value

            ]);


        }


        return new User();

 


     
    }
}
