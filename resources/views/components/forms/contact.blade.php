<form action="{{ route('contact') }}" method="POST" class="flex flex-col justify-center justify-items-center items-center p-5">
    @csrf
    <div class="flex flex-col w-full max-w-xl p-2">
        <label for="name" class="font-bold">Your name</label>
        <input id="name" type="text" name="name" class="mt-1 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md font-bold" placeholder="Enter your name." required>
        @if ($errors->has('name'))
            <span class="font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">{{ $errors->first('name') }}</span>
        @endif
    </div>
    <div class="flex flex-col w-full max-w-xl p-2">
        <label for="email" class="font-bold">Your email</label>
        <input id="email" type="text" name="email" class="mt-1 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md font-bold" placeholder="Enter your email address." required>
        @if ($errors->has('email'))
            <span class="font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">{{ $errors->first('email') }}</span>
        @endif
    </div>
    <div class="flex flex-col w-full max-w-xl p-2">
        <label for="message" class="font-bold">Your message</label>
        <textarea id="message" name="message" class="mt-1 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md font-bold" placeholder="What are you looking to build?" rows="3" required></textarea>
        @if ($errors->has('email'))
            <span class="font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">{{ $errors->first('message') }}</span>
        @endif
    </div>
    <div class="flex flex-col mx-auto">
        <input type="submit" class="mt-8 mb-10 w-28 font-bold border border-green-400 bg-green-400 text-white rounded-md px-4 py-2 transition duration-500 ease select-none hover:bg-green-600 focus:outline-none focus:shadow-outline" value="Let's Talk">
    </div>
</form>