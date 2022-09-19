@extends('layouts.master')
@include('includes.feedback')

@section('title')
    {{-- <h1 class="w-screen ">This is the new contact page title for square gain</h1> --}}
@endsection

{{-- contact form --}}
@section('contactForm')
    {{-- <h1 class="grid h-screen place-items-center">CONTACT FORM IN HERE</h1> --}}
    {{-- contact form --}}

    <div class="container my-10 p-10 ">

        <form class="w-full max-w-lgmt-12" method="post" action="{{ route('createContact') }}">
            @csrf
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        First Name
                    </label>
                    <input name="fname" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Jane">
                    <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                    Last Name
                    </label>
                    <input name="lname" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Doe">
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                    E-mail
                    </label>
                    <input name="email" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="email" type="email">
                    <p class="text-gray-600 text-xs italic">Some tips - as long as needed</p>
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                    Message
                    </label>
                    <textarea name="message" class=" no-resize appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none" id="message"></textarea>
                    <p class="text-gray-600 text-xs italic">Re-size can be disabled by set by resize-none / resize-y / resize-x / resize</p>
                </div>
            </div>
            <div class="md:flex md:items-center">
                <div class="md:w-1/3">
                    <button class="shadow bg-teal-400 hover:bg-teal-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                    Send
                    </button>
                </div>
                <div class="md:w-2/3"></div>
            </div>
        </form>
    </div>

@endsection



@section('signup')
{{-- <div class="relative  bottom-12 container w-screen mt-5">
    <input type="email" placeholder="Enter your email address to sign up to our latest news releases" class="p-2 w-3/5 ml-56">
    <input type="button" value="Sign Up" class="rounded bg-pink-500 py-2 px-10 text-white hover:bg-pink-400 cursor-pointer ml-2">
    </div> --}}
    <div class=" w-full  flex  flex-row  flex-wrap  bg-gray-600  p-10  py-20  justify-center" style="background-repeat: no-repeat; background-size: cover; background-blend-mode: multiply;background-position: center center;background-image: url('https://images.unsplash.com/photo-1573079487717-f8ebae0b1539?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80');">
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