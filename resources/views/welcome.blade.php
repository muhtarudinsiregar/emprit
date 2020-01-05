@extends('layouts.app')
@section('content')
<header
    class="relative flex pt-32 pb-48 sm:pt-32 sm:pb-64 lg:pb-48 px-4 w-full md:pb-40 bg-gradient lg:px-16 lg:pt-48 xl:pt-40 xl:pb-64 xl:h-screen md:px-8 xl:px-24 xxl:px-40">
    <div class="text-center md:text-left md:w-1/2 z-10 xxl:max-w-2xl">
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
@endsection
