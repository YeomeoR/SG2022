
{{-- <div class="relative  bottom-12 container w-screen mt-5">
   <input type="email" placeholder="Enter your email address to sign up to our latest news releases" class="p-2 w-3/5 ml-56">
   <input type="button" value="Sign Up" class="rounded bg-pink-500 py-2 px-10 text-white hover:bg-pink-400 cursor-pointer ml-2">
   </div> --}}
<div class=" w-full  flex  flex-row  flex-wrap  bg-gray-600 py-20  justify-center" style="background-repeat: no-repeat; background-size: cover; background-blend-mode: multiply;background-position: center center;background-image: url('/images/getUpdates.jpg');">
    <div class=" w-full  text-center">
        <div class=" text-3xl  text-center text-white  antialiased">Get Updates</div>
        <div class="text-xl   text-center  text-white antialiased">Find out about events and other news</div>
    </div>

    <form class=" mt-3  flex   flex-row   flex-wrap" action="{{ route('subscriber') }}" method="POST">
        @csrf
        <div class="text-gray-600  w-2/3">
            <input type="text" name="email" class="  w-full  p-2   rounded-l-lg" placeholder="john@mail.com"/>
        </div>
        <div class=" w-1/3">
            <button class=" w-full text-white  p-2  bg-indigo-400  rounded-r-lg text-center hover: bg-indigo-300" type="submit">Subscribe</button>
        </div>
    </form>
</div>
