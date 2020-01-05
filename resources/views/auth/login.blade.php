@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center h-full">
    <div class="md:flex max-w-sm md:max-w-3xl">
        <div class="bg-white md:w-1/2 p-8">
            <h1 class="text-gray-700 text-3xl text-center mb-4">Sign In</h1>
            <a href="/auth/twitter"
                class="border border-gray-300 rounded-full pl-4 pr-4 py-3 leading-none flex items-center justify-center text-twitter hover:border-gray-500 ml-2 whitespace-no-wrap"><svg
                    version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 612 612"
                    xml:space="preserve" class="h-6 w-6 fill-current mr-3">
                    <g>
                        <path
                            d="M612,116.258c-22.525,9.981-46.694,16.75-72.088,19.772c25.929-15.527,45.777-40.155,55.184-69.411 c-24.322,14.379-51.169,24.82-79.775,30.48c-22.907-24.437-55.49-39.658-91.63-39.658c-69.334,0-125.551,56.217-125.551,125.513 c0,9.828,1.109,19.427,3.251,28.606C197.065,206.32,104.556,156.337,42.641,80.386c-10.823,18.51-16.98,40.078-16.98,63.101 c0,43.559,22.181,81.993,55.835,104.479c-20.575-0.688-39.926-6.348-56.867-15.756v1.568c0,60.806,43.291,111.554,100.693,123.104 c-10.517,2.83-21.607,4.398-33.08,4.398c-8.107,0-15.947-0.803-23.634-2.333c15.985,49.907,62.336,86.199,117.253,87.194 c-42.947,33.654-97.099,53.655-155.916,53.655c-10.134,0-20.116-0.612-29.944-1.721c55.567,35.681,121.536,56.485,192.438,56.485 c230.948,0,357.188-191.291,357.188-357.188l-0.421-16.253C573.872,163.526,595.211,141.422,612,116.258z">
                        </path>
                    </g>
                </svg> <span class="font-bold text-gray-800 text-sm">Login with Twitter</span></a>
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
