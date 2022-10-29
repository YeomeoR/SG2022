@extends('layouts.master')

@section('learningWorkshops')
    <h1 class="grid place-items-center mt-28">
        We recognise the benefits of engaging with staff, suppliers, customers, to educate and motivate them to support your ambition on carbon and sustainability.
        We provide you with a range of engaging e-learning, training and tools to bring people on-board and buy-in to the role they can play on net zero and how to do it.
    </h1>
@endsection

@section('reporting')
    <h1 class="grid place-items-center mt-28">
        We help you enhance transparency, using reporting as a positive way to communicate your commitment to net zero.
        Our experts and reporting tools can help you quantify and report your carbon emissions footprint across your value chain – from your direct operations (Scope 1 & 2) to your upstream and downstream supply chain (Scope 3).
        We can help with mandatory regulations such as SECR, to voluntary frameworks such as CDP, TCFD, GRESB and GRI.
    </h1>
@endsection

@section('otherServices')
    <h1 class="grid place-items-center mt-28">
        We can also support you with several other services and would be delighted to hear from you. Please contact us for more information.
        •	Provision of Expert Witness services on carbon and climate as part of Public Inquiry on major housing developments
        •	Training and e-learning
        •	Local Planning Policy development
        •	Expert Witness on carbon and climate change
    </h1>
@endsection

@section('signup')
    <div class=" w-full  flex  flex-row  flex-wrap  bg-gray-600  p-10  py-20  justify-center  mt-28" style="background-repeat: no-repeat; background-size: cover; background-blend-mode: multiply;background-position: center center;background-image: url('https://images.unsplash.com/photo-1573079487717-f8ebae0b1539?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80');">
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
