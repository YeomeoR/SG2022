@extends('layouts.master')

@section('title')
{{--    <h1 class="grid h-screen place-items-center mt-1">This is the new home page title for square gain</h1>--}}
@endsection
@section('about')
    <p class="grid place-items-center mt-28">Established in 2015, Square Gain are a bespoke consultancy with a mission to accelerate the journey to a low carbon and sustainable economy.
        We work with public and private sectors clients on all areas of ESG, supporting the transition to Net Zero in ways that are commercially and reputationally attractive.
    </p>
@endsection
@section('ourStory')
    <p class="grid place-items-center mt-28">We opened for business in 2015, with the aim of helping clients to improve their ESG/ Sustainability/ Carbon [NEED TO DECIDE ON OUR TERMINOLOGY] performance and to make real progress in response to the climate emergency [AGAIN - TERMINOLOGY].
         
        We wanted to be fair and Square, and for clients to Gain an advantage through this. Hence, Square Gain.

        Our approach is to provide focused delivery from our Associates, who all have at least 20 years sustainability leadership experience, and can .

        Initially we partnered with several leading universities and business schools providing training and capacity building to the market.  Since then we have worked with over 50 clients, from small companies to multi-nationals, and from all the London Councils to the NHS.  

        Our aim remains the same - to provide an exceptional customer experience and make real progress in response to the climate emergency.

        Square Gain was established in 2015, with the aim of helping clients to improve their Environmental, Social and Governance (ESG) performance and to make real progress in response to the climate emergency 

        We believe in equality and inclusion and to be 'fair and square'.  We also wanted clients to gain an advantage through an inclusive ESG approach.  Hence the name Square Gain.

        We believe that experience is the key to success.  All our staff and Associates have around 20 years sustainability leadership experience.  We provide clients with the practical knowledge and expertise that this brings.

        We have worked with over 50 clients, from small companies to multi-nationals, and from universities and councils to the NHS.

        We focus on supporting our clients develop in-house skills by embedding ourselves with client teams, and by providing training and e-learning to build capacity and make real progress on carbon reduction, circular economy and wider sustainability.
      </p>
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
