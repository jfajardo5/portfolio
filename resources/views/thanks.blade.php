<x-guest-layout>
    <div class="flex flex-col justify-center items-center">
        <p class="text-4xl p-3 mt-16 font-bold">Your message has been sent</p>
        <a href="{{ route('index') }}"><img src="{{ mix('images/monkey.png') }}"></a>
        <p class="text-5xl p-3">I'll be in touch soon!</p>
    </div>
</x-guest-layout>