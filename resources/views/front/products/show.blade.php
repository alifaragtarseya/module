@extends('front.layouts.master')
@section('css')
<link rel="stylesheet" href="{{ asset('front/css/viewer.css') }}" crossorigin="anonymous">

    <style>
        .image {
            background-size: cover;
            background-position: center;
            width: 100%;
            height: 100%;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }
    </style>
@endsection
@section('content')
    <!-- Page Header Start -->
    {{-- <div class="container-fluid page-header p-0 wow fadeIn" style="height: 400px;background-image: url({{ asset($product->image) }}); " data-wow-delay="0.1s"> --}}
        {{-- <div class="meta--banner" >
            <div class="container py-5">
                <h1 class="display-4 animated slideInDown mb-4 text-center text-white">{{ $product->title }}</h1>

            </div>
        </div> --}}
    {{-- </div> --}}
    <!-- Page Header End -->


     <section class="container pt-5 mb-5 py-5">
        <div class="row">
            <div class="col-md-12">
                <h1 class="display-4 animated slideInDown mb-4 text-center main-color">{{ $product->title }}</h1>

            </div>

            {{-- <div class="col-md-12 p-5">

                <div class="pt-2">
                    <b class="main-color  h3">{{ __('lang.description') }}</b>
                    <br><br>
                    <p>{{ $product->short_description }}</p>
                </div>

            </div> --}}
        </div>

        <div class="row pt-4">
            @if ($product->description )

            <div class="col-12">
                <div class="desc  p-2 w3-round-large">
                    {!! $product->description !!}
                </div>
            </div>
            @endif
            {{-- <div class="col-12 pt-5">
                  <b class="h3 ">
                    <i class="fa fa-image fs-2"></i>
                    {{ __('lang.gallery')}}
                </b>
            </div>
            @foreach ($product->images as $image)
                       <div class="col-12 col-md-6 pt-3 col-lg-4">
                         <img src="{{ asset($image->image) }}" style="width: 100%; height: 350px;" class="w3-round-large border p-2" alt="">
                       </div>
            @endforeach --}}
        </div>
     </section>

     @include('front.includes.model-order', ['product' => $product->title])
@endsection

@section('js')
<script src="{{ asset('front/js/viewer.js') }}"></script>

<script src="{{ asset('front/js/jquery-viewer.js') }}"></script>

<script>
    window.addEventListener('DOMContentLoaded', function() {
        var galley = document.getElementById('galley');
        var maxOffsetPercentage = 0.9;
        var viewer = new Viewer(galley, {
            url: 'data-original',
            backdrop: 'static',
            move: function(event) {
                var viewerData = viewer.viewerData;
                var imageData = viewer.imageData;
                var maxOffsetHorizontal = viewerData.width * maxOffsetPercentage;
                var maxOffsetVertical = viewerData.height * maxOffsetPercentage;
                var detail = event.detail;
                var left = detail.x;
                var top = detail.y;
                var right = viewerData.width - (left + imageData.width);
                var bottom = viewerData.height - (top + imageData.height);

                if (
                    // Move left
                    (detail.x < detail.oldX && right > 0 && right > maxOffsetHorizontal)

                    // Move right
                    ||
                    (detail.x > detail.oldX && left > 0 && left > maxOffsetHorizontal)

                    // Move up
                    ||
                    (detail.y < detail.oldY && bottom > 0 && bottom > maxOffsetVertical)

                    // Move down
                    ||
                    (detail.y > detail.oldY && top > 0 && top > maxOffsetVertical)
                ) {
                    event.preventDefault();
                }
            },
            zoomed: function(event) {
                var detail = event.detail;

                // Zoom out
                if (detail.ratio < detail.oldRatio) {
                    var viewerData = viewer.viewerData;
                    var imageData = viewer.imageData;
                    var maxOffsetHorizontal = viewerData.width * maxOffsetPercentage;
                    var maxOffsetVertical = viewerData.height * maxOffsetPercentage;
                    var left = imageData.x;
                    var top = imageData.y;
                    var right = viewerData.width - (left + imageData.width);
                    var bottom = viewerData.height - (top + imageData.height);
                    var x = 0;
                    var y = 0;

                    if (right > 0 && right > maxOffsetHorizontal) {
                        x = maxOffsetHorizontal - right;
                    }

                    if (left > 0 && left > maxOffsetHorizontal) {
                        x = maxOffsetHorizontal - left;
                    }

                    if (bottom > 0 && bottom > maxOffsetVertical) {
                        y = bottom - maxOffsetVertical;
                    }

                    if (top > 0 && top > maxOffsetVertical) {
                        y = top - maxOffsetVertical;
                    }

                    // Move the image into view if it is invisible
                    if (x !== 0 || y !== 0) {
                        viewer.move(x, y);
                    }
                }
            },
        });
    });
</script>
@endsection
