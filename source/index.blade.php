@extends('_layouts.master')

@section('body')

    <div class="bg-cover"
         style="background-image: url('https://media.istockphoto.com/photos/landscaped-back-yard-picture-id171221195'); background-repeat: no-repeat">
        <div style="background: rgba(0, 0, 0, 0.7);">
            <section class="container max-w-2xl mx-auto px-6 py-10 md:py-12">
                <div class="flex flex-col-reverse mb-10 lg:flex-row lg:mb-24">
                    <div class="mt-8">
                        <h1 id="intro-clovis-tree-care" class="text-red lg:text-5xl">{{ $page->siteName }}</h1>

                        <h2 id="sub-intro-clovis-tree-care"
                            class="font-light mt-4 text-grey-light">{{ $page->siteDescription }}</h2>

                        <div class="flex my-10">
                            <a href="/contact-us" title="Contact {{ $page->siteName }}"
                               class="bg-red hover:bg-white text-white hover:text-red border-2 border-red rounded mr-4 py-2 px-6">Request
                                A Free Quote</a>

                    </div>

                </div>
            </section>
        </div>
    </div>
    <section class="container mx-auto p-6 mt-6">
        <div class="md:flex -mx-2 -mx-4">
            <div class="mb-8 mx-3 px-2 md:w-1/2 border-8 border-red-light px-10 py-8">
                <h3 class="border-b-2 border-dash"><span class="text-grey-darker">First-rate</span> <br><span class="text-red">Services We Offer</span></h3>
                <p>Providing our customers with a quality and worry free tree care experience.  From big pines in shaver lake to japanese maples in the valley.  Certified arborist Jared Schutz and crew are always here to help.</p>
            </div>
            <div class="mb-8 mx-3 px-2 md:w-1/3">
                <img src="https://demos.qreativethemes.com/thelandscaper/wp-content/uploads/sites/2/2015/07/trimming_hedge-360x240.jpg" alt="">
                <h6 id="intro-laravel" class="text-red mb-0 mt-2">Tree Care</h6>

                <p class="mt-2">Tree care.  shaping, reduction, thinning and restoration.  Tree Removal and stump grinding.</p>
            </div>

            <div class="mb-8 mx-3 px-2 md:w-1/3">
                <img src="https://demos.qreativethemes.com/thelandscaper/wp-content/uploads/sites/2/2015/07/tree_removal-360x240.jpg" class="border-bottom-2 border-red" alt="">
                <h6 id="intro-laravel" class="text-red mb-0 mt-2">Tree Selection &amp; Planting</h6>

                <p class="mt-2">We can help you find the right tree that will thrive and plant it in the proper place.</p>
            </div>

            <div class="mb-8 mx-3 px-2 md:w-1/3">
                <img src="https://demos.qreativethemes.com/thelandscaper/wp-content/uploads/sites/2/2015/07/irrigation-360x240.jpg" alt="">
                <h6 id="intro-laravel" class="text-red mb-0 mt-2">Speciality Service</h6>

                <p class="mt-2">Root pruning, Root barrier installation, soil testing and fertilization programs and Fruit tree care.</p>
            </div>
        </div>

    </section>
    <section>
        <div class="bg-red-darkest py-10">
                <div class="md:flex -mx-2 -mx-4">
                    <div class="w-3/4 content-center mx-auto" style="text-align:center">
                        <i class="fab fa-pagelines fa-3x text-red content-center"></i>
                        <h3 class="text-red text-4xl">Trees are the Answer</h3>
                        <p class="text-white">Trees provide Food, clean the air and provide oxygen, add beauty, shade and value to your property.  Caring for them properly will help them live long healthy lives. </p>
                    </div>
                </div>
    </section>
    <section>
        <div class="bg-white">
            <div class="container mx-auto p-8">
                <div class="md:flex">
                    <div class="md:w-1/2 pr-12">
                        <h2><span class="text-grey-darker">About</span> <span class="text-red">Our Company</span></h2>
                        <p>
                            The Landscaper is a full-service landscaping company with a straightforward and unique design/build philosophy. We believe in having one landscape designer handle the job from its conception on paper, to the realization on your property. The reason; by doing this you are able to communicate and work with a single individual, where you can share your thoughts and idea's with to bring them, in collaboration, to life.
                        </p>
                        <p>
                            The Landscaper is made up of a group of highly skilled landscaping professionals who pays a lot of attention to small details. In the 30+ years of experience our staff keep your property looking and functioning beautifully. Our landscapers are fully licensed
                        </p>
                        <p>
                            The reason; by doing this you are able to communicate and work with a single individual, where you can share your thoughts and idea's with to bring them, in collaboration...
                        </p>
                    </div>
                    <div class="md:w-1/2">
                        @include('_components.contact-form')
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
