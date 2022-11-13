@extends('layouts.master')


@section('content')
{{--     <h3 class="font-bold text-xl p-8">About Us</h3>--}}
    <div class="flex items-center mb-4 h-screen">
        <img src="{{ URL('/images/Our-Story.JPG') }}" class="story-image" alt="our story">

        <h2 class="font-bold text-xl p-8">Our Story</h2>
        <p class="place-items-center mt-1 p-8 w-2/4 right-1.5">Established in 2015, Square Gain are a bespoke consultancy with a mission to accelerate the journey to a low carbon and sustainable economy.
            We work with public and private sectors clients on all areas of ESG, supporting the transition to Net Zero in ways that are commercially and reputationally attractive.
        </p>

    </div>

@endsection

