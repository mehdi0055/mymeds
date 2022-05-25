{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Email Password Reset Link') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}



<x-guest-layout>
    <div id="wrapper">
        <div class="vertical-align-wrap">
            <div class="vertical-align-middle auth-main">
                <div class="auth-box">
                    <div class="top">
                        <img src="{{ asset('landing/assets/img/mymed_logo_light.png') }}" alt="MyMed">
                    </div>
                    
                    <div class="card">
                        
                        <div class="header">
                            <p class="lead">Recover my password</p>
                        </div>
                        
                        <div class="body">
                            <x-jet-validation-errors class="alert alert-danger" />
                            <p>Please enter your email address below to receive instructions for resetting password.</p>
                            <form class="form-auth-small" method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" :value="old('email')" required autofocus placeholder="Your Email Address">
                                </div>
                                <x-jet-button  class="btn btn-primary btn-lg btn-block">
                                    {{ __('Email Password Reset Link') }}
                                </x-jet-button>
                                
                                <div class="bottom">
                                    <span class="helper-text">Know your password? <a href="{{ route('login') }}">Login</a></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>