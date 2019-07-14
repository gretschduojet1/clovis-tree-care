@extends('_layouts.master')

@section('body')
    <section class="container mx-auto mt-6 bg-white mb-10">
        <div class="flex">
            <div class="w-1/3 bg-red-darkest p-8 border-r-2 border-red">
                <div class="border-b-2 border-grey-dark mb-7">
                    <i class="far fa-clock fa-2x inline text-red mr-3"></i> <h3 class="text-grey-light inline">Hours of Operation</h3>
                    <p class="text-grey-light">{{ $page->hours }}</p>
                </div>
                <div>
                    <i class="fa fa-phone fa-2x inline text-red mr-3"></i> <h3 class="text-grey-light inline">Contact Us Now</h3>
                    <p class="text-grey-light">Phone: <a href="{{ $page->phoneUrl }}" class="text-red hover:text-white" target="_blank">{{ $page->phoneFormatted }}</a></p>
                </div>
            </div>
            <div class="w-3/4 p-6">
                @include('_components.contact-form')
            </div>
        </div>
    </section>

@endsection