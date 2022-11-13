@extends('layouts.master')

@section('content')
    <div class="learning p-8 w-screen align-left">
        <img src="{{ URL('/images/learn.jpg') }}" class="hero" alt="learning1">
{{--        <h2 class="m-4 font-bold">Capacity building through e-learning and workshops</h2>--}}
    </div>
    <div class="flex items-center mt-4 mb-4">
        <img src="{{ URL('/images/learning3.jpg') }}" class="story-image" alt="learning1">
        <p class="place-items-center pr-8 pt-0 pb-8 pl-8 w-2/4 right-1.5">
            We recognise the benefits of developing in-house carbon and sustainability expertise, and provide our clients with a range of e-learning and training to support this. 

            Square Gain provides a range of interactive and engaging e-Learning and training specifically for the following groups:
            Board Members 
            Leadership Teams
            All Employees
            Supply-Chain companies
            Other Stakeholders
        </p>
    </div>

    <div class="flex items-center mt-4 mb-4">
        <p class="place-items-center m-8 p-8 w-2/4 right-1.5 items-end">
            We help you enhance transparency, using reporting as a positive way to communicate your commitment to net zero.
            Our experts and reporting tools can help you quantify and report your carbon emissions footprint across your value chain – from your direct operations (Scope 1 & 2) to your upstream and downstream supply chain (Scope 3).
            We can help with mandatory regulations such as SECR, to voluntary frameworks such as CDP, TCFD, GRESB and GRI.
        </p>
        <img src="{{ URL('/images/learning2.jpg') }}" class="story-image" alt="learning2">
    </div>

    <div class="flex items-center mt-4 mb-4">
        <img src="{{ URL('/images/learning4.jpg') }}" class="story-image" alt="learning3">
        <p class="place-items-center p-8 w-2/4 right-1.5">
            We can also support you with several other services and would be delighted to hear from you. Please contact us for more information.
            •	Provision of Expert Witness services on carbon and climate as part of Public Inquiry on major housing developments
            •	Training and e-learning
            •	Local Planning Policy development
            •	Expert Witness on carbon and climate change
        </p>
    </div>

@endsection
