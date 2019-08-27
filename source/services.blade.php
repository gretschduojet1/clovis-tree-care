@extends('_layouts.master')

@section('body')
    <section class="container mx-auto p-6 mt-2">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h2 class="text-red">{{ $page->siteName }} Services</h2>
            <p>
                As the premiere tree care company serving the Fresno and Clovis area we offer many services to handle all of
                your tree care needs.  Below is just a sample of some of the service {{ $page->siteName }} offers.
            </p>

            <h3 class="text-red">Tree Pruning</h3>
            <p>
                {{ $page->siteName }} provides elite tree trimming and pruning services throughout Fresno, Clovis, and
                the central valley. Tree Service or tree pruning, is the most common tree maintenance
                procedure. It takes a highly trained and skilled tree professional to understand which limbs to remove, and the
                quantity of limbs to safely remove without putting the trees health at risk.  At {{ $page->siteName }} the health of
                your trees is our staffs number one priority and we do all that we can eo insure that your tree stays healthy and beautiful.
            </p>
            <h3 class="text-red">Tree Removal</h3>
            <p>
                We are tree removal professionals, {{ $page->siteName }} is qualified to handle any size of tree removal.
                Our knowledgeable staff is here to help to make sure that your tree is removed safely and without damage to your property.
                Not only od we have the knowledge, but we have the equipment necessary to tackle any type of tree removal.
            </p>
            <h3 class="text-red">Stump Removal</h3>
            <p>
                Whether you are having a tree removed from your property or you just have an old stump on your property in need of grinding,
                {{ $page->siteName }} is here to help.  We have the cutting edge in stump grinders and can handle stumps of any size.
            </p>
            <h3 class="text-red">Tree Selection & Planting</h3>
            <p>
                We are not only in the business of removing trees, but we truly believe that trees are the answer and a world with more trees is a better place.
                {{ $page->siteName }} is here to help you find the right tree that will thrive and plant it in the proper place.
            </p>
            <h3 class="text-red">Speciality Service</h3>
            <p>
                {{ $page->siteName }} also offers many specialty services, here is a short list of some of what we offer:
            </p>
            <ul>
                <li>Root pruning</li>
                <li>Root barrier installation</li>
                <li>Soil testing</li>
                <li>Fertilization programs</li>
                <li>and Fruit tree care.</li>
            </ul>
        </div>
    </section>
@endsection