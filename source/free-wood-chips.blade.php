@extends('_layouts.master')

@section('body')
    <section class="container mx-auto p-6 mt-2">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <div class="md:flex">
                <div class="md:w-1/2 p-8">
                    <h3 class="text-red">Free Wood Chips</h3>
                    <p>
                        {{ $page->siteName }} will deliver FREE wood chips to those in the Clovis area, there is a minimal charge if outside of a 10 mile radius.
                        Please note, these are not decorative wod chips that you would find in a local nursery.  These are wood chips in the truest form, an dthey are
                        one of the best things that you can put around your tree and shrubs for their help and to reduce weeds.
                    </p>
                    <p>
                        Please fill out the form on this page and we will contact
                        you regarding the wood chips and we can setup a time when we'll be in the area for free delivery.
                    </p>
                </div>
                <div class="md:w-1/2 p-8">
                    @include('_components.free-wood-chips-form')
                </div>
            </div>
        </div>
    </section>

@endsection