@extends('_layouts.master')

@section('body')
    <section class="container mx-auto p-6 mt-6">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h3 class="text-red">{{ $page->siteName }} Gallery</h3>

            <div class="flex flex-wrap">
                <vue-gallery></vue-gallery>
            </div>
        </div>
    </section>
@endsection