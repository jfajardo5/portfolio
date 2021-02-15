<nav class="flex items-center justify-between flex-wrap bg-gray-100 p-6 fixed w-full top-0">
    <div class="flex items-center flex-shrink-0 text-white mr-6">
        <a class="text-white no-underline hover:text-green hover:no-underline animate__animated animate__bounce" href="#">
            <img src="{{ mix('images/applogo.png') }}" class="w-12">
        </a>
    </div>

    <div class="block">
        <button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-green-300 border-green-300 hover:text-white hover:border-white">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
        </button>
    </div>

    <div id="nav-content" class="max-h-0 w-full flex-grow pt-6 lg:pt-0 overflow-hidden" style="transition: max-height 0.5s">
        <ul  class="list-reset">
            <li class="mr-3">
                <a id="navcontact" class="inline-block text-black-600 no-underline hover:text-green-200 hover:text-underline py-2 px-4 cursor-pointer">Get in touch</a>
            </li>
            <li class="mr-3">
                <a href="https://twitter.com/jumfdoh" target="_blank" class="inline-block text-black-600 no-underline hover:text-green-200 hover:text-underline py-2 px-4" href="#">Follow me on Twitter</a>
            </li>
            <li class="mr-3">
                <a href="https://github.com/jfajardo5" target="_blank" class="inline-block text-black-600 no-underline hover:text-green-200 hover:text-underline py-2 px-4" href="#">Check me out on Github</a>
            </li>
        </ul>
    </div>
</nav>
<script>
    //Javascript to toggle the menu
    document.getElementById('nav-toggle').onclick = function(){
        document.getElementById("nav-content").classList.toggle("max-h-32");
    }
    document.getElementById("navcontact").addEventListener('click', () => {
        scrollTo(document.getElementById("contact"));
    });

    function scrollTo(element) {
        window.scroll({
            behavior: 'smooth',
            left: 0,
            top: element.offsetTop
        });
    }
</script>
