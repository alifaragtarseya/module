<section class="section--product pt-5">
    <div class="bg-white ">
        <div class="container mb-5">

            <div class="row pt-5 mb-5 facts-counter ">
                @forelse ($counters as $item)


                <div class="col-md-6 col-lg-3 text-center">
                    <img src="{{ asset($item->image) }}" style="filter: invert(46%) sepia(16%) saturate(1092%) hue-rotate(143deg) brightness(94%) contrast(93%);" width="80" alt="">
                    <h1 class="display-5 " data-toggle="counter-up">{{ $item->number }}</h1>
                    <p class="fs-5">{{ $item->title }}</p>
                </div>


                @empty
                @endforelse
            </div>

        </div>
        <br><br>
    </div>
</section>
