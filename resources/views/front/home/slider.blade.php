<div class="container-fluid p-0   animate__animated  animate__bounceInUp" >
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        {{-- <div class="carousel-indicators slider--dot">
            @foreach ($sliders as $item)
             <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="{{$loop->index}}" class="{{$loop->first?'active':''}}" aria-current="true" aria-label="Slide {{$loop->iteration}}"></button>
            @endforeach
        </div> --}}

        <div class="carousel-inner">
            @foreach ($sliders as $item)

            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">

                <div style="background-image: url('{{ asset($item->image) }}'); height: 700px; background-size: cover; background-position: center ; background-repeat: no-repeat;">
                    {{-- <img class="w-100" height="600px" src="{{ asset($item->image) }}" alt="Image"> --}}
                    {{-- <div class="text" style="background: #00000082;height: 800px;"> --}}
                        <div class="carousel-caption p-5 align-items-start">
                            <div class="container">
                                <div class="row p-md-5">
                                    <div class="col-12 pt-5  animate__animated  animate__bounceInUp">
                                        <b class=" fs-3 main-color mb-4 an ">{{ $item->title }}</b><br><br>
                                        <p class=" text-dark w-50 mb-5">{{ $item->description }}</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    {{-- </div> --}}
                </div>

            </div>
            @endforeach

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    {{-- <div class=" counter--div ">
        <div class="container ">

            <div class="row pt-5  facts-counter ">
                @forelse ($counters as $item)


                <div class="col-md-6 col-lg-3 pt-2 ">
                    <div class="card border-0" style="box-shadow: 0 0 5px 1px rgba(0, 0, 0, 0.274);">
                        <div class="card-body p-3">
                            <div class="d-flex gap-3 align-items-center">
                                <img src="{{ asset($item->image) }}" style="width: 64px; filter: invert(46%) sepia(16%) saturate(1092%) hue-rotate(143deg) brightness(94%) contrast(93%);" height="56" alt="">
                                <div class="text-center" style="width: 100%">
                                    <h1 class=" " data-toggle="counter-up">{{ $item->number }}</h1>
                                    <p class="fs-5">{{ $item->title }}</p>
                                </div>
                           </div>
                        </div>
                    </div>
                </div>


                @empty
                @endforelse
            </div>

        </div>
        <br><br>
    </div> --}}
</div>
