<x-guest-layout>
    <div class="relative z-10 pt-48 pb-48 bg-cover bg-center" style="background-image: url(/images/hero-bg.jpg)">
        <div class="absolute top-0 left-0 h-full w-full bg-black opacity-50"></div>
        <div class="container relative z-20 text-center text-white text-2xl">
            <h2 class="font-bold text-5xl mb-5">Lorem ipsum dolor sit<br /> amet consectetur adipisicing elit.</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam, minus?</p>
        </div>
    </div>

    <!-- Search From Area -->
    <div class="-mt-10">
        <div class="container">
            <div class="rounded-lg bg-white p-4 relative z-20 shadow-lg home-search">
                @include( 'components.property-search-form' )
            </div>

        </div>
    </div>

    <div class="text-center py-32">
        <div class="container">
            <h2 class="text-bold text-4xl mb-6">Lorem ipsum, dolor sit amet <br />consectetur adipisicing <span
                    class="border-b-2 border-gray-800">distinctio ullam?</span></h2>
            <p class="text-bold text-gray-700 mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <a class="border-2 px-4 py-1.5 hover:bg-gray-700 hover:text-white text-xl uppercase border-gray-700 rounded-lg inline-block duration-300"
                href="">Start the review</a>

            <h2 class="text-bold text-4xl mt-20">Lorem ipsum dolor sit amet consectetur<br /> adipisicing elit.</h2>
            <div class="w-4/5 mx-auto">
                <div class="flex -mx-3 flex-wrap justify-between">
                    <div class="w-3/12 mt-10 mx-3">
                        <h3 class="mb-2 text-xl">Lorem ipsum dolor sit amet.</h3>
                        <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="w-3/12 mt-10 mx-3">
                        <h3 class="mb-2 text-xl">Lorem ipsum dolor sit amet.</h3>
                        <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="w-3/12 mt-10 mx-3">
                        <h3 class="mb-2 text-xl">Lorem ipsum dolor sit amet.</h3>
                        <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="w-3/12 mt-10 mx-3">
                        <h3 class="mb-2 text-xl">Lorem ipsum dolor sit amet.</h3>
                        <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="w-3/12 mt-10 mx-3">
                        <h3 class="mb-2 text-xl">Lorem ipsum dolor sit amet.</h3>
                        <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="w-3/12 mt-10 mx-3">
                        <h3 class="mb-2 text-xl">Lorem ipsum dolor sit amet.</h3>
                        <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="text-center">
            <h2 class="section-heading">More Information About Us</h2>
            <div class="relative rounded-xl bg-cover bg-center py-32"
                style="background-image: url('/images/footer.jpg')">
                <div class="opacity-50 absolute top-0 left-0 w-full h-full bg-black rounded-xl"></div>
            </div>
            <a href=""></a>
        </div>
    </div>

    <div class="container pt-20">
        <h2 class="section-heading">Last Added Projects</h2>
        <div class="flex flex-wrap justify-between mt-10">
            @foreach ( $latest_properties as $property )
                @include( 'components.single-property-card', ['property' => $property] )
            @endforeach
        </div>
    </div>

    <div class="container">
        <div class="pt-16">
            <h2 class="section-heading">Articles & Advices</h2>
            <div class="flex -mx-4">
                <div class="flex-1 px-4">
                    <div class="bg-white rounded-lg flex">
                        <div style="min-width: 130px;" class="bg-gray-500 rounded-tl-lg rounded-bl-lg"></div>
                        <div class="p-4">
                            <h3 class="mb-4 text-xl">Lorem ipsum dolor sit amet consectetur.</h3>
                            <a href="#" class="fullwidth-btn hover:bg-gray-600 duration-300">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="flex-1 px-4">
                    <div class="bg-white rounded-lg flex">
                        <div style="min-width: 130px;" class="bg-gray-500 rounded-tl-lg rounded-bl-lg"></div>
                        <div class="p-4">
                            <h3 class="mb-4 text-xl">Lorem ipsum dolor sit amet consectetur.</h3>
                            <a href="#" class="fullwidth-btn hover:bg-gray-600 duration-300">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="flex-1 px-4">
                    <div class="bg-white rounded-lg flex">
                        <div style="min-width: 130px;" class="bg-gray-500 rounded-tl-lg rounded-bl-lg"></div>
                        <div class="p-4">
                            <h3 class="mb-4 text-xl">Lorem ipsum dolor sit amet consectetur.</h3>
                            <a href="#" class="fullwidth-btn hover:bg-gray-600 duration-300">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-20 text-lg border-b-2 border-gray-200 pb-16">
            <h2 class="section-heading">Additional Services</h2>
            <div class="flex -mx-4 text-center font-bold">
                <div class="flex-1 px-4">
                    <a href="" class="border-b border-gray-800">Lorem ipsum dolor</a>
                </div>
                <div class="flex-1 px-4">
                    <a href="" class="border-b border-gray-800">Lorem ipsum dolor sit</a>
                </div>
                <div class="flex-1 px-4">
                    <a href="" class="border-b border-gray-800">Lorem ipsum</a>
                </div>
                <div class="flex-1 px-4">
                    <a href="" class="border-b border-gray-800">Lorem ipsum dolor</a>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
