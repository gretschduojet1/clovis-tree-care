@extends('_layouts.master')

@section('body')
    <section class="container mx-auto p-6 mt-6">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h3 class="text-red">{{ $page->siteName }} Gallery</h3>

            <div class="flex flex-wrap">
                @foreach($page->gallery as $image)
                    <div class="mb-8 mx-3 px-2 md:w-1/4 bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                        <img src="/assets/images{{$image->thumbnail}}" alt="{{$images->description}}">
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection