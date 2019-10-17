@extends('_layouts.master')

@section('body')
<section class="container mx-auto p-6 mt-2">
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <h3 class="text-red">Community Outreach</h3>
        <p>
            The art of giving back and gifting is known as philanthropy. Generosity has been around since the dawn of humanity
            and has become a part of our everyday life and society. Philanthropy actively supports efforts such as scientific
            research down to volunteering your time to help out those in need in your community. Philanthropic efforts also
            work to eliminate social problems and increase wellness in people, society, as well as the planet.
            We all can impact our community and world for the better. The beauty of philanthropy is that it does not have to
            be extravagant. It is as simple as helping out your neighbor with tasks like helping them carry their groceries
            to their front door.  At {{ $page->siteName }} we believe in giving back.  We volunteer at local events, help
            eagle scouts with their projects, donate time at local churches and food banks.
        </p>
        <p>
            We also donate our time to help those with tree work that may not be able to afford it.  We help local non profit
            organizations with tree work and would like to expand that to help those that have a serious tree related problem
            but that might not be able to afford the cost.  <a href="/contact-us" title="Contact {{ $page->siteName }}" class="text-red">Please email us</a>
            with any questions that you may have.
        </p>
    </div>
</section>
@endsection