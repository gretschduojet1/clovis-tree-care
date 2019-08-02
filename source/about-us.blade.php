@extends('_layouts.master')

@section('body')
    <section class="container mx-auto p-6 mt-2">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h3 class="text-red">About {{ $page->siteName }}</h3>
            <p>
                {{ $page->siteName }} provides the valley with a reliable professional tree care service. We work with residential customers
                with one tree to large commercial properties. For our residential customers we know that proper tree care is important.
                Trees aren't always planted in the right location and can potentially do alot of damage. Before removal is an option we
                can help save your tree. Structural pruning methods and root pruning are just 2 ways to make your tree safe and worry
                free. For our commercial cusotmers we have the tools to keep your trees looking good and safe. Proper pruning methods
                are important to help maintain the appearance and viability of your investment. We can customize a plan and budget that
                works for you.
            </p>
            <p>
                We are a family owned and operated business. Our family moved to the valley in the 1940's and have been here since. We love
                the central valley and we love trees.  We are licensed by the contractors state license board, #1051356, bonded and
                insured with both general liability and workers comp insurance and hold an arborist license with the international society of
                arboricultur, #WE-12303A.
            </p>
        </div>
    </section>
@endsection