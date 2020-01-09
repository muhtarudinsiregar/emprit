@extends('layouts.app')
@section('content')
<header
    class="relative flex pt-32 pb-48 sm:pt-32 sm:pb-64 lg:pb-48 px-4 w-full md:pb-40 bg-gradient lg:px-16 lg:pt-48 xl:pt-40 xl:pb-64 xl:h-screen md:px-8 xl:px-24 xxl:px-40 sm:w-full">
    <div class="text-center md:text-left md:w-full z-10 xxl:max-w-2xl">
        <h1 class="text-3xl xl:text-5xl text-white font-bold leading-tight">
            Organize Your
            <br> Twitter Like With Ease
        </h1>
        <p class="text-white xl:text-xl my-4">
            Astral is the best way to manage your starred repositories on GitHub using tags, filters, notes and a
            powerful
            search feature.
        </p>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded uppercase my-4">
            <a href="{{route('login')}}" class="uppercase">sign up free</a>
        </button>
    </div>
    <div class="w-1/2 -mt-16">
        <img src="{{ url('images/like.svg') }}" alt="" srcset="">
    </div>
</header>
{{-- CTA --}}
<section class="text-center py-24 px-4 bg-pattern">
    <div class="mx-32">
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
