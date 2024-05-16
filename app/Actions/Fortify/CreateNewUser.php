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

           
            "name" => "required|min:3|max:25|regex:/^[aA-zZ\s]+$/",
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            // 'student_id' => 'required|unique:users|regex:/^([CSE|EEE|CEN]\)[0-9]{3}[0-9]{5}$/',
            'student_id' => 'required|unique:users',


            'department' => ['required', 'string', 'max:255'],
            'batch' => ['required', 'string', 'max:255'],
            

            // 'department' => 'required',
            // 'batch' => 'required',
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();
            // dd($input['student_id']);

        return User::create([
            'name' => $input['name'],
            'student_id' => $input['student_id'],
            'department' => $input['department'],
            'batch' => $input['batch'],
            'address' => $input['address'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
