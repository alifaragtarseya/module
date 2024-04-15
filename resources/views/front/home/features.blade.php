<section class="section--product pt-5">
    <div class="bg-white ">
        <div class="container mb-5">
            <h2 class=""> <b class="main-color">{{ __('lang.latest_news') }}</b></h2>

            <div class="row pt-5 mb-5 facts-counter ">
                @forelse ($features as $item)

                <div class="co-md-12 pt-2 ">
                    <div class="row">
                        @if ($loop->iteration % 2 !=1 && !isMobile())
                        <div class="col-md-6">
                            <img src="{{ asset($item->image) }}" style="width: 100%; height: 550px" alt="">
                        </div>
                        @endif
                        <div class="col-md-6 pt-6">
                            <div class="p-5">
                                <br><br><br>
                                <h3><b>{{ $item->title }}</b></h3>
                            <p>{{ $item->description }}</p>
                            </div>
                        </div>
                        @if ($loop->iteration % 2 ==1 || isMobile())
                        <div class="col-md-6">
                            <img src="{{ asset($item->image) }}" style="width: 100%; height: 600px" alt="">
                        </div>
                        @endif
                    </div>
                </div>


                @empty
                @endforelse
            </div>

        </div>
        <br><br>
    </div>
</section>
