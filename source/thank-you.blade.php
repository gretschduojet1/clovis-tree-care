@extends('_layouts.master')

@section('body')
    <section class="container mx-auto p-6 mt-2">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h3 class="text-red">Thank You For contacting Us!</h3>
            <p>One of our friendly staff will be contacting you soon!
                Please give us 24 hours to respond to your request.  If you need immediate assistance please give us a call
                at <a href="{{ $page->phoneUrl }}" class="text-red hover:text-white" target="_blank">{{ $page->phoneFormatted }}</a>
            </p>
        </div>
    </section>
@endsection