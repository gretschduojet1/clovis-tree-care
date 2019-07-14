@php $level = $level ?? 0 @endphp

<div class="bg-grey-lighter py-2">
    <div class="container m-auto flex items-center justify-between text-sm">
        <p class="p-0 m-0">We offer landscaping , maintenance and design for residential, commercial and industrial clients.</p>
        <div>
            <a href="{{$page->yelpUrl}}" class="inline-block text-lg mr-4 text-red hover:text-red-darkest" target="_blank"><i class="fab fa-yelp"></i></a>
            <a href="{{$page->facebookUrl}}" class="inline-block text-lg" target="_blank"><i class="fab fa-facebook-f"></i></a>
        </div>
    </div>
</div>
<nav class="flex items-center justify-between flex-wrap bg-white py-4 px-24 border-red border-b-4">
    <div class="flex items-center flex-no-shrink text-white mr-2">
        <a href="/" class="w-32"><img src="/assets/images/clovis-tree-care-logo.png" alt=""></a>
        <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
    </div>
    <div class="block lg:hidden">
        <button class="flex items-center px-3 py-2 border rounded text-teal-lighter border-teal-light hover:text-white hover:border-white">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
        </button>
    </div>
    <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
        <div class="text-sm lg:flex-grow">
            <a href="/" class="mr-4">
                <span class="font-semibold text-xl tracking-tight text-red">{{ $page->siteName }}</span>
            </a>
            @foreach ($page->navigation as $label => $item)
                @include('_nav.menu-item')
            @endforeach
        </div>
        <div flex>
            <a href="{{ $page->phoneUrl }}" class="inline-block px-4 py-1 text-red hover:text-red-darkest lg:mt-0 border-r-2 border-red mr-4 w-1/2" title="Call {{ $page->siteName }} Now">{{ $page->phoneFormatted }}</a>
            <a href="#" class="bg-red inline-block px-4 py-4 leading-none border-2 rounded text-white border-red hover:text-red hover:bg-white mt-4 lg:mt-0 w-1/2" title="Contact {{ $page->siteName }}">Request A Free Quote</a>
        </div>
    </div>
</nav>
