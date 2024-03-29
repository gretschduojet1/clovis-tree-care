@php $level = $level ?? 0 @endphp
<nav class="flex items-center justify-between flex-wrap bg-white py-4 px-24 border-red border-b-4">
    <div class="flex items-center flex-no-shrink text-white">
        <a href="/" class="w-24"><img src="/assets/images/clovis-tree-care-logo.png" alt=""></a>
        <svg class="fill-current h-8 w-8" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
    </div>
    <div @click="toggle" class="block lg:hidden">
        <button class="flex items-center px-3 py-2 border rounded bg-red text-white border-red-darkest hover:text-red hover:bg-white">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
        </button>
    </div>
    <div :class="open ? 'block': 'hidden'" class=" w-full flex-grow lg:flex lg:items-center lg:w-auto">
        <div class="text-sm lg:flex-grow">
            <a href="/" class="mr-2">
                <span class="font-semibold text-xl tracking-tight text-red">{{ $page->siteName }}, Inc.</span>
            </a>
            @foreach ($page->navigation as $label => $item)
                @include('_nav.menu-item')
            @endforeach
        </div>
    </div>
</nav>
