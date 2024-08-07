@extends('front.layouts.master')
@section('css')
<link rel="stylesheet" href="{{ asset('front/css/viewer.css') }}" crossorigin="anonymous">

<style>

    ul.pagination{
        justify-content: center;
        gap: 15px
    }
    .page-item:first-child .page-link,.page-item .page-link,.page-item:last-child .page-link{
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
        border-radius: 4px
    }
    .page-item.active .page-link{
        background: #1f1c1c !important;
        border-color: #1f1c1c !important;
        color: #fff !important

    }
    .page-item .page-link{
        color: #1f1c1c !important;

    }
    .text-muted {
        color: #1f1c1c !important;
    }
</style>
@endsection
@section('content')

<div class="container">
    <div class="row pt-5 mb-5">

            <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                <div class="contact-info-box mb-30">
                    <div class="icon ">
                        <img src="{{ asset($resource->image) }}" class="w3-round-xlarge" style="width: 100%;height: 450px; object-fit: contain" alt="">
                    </div>
                    <br>
                    <h3><b>{{ $resource->title }}</b></h3>
                    <p class="text-muted">
                        {{ $resource->short_description }}
                    </p>
                    <div>
                        {!! $resource->description !!}
                    </div>

                </div>
            </div>
            @if ($images->isNotEmpty())

            <div class="col-md-12 pt-4">
                <div class="row">
                    <div class="col-1">
                        <h3><b>{{ __('lang.gallery') }}</b></h3>
                    </div>
                    <div class="col-11 pt-2">
                        <hr style="background: #000 !important;height: 2px;opacity: 0.6">
                    </div>
                </div>

                <div class="row pt-2" id="galley">

                    @foreach ($images as $item)
                        <div class="col-md-6 col-lg-4 m-auto pt-2">
                            <div class="card">
                                <div class="card-body p-2 text-center">
                                    <div class=" border-0">
                                            <img src="{{ asset($item->image ?? null) }}" data-original="{{ asset($item->image) }}" style="height: 300px;width: 100%; object-fit: cover;cursor: zoom-in" class="img-thumbnail img_pro_dis border-0">
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>


                <div class="pt-4">
                    {{ $images->links() }}
                </div>
            </div>
            @endif
    </div>
</div>


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


