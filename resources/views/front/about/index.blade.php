@extends('front.layouts.master')
@section('css')
    <style>
        /* The Modal (background) */
        .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 9999; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
        }

        /* Modal Content (image) */
        .modal-content {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
        }
        @-webkit-keyframes zoom {
        from {-webkit-transform:scale(0)}
        to {-webkit-transform:scale(1)}
        }

        @keyframes zoom {
        from {transform:scale(0)}
        to {transform:scale(1)}
        }

        /* The Close Button */
        .close {
        position: absolute;
        top: 15px;
        right: 35px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
        }

        .close:hover,
        .close:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
        }
    </style>
@endsection
@section('content')
    <!-- Page Header Start -->
    <div class="bg-white p-5">
        <div class="container-fluid  p-0 wow fadeIn" style="height:500px ; background-position: center;background-repeat: no-repeat;background-size: contain;background-image: url({{ asset($metaBanner->image) }}); " data-wow-delay="0.1s">

        </div>
    </div>
    <!-- Page Header End -->


     <!-- About Start -->
     <div class="container-xxl py-5">
        <div class="container">
            {{-- <div class="row g-5 pt-5">
                <div class="col-md-12 text-center">
                    <h2><b class="main-color">{{ __('lang.about_') }}</b> <b>{{ getSettingValue('site_name_'.app()->getLocale()) }}</b></h2>
                </div>
                <div class="col-lg-7  wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6 mb-5 main-color">{{ $about->title }}</h1>
                        <p class="fs-5  mb-4">
                            {!! $about->short_description !!}

                        </p>

                        <div class="mb-4">
                            {!! $about->description !!}
                        </div>

                    </div>
                </div>
                <div class="col-lg-5  wow fadeInUp" data-wow-delay="0.1s">
                            <img class=""  style="width: 100%" src="{{ asset($about->image) }}" alt="" style="object-fit: cover;">
                            <br><br>
                            <a href="{{ asset(getSettingValue('company_profile')) }}" class="btn btn--primary p-3 d-block sec-bg-color text-dark" download="K-MIX Company Profile">
                                {{ __('lang.download_profile') }}
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 25 24" fill="none">
                                <path d="M17.09 9H15.5V4C15.5 3.45 15.05 3 14.5 3H10.5C9.95 3 9.5 3.45 9.5 4V9H7.91C7.02 9 6.57 10.08 7.2 10.71L11.79 15.3C12.18 15.69 12.81 15.69 13.2 15.3L17.79 10.71C18.42 10.08 17.98 9 17.09 9ZM5.5 19C5.5 19.55 5.95 20 6.5 20H18.5C19.05 20 19.5 19.55 19.5 19C19.5 18.45 19.05 18 18.5 18H6.5C5.95 18 5.5 18.45 5.5 19Z" fill="#fff"/>
                              </svg>
                            </a>
                </div>
            </div> --}}



            <div class="row g-5 pt-5">
                <div class="col-md-6">
                    <div>
                        {!! getSettingValue('story_description_'.app()->getLocale()) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div>
                        {!! getSettingValue('culture_description_'.app()->getLocale()) !!}
                    </div>
                </div>
            </div>


            {{-- <div class="row g-5 pt-5">
                <div class="col-md-12 text-center">
                    <h2><b class="main-color">{{ __('lang.certifications') }}</b> </h2>
                </div>

                @foreach ($certifications as $item)
                <div class="col-lg-6  wow fadeInUp" data-wow-delay="0.1s">
                    <div class="p-2 border rounded-3"  >
                        <img class="" id="myImg-{{ $item->id }}" onclick="showImag('myImg-{{ $item->id }}')" width="100%" src="{{asset($item->image) }}" alt="" style="object-fit: cover;">
                    </div>

                </div>
                @endforeach
            </div> --}}

            <div class="row g-5 pt-5">
                <div class="col-md-12 ">
                    <h5><b class="main-color">{{ __('lang.Multi_Disciplinary') }}</b> </h5>
                    <h2><b class="main-color">{{ __('lang.team') }}</b> </h2>
                </div>

                @foreach ($teams as $item)
                <div class="col-lg-4 pt-2  wow fadeInUp" data-wow-delay="0.1s">
                    <div class="p-2 ">
                        @if ($item->image)
                            <img class=" "  src="{{asset($item->image) }}" alt="" style="object-fit: cover;width: 100px">

                        @endif
                        <h6><b>{{ $item->title }}</b></h6>
                        {{-- <h3><b>{{ $item->jop }}</b></h3> --}}
                    </div>

                </div>
                @endforeach
            </div>


            <br><br>

        </div>
    </div>
    <!-- The Modal -->
<div id="myModal" class="modal">

    <!-- The Close Button -->
   <span class="close">&times;</span>

    <!-- Modal Content (The Image) -->
    <img class="modal-content" id="img01">

    <!-- Modal Caption (Image Text) -->
  </div>
    <!-- About End -->
@endsection


@section('js')
<script>
    // Get the modal

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    function showImag(id){
        var modal = document.getElementById("myModal");
        var img = document.getElementById(id);
        var modalImg = document.getElementById('img01');
        // img.onclick = function(){
        modal.style.display = "block";
        modalImg.src = img.src;
        // }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
        modal.style.display = "none";
        }
     }
    </script>
@endsection
