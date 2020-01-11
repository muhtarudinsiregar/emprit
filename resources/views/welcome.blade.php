@extends('layouts.app')
@section('content')
<header class="relative flex pt-32 pb-16 px-4 w-full bg-gradient xl:pt-40 xl:h-screen xl:px-24">
    <div class="text-center md:text-left md:w-full z-10 xxl:max-w-2xl">
        <h1 class="text-3xl xl:text-5xl text-white font-bold leading-tight">
            Organize your Favorite Tweet with Ease
        </h1>
        <p class="text-white xl:text-xl my-4">
            The smart and visual way to
            <br>find, filter and organize it.
        </p>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded uppercase my-4">
            <a href="{{route('login')}}" class="uppercase">sign in with twitter</a>
        </button>
    </div>
    <div class="w-1/2 -mt-8 hidden md:block">
        <img src="{{ url('images/like.svg') }}" alt="" srcset="">
    </div>
</header>{{-- section 1 --}}
<section class="bg-gray-200 flex flex-col text-center py-16 px-4">
    <div>
        <h1 class="text-xl font-bold text-gray-900 lg:text-3xl">
            What EmpritApp Can Do
        </h1>
    </div>
    <div class="mt-12 sm:flex items-start justify-between">
        <div class="w-full bg-white rounded rounded-lg shadow-lg lg:mx-6">
            <div class="h-24">
                <img src="{{ url('images/personal_data_2.svg') }}" alt="" class="mx-auto object-contain h-32 mt-4">
            </div>
            <h4 class="text-md uppercase text-gray-800 font-bold mt-10">Organize with Ease</h4>
            <p class="text-base text-gray-600 mt-2 mb-4">
                You can organize your favorite twit with tagging system.
            </p>
        </div>
        <div class="w-full bg-white rounded rounded-lg shadow-lg lg:mx-6">
            <div class="h-24">
                <img src="{{ url('images/personal_data_2.svg') }}" alt="" class="mx-auto object-contain h-32 mt-4">
            </div>
            <h4 class="text-md uppercase text-gray-800 font-bold mt-10">Find Fast</h4>
            <p class="text-base text-gray-600 mt-2 mb-4">
                Find exactly what you're looking for
            </p>
        </div>
        <div class="w-full bg-white rounded rounded-lg shadow-lg lg:mx-6">
            <div class="h-24">
                <img src="{{ url('images/personal_data_2.svg') }}" alt="" class="mx-auto object-contain h-32 mt-4">
            </div>
            <h4 class="text-md uppercase text-gray-800 font-bold mt-10">Lorem, ipsum.</h4>
            <p class="text-base text-gray-600 mt-2 mb-4">
                Lorem ipsum dolor sit amet consectetur.
            </p>
        </div>
    </div>
</section>
{{-- CTA --}}
<section class="text-center py-24 px-4 bg-pattern">
    <div class="mx-4">
        {{-- <h1 class="text-2xl"> Easy</h1> --}}
        <h1 class="text-2xl text-gray-800"> Sign up to get started EmpritApp today</h1>
        <button class="bg-yellow-500 py-2 px-4 rounded uppercase my-4 uppercase text-white w-64">Sign Up</button>
    </div>
</section>

{{-- footer --}}
<footer class="bg-gradient">
    <div class="flex justify-between text-gray-100 py-4 px-16">
        <div class="">
            <p class="text-base text-left">
                © 2020 Emprit.io, Inc. All rights reserved
            </p>
        </div>
        <div class="text-right">
            <a href="http://" class="mx-2">Twitter</a>
            <a href="http://" class="mx-2">Github</a>
            <a href="http://" class="mx-2">Contact</a>
        </div>
    </div>
</footer>
@endsection
