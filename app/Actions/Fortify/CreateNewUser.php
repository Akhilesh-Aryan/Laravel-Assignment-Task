<?php

namespace App\Actions\Fortify;

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
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'dob' => ['required'],
            'gender' => ['required', 'string'],
            'annual_income' => ['required', 'string'],
            'occupation' => ['required', 'string'],
            'family_type' => ['required', 'string'],
            'manglik' => ['required', 'string'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        return User::create([
            'name' => $input['firstname'],
            'last_name' => $input['lastname'],
            'email' => $input['email'],
            'dob' => $input['dob'],
            'gender' => $input['gender'],
            'annual_income' => $input['annual_income'],
            'occupation' => $input['occupation'],
            'family_type' => $input['family_type'],
            'manglik' => $input['manglik'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
