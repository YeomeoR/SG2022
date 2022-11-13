@extends('layouts.master')


@section('content')
{{--    <h3 class="m-4 font-bold">Services</h3>--}}
    <div class="flex items-center h-screen">
        <img src="{{ URL('/images/Services1.jpg') }}" class="story-image w-9/12 mb-4" alt="services1">
        <p class="place-items-center p-8 w-2/4 right-1.5">We provide a range of consultancy support, ranging from document development and implementation, to training, e-learning and stakeholder engagement.  
            Please see below for further details. </p>
    </div>

    <div class="flex items-center mt-4 mb-4">
        <h3 class="m-4 font-bold items-end">Carbon Accounting</h3>
        <p class="place-items-center mt-1 p-8 w-2/4 right-1.5 items-end">Before setting a strategy and routemap, it's important to know where we are starting from.
            We work with organisations to establish their carbon emissions from their direct activities (Scope 1 & 2 emissions), and their indirect activities (Scope 3 emissions).
            From a robust and transparent baseline we can then support you accounting - developing baseline carbon footprint of council activities.
        </p>
        <img src="{{ URL('/images/carbonAccounting.jpg') }}" class="story-image" alt="services2">
    </div>

    <div class="flex items-center mt-4 mb-4">
        <img src="{{ URL('/images/Services4.jpg') }}" class="story-image" alt="services3">
        <h3 class="m-4 font-bold">Strategy and Planning</h3>
        <p class="place-items-center mt-1 p-8 w-2/4 right-1.5">Carbon/ Sustainability Strategy.
            Carbon/ Sustainability Action Planning.
            Sustainable Procurement Strategy and Policy.
            Development of Local Plan - developing the carbon/ energy and sustainable design and construction Policy documents for local authorities as part of their Local Plan Reviews.
            SPGs/SPDs - developing low carbon Supplementary Planning Guidance and other documents.
        </p>
    </div>

    <div class="flex items-center mt-4 mb-4">
        <h3 class="m-4 font-bold items-end">Implementation</h3>
        <p class="place-items-center p-8 w-2/4 right-1.5 items-end">Leading and supporting implementation of Carbon/ Sustainability Action Plans across Council portfolios.
            Coordinating the implementation of Local Climate Partnership actions with local businesses and residents.
            Procurement engagement and implementation
        </p>
        <img src="{{ URL('/images/Services2.jpeg') }}" class="story-image mb-4" alt="services4">
    </div>

@endsection

