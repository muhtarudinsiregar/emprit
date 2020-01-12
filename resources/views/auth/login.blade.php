@extends('layouts.app')

@section('content')
<div class="w-screen h-screen bg-periscope flex items-center justify-center flex-col">
    <a href="/auth/twitter" class="rounded-full xl:w-1/4 text-center font-bold bg-white text-xl p-4 text-gray-700">
        <i class="fab fa-twitter text-twitter px-1 inline-block align-middle"></i>
        Sign In with
        <span class="text-twitter">Twitter</span>
    </a>
</div>
@endsection
