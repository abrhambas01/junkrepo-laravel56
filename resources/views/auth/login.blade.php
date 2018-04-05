@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">


        <div class="container mx-auto h-full flex justify-center items-center">
            <div class="w-1/3">
                <h1 class="font-hairline mb-6 text-center">Login</h1>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="border-teal p-8 border-t-12 bg-white mb-6 rounded-lg shadow-lg">
                        <div class="mb-4">
                            <label class="font-bold text-grey-darker block mb-2">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="block appearance-none w-full bg-white border {{ $errors->has('email') ? ' border-red-light hover:border-red' : ' border-grey-light hover:border-grey ' }} px-2 py-2 rounded shadow" placeholder="Email" required autofocus>
                            @if ($errors->has('email'))
                                <div class="text-red-light px-4 py-2 relative" role="alert">
                                    <span>{{ $errors->first('email') }} </span>
                                </div>
                            @endif
                        </div>
                        <div class="mb-4">
                            <label class="font-bold text-grey-darker block mb-2">{{ __('Password') }}</label>
                            <input id="password" type="password" class="block appearance-none w-full bg-white border {{ $errors->has('email') ? ' border-red-light hover:border-red' : ' border-grey-light hover:border-grey ' }}  px-2 py-2 rounded shadow {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" required>
                            @if ($errors->has('password'))
                                <div class="text-red-light px-4 py-2 relative" role="alert">
                                    <span>{{ $errors->first('password') }}</span>
                                </div>
                            @endif
                        </div>
                        <div class="flex items-center justify-between">
                            <button class="bg-teal-dark hover:bg-teal text-white font-bold py-2 px-4 rounded">
                                Login
                            </button>

                            <a class="no-underline inline-block align-baseline font-bold text-sm text-blue hover:text-blue-dark float-right" href="#">
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                            </a>
                        </div>
                        <div class="text-right">
                            <a class="no-underline inline-block align-baseline font-bold text-sm text-blue hover:text-blue-dark float-right" href="#">
                                Forgot Password?
                            </a>
                        </div>

                    </div>
                </form>


                <div class="text-center">
                    <p class="text-grey-dark text-sm">Don't have an account? <a href="/register" class="no-underline text-blue font-bold">Create an Account</a>.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
