@extends('front.layouts.master')

@section('content')
    <!-- Carousel Start -->
    @include('front.home.slider', ['sliders' => $sliders])
    <!-- Carousel End -->


    {{-- <!-- About Start -->
    @include('front.home.about', ['about' => $about])
    <!-- About End --> --}}

     <!-- Service Start -->
     @include('front.home.services', ['services' => $services])
     <!-- Service End -->
    <!-- feature Start -->
    @include('front.home.features', ['features' => $features])
    <!-- feature End -->



    {{-- <!-- counters Start -->
    @include('front.home.counters', ['counters' => $counters])
    <!-- counters End -->

    <!-- products Start -->
    @include('front.home.products', ['products' => $products])
    <!-- products End -->


    <!-- projects Start -->
    @include('front.home.projects', ['projects' => $projects])
    <!-- projects End --> --}}




@endsection

@section('js')
    <script>
        $('#services--owl').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayspeed: 2000,
            nav: true,
            navText : [
            '<i class="bi bi-chevron-left"></i>',
            '<i class="bi bi-chevron-right"></i>'
        ],
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 2,
                },
                1000: {
                    items: 3,

                }
            }
        });
        $('#parteners--owl').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayspeed: 2000,
            nav: true,
            dots:true,
            navText : [
            '<i class="bi bi-chevron-left"></i>',
            '<i class="bi bi-chevron-right"></i>'
        ],
            responsive: {
                0: {
                    items: 2,

                },
                600: {
                    items: 3,

                },
                1000: {
                    items: 6,

                }
            }
        })
    </script>
@endsection
