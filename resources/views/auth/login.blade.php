@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center h-full">
    <div class="md:flex max-w-sm md:max-w-3xl">
        <div class="bg-white md:w-1/2 p-8">
            <h1 class="text-gray-700 text-3xl text-center mb-4">Sign In</h1>
            <form action="{{ route('login') }}" method="post" class="text-gray-600">
                @csrf
                <div class="my-3">
                    <input id="email" type="email"
                        class="border border-rounded w-full py-2 px-4 outline-none focus:shadow-outline @error('email') bg-red-100 border-red-400 text-red-700 @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                        placeholder="Email">
                    @error('email')
                    <span class="text-red-700 text-xs italic" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div>
                    <input id="password" type="password"
                        class="border border-rounded w-full py-2 px-4 outline-none focus:shadow-outline @error('password') bg-red-100 border-red-400 text-red-700 @enderror"
                        name="password" required autocomplete="current-password" placeholder="Password">
                    @error('password')
                    <span class="text-red-700" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="my-3 flex justify-between">
                    <label class="form-check-label" for="remember">
                        <input class="" type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>
                        {{ __('Remember Me') }}
                    </label>

                    @if (Route::has('password.request'))
                    <a class="text-blue-500" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif
                </div>
                <div class="my-3 flex">
                    <button class="border rounded w-1/2 py-2">Register</button>
                    <button type="submit"
                        class="border rounded w-1/2 py-2 border-blue-700 bg-blue-600 text-white ml-2">Sign
                        In</button>
                </div>
                <div class="my-3 text-center text-xs mt-8 text-gray-500">
                    &copy; 2020 EmpritApp. All Right reserved.
                </div>
            </form>
        </div>
        <div class="hidden md:block w-1/2 relative">
            <div class="absolute bottom-0 right-0 text-xs text-gray-800">
                Image by
                <a href="https://unsplash.com/photos/TF9vINyzZ5o">Alex Reiner</a>
                From
                <a href="https://unsplash.com/photos/TF9vINyzZ5o">Unsplash</a>
            </div>
            <img src="https://images.unsplash.com/photo-1577643816920-65b43ba99fba?ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80"
                alt="Login Image" class="w-full h-full object-cover">
        </div>
    </div>
</div>
@endsection
