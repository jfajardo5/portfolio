<nav class="flex items-center justify-between flex-wrap bg-gray-100 p-6 fixed w-full top-0">
    <div class="flex items-center flex-shrink-0 text-white mr-6">
        <a href="{{ route("index") }}" class="text-white no-underline hover:text-green hover:no-underline animate__animated animate__bounceIn animate__slow" href="#">
            <img src="{{ mix('images/applogo.png') }}" class="w-12">
        </a>
    </div>

    <div class="block">
        <button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-green-300 border-green-300 hover:text-white hover:border-white">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
        </button>
    </div>

    <div id="nav-content" class="max-h-0 w-full flex-grow pt-6 lg:pt-0 overflow-hidden" style="transition: max-height 0.5s">
        <ul class="list-reset">
            <li class="mr-3">
                <a id="navcontact" class="flex flex-row text-black-600 no-underline hover:text-green-200 hover:text-underline py-2 px-4 cursor-pointer"><svg class="hidden md:block w-5 mx-1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 48 48" style=" fill:#000000;"><path fill="#e0e0e0" d="M5.5,40.5h37c1.933,0,3.5-1.567,3.5-3.5V11c0-1.933-1.567-3.5-3.5-3.5h-37C3.567,7.5,2,9.067,2,11v26C2,38.933,3.567,40.5,5.5,40.5z"></path><path fill="#d9d9d9" d="M26,40.5h16.5c1.933,0,3.5-1.567,3.5-3.5V11c0-1.933-1.567-3.5-3.5-3.5h-37C3.567,7.5,2,9.067,2,11L26,40.5z"></path><path fill="#eee" d="M6.745,40.5H42.5c1.933,0,3.5-1.567,3.5-3.5V11.5L6.745,40.5z"></path><path fill="#e0e0e0" d="M25.745,40.5H42.5c1.933,0,3.5-1.567,3.5-3.5V11.5L18.771,31.616L25.745,40.5z"></path><path fill="#ca3737" d="M42.5,9.5h-37C3.567,9.5,2,9.067,2,11v26c0,1.933,1.567,3.5,3.5,3.5H7V12h34v28.5h1.5c1.933,0,3.5-1.567,3.5-3.5V11C46,9.067,44.433,9.5,42.5,9.5z"></path><path fill="#f5f5f5" d="M42.5,7.5H24H5.5C3.567,7.5,2,9.036,2,11c0,1.206,1.518,2.258,1.518,2.258L24,27.756l20.482-14.497c0,0,1.518-1.053,1.518-2.258C46,9.036,44.433,7.5,42.5,7.5z"></path><path fill="#e84f4b" d="M43.246,7.582L24,21L4.754,7.582C3.18,7.919,2,9.297,2,11c0,1.206,1.518,2.258,1.518,2.258L24,27.756l20.482-14.497c0,0,1.518-1.053,1.518-2.258C46,9.297,44.82,7.919,43.246,7.582z"></path></svg>Get in touch!</a>
            </li>
            <li class="mr-3">
                <a href="{{ env("GITHUB_URL") }}" target="_blank" class="flex flex-row text-black-600 no-underline hover:text-green-200 hover:text-underline py-2 px-4"><svg class="hidden md:block w-5 mx-1" viewBox="0 0 128 128"><g fill="#181616"><path fill-rule="evenodd" clip-rule="evenodd" d="M64 5.103c-33.347 0-60.388 27.035-60.388 60.388 0 26.682 17.303 49.317 41.297 57.303 3.017.56 4.125-1.31 4.125-2.905 0-1.44-.056-6.197-.082-11.243-16.8 3.653-20.345-7.125-20.345-7.125-2.747-6.98-6.705-8.836-6.705-8.836-5.48-3.748.413-3.67.413-3.67 6.063.425 9.257 6.223 9.257 6.223 5.386 9.23 14.127 6.562 17.573 5.02.542-3.903 2.107-6.568 3.834-8.076-13.413-1.525-27.514-6.704-27.514-29.843 0-6.593 2.36-11.98 6.223-16.21-.628-1.52-2.695-7.662.584-15.98 0 0 5.07-1.623 16.61 6.19C53.7 35 58.867 34.327 64 34.304c5.13.023 10.3.694 15.127 2.033 11.526-7.813 16.59-6.19 16.59-6.19 3.287 8.317 1.22 14.46.593 15.98 3.872 4.23 6.215 9.617 6.215 16.21 0 23.194-14.127 28.3-27.574 29.796 2.167 1.874 4.097 5.55 4.097 11.183 0 8.08-.07 14.583-.07 16.572 0 1.607 1.088 3.49 4.148 2.897 23.98-7.994 41.263-30.622 41.263-57.294C124.388 32.14 97.35 5.104 64 5.104z"></path><path d="M26.484 91.806c-.133.3-.605.39-1.035.185-.44-.196-.685-.605-.543-.906.13-.31.603-.395 1.04-.188.44.197.69.61.537.91zm-.743-.55M28.93 94.535c-.287.267-.85.143-1.232-.28-.396-.42-.47-.983-.177-1.254.298-.266.844-.14 1.24.28.394.426.472.984.17 1.255zm-.575-.618M31.312 98.012c-.37.258-.976.017-1.35-.52-.37-.538-.37-1.183.01-1.44.373-.258.97-.025 1.35.507.368.545.368 1.19-.01 1.452zm0 0M34.573 101.373c-.33.365-1.036.267-1.552-.23-.527-.487-.674-1.18-.343-1.544.336-.366 1.045-.264 1.564.23.527.486.686 1.18.333 1.543zm0 0M39.073 103.324c-.147.473-.825.688-1.51.486-.683-.207-1.13-.76-.99-1.238.14-.477.823-.7 1.512-.485.683.206 1.13.756.988 1.237zm0 0M44.016 103.685c.017.498-.563.91-1.28.92-.723.017-1.308-.387-1.315-.877 0-.503.568-.91 1.29-.924.717-.013 1.306.387 1.306.88zm0 0M48.614 102.903c.086.485-.413.984-1.126 1.117-.7.13-1.35-.172-1.44-.653-.086-.498.422-.997 1.122-1.126.714-.123 1.354.17 1.444.663zm0 0"></path></g></svg>Check out my Github!</a>
            </li>
        </ul>
    </div>
</nav>
<script>
    //Javascript to toggle the menu
    document.getElementById('nav-toggle').onclick = function(){
        document.getElementById("nav-content").classList.toggle("max-h-96");
    }

    document.getElementById("navcontact").addEventListener('click', () => {
        if(location != "{{ route('index') }}/") {
            window.location.replace("{{ route('index') }}" + "#contact");
            return;
        }
        scrollTo(document.getElementById("contact"));
    });

    //This function scrolls to the element passed in argument.
    function scrollTo(element) {
        window.scroll({
            behavior: 'smooth',
            left: 0,
            top: element.offsetTop
        });
    }
</script>
