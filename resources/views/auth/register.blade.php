<x-guest-layout>
    <x-jet-authentication-card>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <x-jet-validation-errors class="mb-4" />
                    <h4 class="text-center">Register</h4>
                    <div class="card">
                        <article class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-row">
                                    <div class="col form-group">
                                        <label>First name <span class="text-danger">*</span> </label>
                                        <input type="text" name="firstname" class="form-control"  placeholder="first name" value="{{old('firstname')}}">
                                    </div> 
                                    <div class="col form-group">
                                        <label>Last name <span class="text-danger">*</span></label>
                                        <input type="text" name="lastname" class="form-control" placeholder=" last name " value="{{old('lastname')}}">
                                    </div> 
                                </div> 
                                <div class="form-group">
                                    <label>Email address <span class="text-danger">*</span></label>
                                    <input type="email" name="email" class="form-control" placeholder="Email" value="{{old('email')}}">
                                </div> 
                                <div class="form-group">
                                    <label>Date of Birth<span class="text-danger">*</span></label>
                                    <input type="date" name="dob" class="form-control" placeholder="">
                                </div> 
                                <div class="form-group">
                                    <label class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" value="Male">
                                        <span class="form-check-label"> Male </span>
                                    </label>
                                    <label class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" value="Female">
                                        <span class="form-check-label"> Female</span>
                                    </label>
                                </div> 
                                <div class="form-group">
                                    <label>Annual Income<span class="text-danger">*</span></label>
                                    <input type="text" name="annual_income" class="form-control" placeholder="annual income" value="{{old('annual_income')}}">
                                </div> 
                                <div class="form-group">
                                    <label>Occupation<span class="text-danger">*</span></label>
                                   <select name="occupation" id="occupation" class="form-control">
                                       <option value=""hidden selected>-Select-</option>
                                       <option value="Private job">Private job</option>
                                       <option value="Government Job">Government Job</option>
                                       <option value="Business">Business</option>
                                   </select>
                                </div> 
                                <div class="form-group">
                                    <label>Family Type<span class="text-danger">*</span></label>
                                   <select name="family_type" id="family_type" class="form-control">
                                       <option value=""hidden selected>-Select-</option>
                                       <option value="Joint Family">Joint Family</option>
                                       <option value="Nuclear Family">Nuclear Family</option>
                                   </select>
                                </div> 
                                <div class="form-group">
                                    <label>Manglik<span class="text-danger">*</span></label>
                                   <select name="manglik" id="manglik" class="form-control">
                                       <option value=""hidden selected>-Select-</option>
                                       <option value="Yes">Yes</option>
                                       <option value="No">No</option>
                                       <option value="Both">Both</option>
                                   </select>
                                </div> 
                                <div class="form-group">
                                    <label>Create Password <span class="text-danger">*</span></label>
                                    <input class="form-control" name="password" autocomplete="new-password" type="password">
                                </div> 
                                <div class="form-group">
                                    <label>Confirm Password <span class="text-danger">*</span></label>
                                    <input class="form-control"   name="password_confirmation" autocomplete="new-password" type="password">
                                </div> 
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block"> Register </button>
                                </div> <!-- form-group// -->
                                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                <div class="mt-4">
                                    <x-jet-label for="terms">
                                        <div class="flex items-center">
                                            <x-jet-checkbox name="terms" id="terms" />

                                            <div class="ml-2">
                                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'"
                                                    class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms
                                                    of Service').'</a>',
                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'"
                                                    class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy
                                                    Policy').'</a>',
                                                ]) !!}
                                            </div>
                                        </div>
                                    </x-jet-label>
                                </div>
                                @endif

                                <div class="flex items-center justify-end mt-4">
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                        href="{{ route('login') }}">
                                        {{ __('Already registered?') }}
                                    </a>
                                    {{-- <x-jet-button class="ml-4">
                                    {{ __('Register') }}
                                    </x-jet-button> --}}
                                </div>
                            </form>
                        </article> 
                    </div> 
                </div> 
            </div> 
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
