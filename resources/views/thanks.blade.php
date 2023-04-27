<x-guest-layout>
    @include('layouts.guest-nav')
    <div class="flex flex-col justify-center items-center">
        <p class="lg:text-5xl text-3xl p-3 mt-44 text-center font-semibold animate__animated animate__fadeIn animate__delay-1s">Your message has been sent:</p>
        <a id="delifox" class="animate__animated animate__bounceInLeft animate__slow" href="{{ route('index') }}"><img class="max-w-sm" src="{{ mix('images/delifox.png') }}"></a>
        <p class="lg:text-4xl text-3xl text-center animate__animated animate__fadeIn animate__delay-1s">I'll be in touch soon!</p>
    </div>
    <script>
        document.getElementById("delifox").onanimationend = (event) => {
            event.target.className = "animate__animated animate__shakeX animate__infinite animate__slower";
        };
    </script>
</x-guest-layout>