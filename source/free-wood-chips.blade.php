@extends('_layouts.master')

@section('body')
    <section class="container mx-auto p-6 mt-2">
        <div class="bg-white shadow-md rounded pt-6 pb-8 mb-4">
            <div class="md:flex">
                <div class="md:w-1/2 p-8">
                    <h3 class="text-red">Free Wood Chips</h3>
                    <p>
                        {{ $page->siteName }} will deliver FREE wood chips to those in the Clovis area, there is a minimal charge if outside of a 10 mile radius.
                        Please note, these are not decorative wood chips that you would find in a local nursery.  These are wood chips in the truest form, and they are
                        the best thing you can do for the overall health of your trees and they will reduce weeds.
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