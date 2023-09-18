@extends('_layouts.master')

@section('body')

    <div class="block md:hidden bg-cover bg-grey-darkest">
            <section class="container max-w-2xl mx-auto px-6 py-2 md:py-12">
                <div class="flex flex-col-reverse mb-10 lg:flex-row md:mb-16">
                    <div class="mt-16">
                        <h1 id="intro-clovis-tree-care"
                            class="text-red sm:text-sm lg:text-5xl">{{ $page->siteName }}</h1>

                        <h2 id="sub-intro-clovis-tree-care"
                            class="font-light mt-4 text-grey-light sm:text-sm lg:text-4xl">{{ $page->siteDescription }}</h2>

                    </div>
                </div>
            </section>
    </div>
    <div class="hidden md:block bg-cover bg-grey"
         style="background-image: url('/assets/images/homepage-tree-hug-sm.jpg'); background-repeat: no-repeat; background-position-y: -310px;">
        <div style="background: rgba(0, 0, 0, 0.7);">
            <section class="container max-w-2xl mx-auto px-6 py-10 md:py-12">
                <div class="flex flex-col-reverse mb-10 lg:flex-row md:mb-16">
                    <div class="mt-16">
                        <h1 id="intro-clovis-tree-care"
                            class="text-red sm:text-sm lg:text-5xl">{{ $page->siteName }}</h1>

                        <h2 id="sub-intro-clovis-tree-care"
                            class="font-light mt-4 text-grey-light sm:text-sm lg:text-4xl">{{ $page->siteDescription }}</h2>

                    </div>
                </div>
            </section>
        </div>
    </div>
    <section class="container mx-auto md:pb-12 lg:pb-12">
        <div class="flex">
            <div class="sm:w-full md:w-3/4 lg:w-3/4 text-center mx-auto sm:pt-12 md:pt-12 lg:pt-12 px-4 py-6">
                <h2 class="text-red sm:text-sm md:text-2xl lg:text-3xl">First-Rate Service</h2>
                <p class="text-lg">Providing our customers with a quality and worry free tree care experience. From big
                    pines in shaver lake to japanese maples in the valley. Certified arborist Jared Schutz and crew are
                    always here to help.</p>
            </div>

        </div>
        <div class="flex flex-wrap">
            <div class="mb-8 mx-3 px-2 sm:w-full md:w-full lg:w-1/4 bg-white shadow-md rounded px-6 pt-6 pb-8 mb-4 md:ml-auto lg:ml-auto">
                <img src="/assets/images/homepage-aborist-trimming-tree.jpg"
                     alt="">
                <h6 id="intro-laravel" class="text-red mb-0 mt-2 sm:font-bold">Tree Care</h6>

                <p class="mt-2">Tree care. shaping, reduction, thinning and restoration. Tree Removal and stump
                    grinding.</p>
            </div>

            <div class="mb-8 mx-3 px-2 sm:w-full md:w-full lg:w-1/4 bg-white shadow-md rounded px-6 pt-6 pb-8 mb-4">
                <img src="/assets/images/homepage-seed.jpg"
                     class="border-bottom-2 border-red" alt="">
                <h6 id="intro-laravel" class="text-red mb-0 mt-2 sm:font-bold">Tree Selection &amp; Planting</h6>

                <p class="mt-2">We can help you find the right tree that will thrive and plant it in the proper
                    place.</p>
            </div>

            <div class="mb-8 mx-3 px-2 sm:w-full md:w-full lg:w-1/4 bg-white shadow-md rounded px-6 pt-6 pb-8 mb-4 md:mr-auto lg:mr-auto">
                <img src="/assets/images/homepage-cracked-sidewalk.jpg"
                     alt="">
                <h6 id="intro-laravel" class="text-red mb-0 mt-2 sm:font-bold">Speciality Service</h6>

                <p class="mt-2">Root pruning, Root barrier installation, soil testing and fertilization programs and
                    Fruit tree care.</p>
            </div>
        </div>

    </section>
    <section>
        <div class="bg-red-darkest py-12 px-4">
            <div class="flex">
                <div class="sm:w-full md:w-1/2 lg:w-1/2 md:content-center lg:content-center mx-auto"
                     style="text-align:center">
                    <i class="fab fa-pagelines fa-3x text-red content-center"></i>
                    <h3 class="text-red text-4xl">Trees are the Answer</h3>
                    <p class="text-white text-2xl">Trees provide Food, clean the air and provide oxygen, add beauty, shade and
                        value to your property. Caring for them properly will help them live long healthy lives. </p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="bg-white">
            <div class="container mx-auto p-10">
                <div class="md:flex">
                    <div class="sm:w-full md:w-full lg::w-full md:pr-12 lg:pr-12">
                        <h2><span class="text-grey-darker">About</span> <span class="text-red">Our Company</span></h2>
                        <p>
                            Clovis Tree Care provides the valley with a reliable professional tree care service. We work with
                            residential customers with one tree to large commercial properties. For our residential customers
                            we know that proper tree care is important. Trees aren't always planted in the right location and
                            can potentially do a lot of damage. Before removal is an option we can help save your tree. Structural
                            pruning methods and root pruning are just 2 ways to make your tree safe and worry free. For our
                            commercial customers we have the tools to keep your trees looking good and safe. Proper pruning
                            methods are important to help maintain the appearance and viability of your investment. We can
                            customize a plan and budget that works for you.
                        </p>
                        <p>
                            We are a family owned and operated business. Our family moved to the valley in the 1940's and have been here since.
                            We love the central valley and we love trees. We are licensed by the contractors state license board, #1051356,
                            bonded and insured with both general liability and workers comp insurance and hold an arborist license with the
                            International Society of Arboricultur, #WE-12303A.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
