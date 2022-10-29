@extends('layouts.master')


@section('services')
    <h1 class="grid place-items-center mt-28">We provide a range of consultancy support, ranging from policy and strategy development to operational implementation, training, e-learning and stakeholder engagement.
        Please see below for further details.
        Carbon Accounting and Baselining	Strategy	Implementation
        Engagement and training	ESG Due Diligence and Reporting	Other services
    </h1>
@endsection
@section('carbonAccounting')
    <h1 class="gridplace-items-center mt-28">What gets measured gets managed and we place data at the heart of everything we do
        Our experienced team and tools help you establish your carbon emissions from their direct activities (Scope 1 & 2 emissions), and their indirect activities (Scope 3 emissions).
        We help take the burden away from reporting, by streamline data collection, data cleansing to ensure accuracy and providing clear, transparent reporting.
        From a robust and transparent baseline, we can then support you by identifying opportunities, quick-wins and a robust improvement programme to transition to net zero.
    </h1>
@endsection
@section('strategy')
    <h1 class="grid place-items-center mt-28">What gets measured gets managed and we place data at the heart of everything we do
        Our experienced team and tools help you establish your carbon emissions from their direct activities (Scope 1 & 2 emissions), and their indirect activities (Scope 3 emissions).
        We help take the burden away from reporting, by streamline data collection, data cleansing to ensure accuracy and providing clear, transparent reporting.
        From a robust and transparent baseline, we can then support you by identifying opportunities, quick-wins and a robust improvement programme to transition to net zero.
    </h1>
@endsection
@section('implementation')
    <h1 class="grid place-items-center mt-28">We can help develop and implement a programme to achieve your strategic ambitions.
        Leading and supporting implementation of Carbon/ Sustainability Action Plans across Council portfolios
        •	Coordinating the implementation of Local Climate Partnership actions with local businesses and residents
        •	Procurement engagement and implementation

    </h1>
@endsection


@section('signup')
    <div class=" w-full  flex  flex-row  flex-wrap  bg-gray-600  p-10  py-20  justify-center mt-28" style="background-repeat: no-repeat; background-size: cover; background-blend-mode: multiply;background-position: center center;background-image: url('https://images.unsplash.com/photo-1573079487717-f8ebae0b1539?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80');">
        <div class=" w-full  text-center">
            <div class=" text-3xl  text-center text-white  antialiased">Get Updates</div>
            <div class="text-xl   text-center  text-white antialiased">Find out about events and other news</div>
        </div>

        <form class=" mt-3  flex   flex-row   flex-wrap" action="" method="POST">
	        <div class="text-gray-600  w-2/3">
	            <input type="text" name="email" class="  w-full  p-2   rounded-l-lg" placeholder="john@mail.com"/>
	        </div>
	     	<div class=" w-1/3">
	     	    <button class=" w-full text-white  p-2  bg-indigo-400  rounded-r-lg text-center hover: bg-indigo-300" type="submit">Subscribe</button>
	     	</div>
	    </form>
    </div>
@endsection
