@extends('_layouts.master')

@section('body')

    <div class="bg-cover"
         style="background-image: url('https://media.istockphoto.com/photos/landscaped-back-yard-picture-id171221195'); background-repeat: no-repeat">
        <div style="background: rgba(0, 0, 0, 0.7);">
            <section class="container max-w-2xl mx-auto px-6 py-10 md:py-12">
                <div class="flex flex-col-reverse mb-10 lg:flex-row md:mb-16">
                    <div class="mt-16">
                        <h1 id="intro-clovis-tree-care"
                            class="text-red sm:text-sm lg:text-5xl">{{ $page->siteName }}</h1>

                        <h2 id="sub-intro-clovis-tree-care"
                            class="font-light mt-4 text-grey-light sm:text-sm lg:text-4xl">{{ $page->siteDescription }}</h2>

                        <div class="flex my-10">
                            <a href="/contact-us" title="Contact {{ $page->siteName }}"
                               class="bg-red hover:bg-white text-white hover:text-red border-2 border-red rounded mr-4 py-2 px-6">Request
                                A Free Quote</a>

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
                <img src="https://demos.qreativethemes.com/thelandscaper/wp-content/uploads/sites/2/2015/07/trimming_hedge-360x240.jpg"
                     alt="">
                <h6 id="intro-laravel" class="text-red mb-0 mt-2 sm:font-bold sm:text-3xl">Tree Care</h6>

                <p class="mt-2">Tree care. shaping, reduction, thinning and restoration. Tree Removal and stump
                    grinding.</p>
            </div>

            <div class="mb-8 mx-3 px-2 sm:w-full md:w-full lg:w-1/4 bg-white shadow-md rounded px-6 pt-6 pb-8 mb-4">
                <img src="https://demos.qreativethemes.com/thelandscaper/wp-content/uploads/sites/2/2015/07/tree_removal-360x240.jpg"
                     class="border-bottom-2 border-red" alt="">
                <h6 id="intro-laravel" class="text-red mb-0 mt-2 sm:font-bold">Tree Selection &amp; Planting</h6>

                <p class="mt-2">We can help you find the right tree that will thrive and plant it in the proper
                    place.</p>
            </div>

            <div class="mb-8 mx-3 px-2 sm:w-full md:w-full lg:w-1/4 bg-white shadow-md rounded px-6 pt-6 pb-8 mb-4 md:mr-auto lg:mr-auto">
                <img src="https://demos.qreativethemes.com/thelandscaper/wp-content/uploads/sites/2/2015/07/irrigation-360x240.jpg"
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
                    <p class="text-white">Trees provide Food, clean the air and provide oxygen, add beauty, shade and
                        value to your property. Caring for them properly will help them live long healthy lives. </p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="bg-white">
            <div class="container mx-auto p-10">
                <div class="md:flex">
                    <div class="sm:w-full md:w-1/2 lg::w-1/2 md:pr-12 lg:pr-12">
                        <h2><span class="text-grey-darker">About</span> <span class="text-red">Our Company</span></h2>
                        <p>
                            The Landscaper is a full-service landscaping company with a straightforward and unique
                            design/build philosophy. We believe in having one landscape designer handle the job from its
                            conception on paper, to the realization on your property. The reason; by doing this you are
                            able to communicate and work with a single individual, where you can share your thoughts and
                            idea's with to bring them, in collaboration, to life.
                        </p>
                        <p>
                            The Landscaper is made up of a group of highly skilled landscaping professionals who pays a
                            lot of attention to small details. In the 30+ years of experience our staff keep your
                            property looking and functioning beautifully. Our landscapers are fully licensed
                        </p>
                        <p>
                            The reason; by doing this you are able to communicate and work with a single individual,
                            where you can share your thoughts and idea's with to bring them, in collaboration...
                        </p>
                    </div>
                    <div class="md:w-1/2">
                        @include('_components.contact-form')
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection