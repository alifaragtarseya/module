@extends('front.layouts.master')
@section('css')
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
    <div class="container-fluid page-header p-0 wow fadeIn" style="background-image: url({{ asset($metaBanner->image) }}); " data-wow-delay="0.1s">
        <div class="meta--banner" >
            <div class="container py-5">
                <h1 class="display-4 animated slideInDown mb-4 text-center text-white">{{ $service->title }}</h1>

            </div>
        </div>
    </div>
    <!-- Page Header End -->


     <section class="container pt-5 mb-5 py-5">
        <div class="row">
            <div class="col-6 border p-2 w3-round-large">
                <div class="image" style="background-image: url({{ asset($service->image) }})"></div>

            </div>
            <div class="col-md-6 p-5">
                <b class="h3 main-color">{{ $service->title }}</b>

                <div class="pt-2">
                    {{-- <b class="main-color  h3">{{ __('lang.description') }}</b> --}}
                    <br><br>
                    <p>{{ $service->short_description }}</p>
                </div>


            </div>
        </div>

        <div class="row pt-4">
            @if ($service->description )

            <div class="col-12">
                <div class="desc border p-2 w3-round-large">
                    {!! $service->description !!}
                </div>
            </div>
            @endif
            <div class="col-12 pt-5">
                  <b class="h3 ">
                    <i class="fa fa-image fs-2"></i>
                    {{ __('lang.gallery')}}
                </b>
            </div>
            @foreach ($service->images as $image)
                       <div class="col-12 col-md-6 pt-3 col-lg-4">
                        <div class="column">
                            <img onclick="openModal();currentSlide({{ $loop->iteration }})" src="{{ asset($image->image) }}" style="width: 100%; height: 350px;" class="w3-round-large border p-2" alt="">
                          </div>
                        {{-- <div class="image" style="background-image: url({{ asset($image->image) }})"></div> --}}
                       </div>
            @endforeach
        </div>
     </section>

     <div id="myModal" class="modal">
        <span class="close cursor" onclick="closeModal()">&times;</span>
        <div class="modal-content">
            @foreach ($service->images as $image)
                <div class="mySlides">
                    <div class="numbertext">{{ $loop->iteration }} / {{ count($service->images) }}</div>
                    <img src="{{ asset($image->image) }}" style="width:100%">
                </div>
          @endforeach


          <!-- Next/previous controls -->
          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>

          <!-- Caption text -->
          <div class="caption-container">
            <p id="caption"></p>
          </div>

          <!-- Thumbnail image controls -->
          @foreach ($service->images as $image)
            <div class="column">
                <img class="demo" src="{{ asset($image->image) }}" onclick="currentSlide({{ $loop->iteration }})" alt="Nature">
            </div>
          @endforeach

        </div>
      </div>
@endsection

@section('css')
    <style>


.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Create four equal columns that floats next to eachother */
.column {
  float: left;
  width: 25%;
}

/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 1200px;
}

/* The Close Button */
.close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

/* Hide the slides by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Caption text */
.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

img.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s;
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
    </style>
@endsection
@section('js')
<script>
    // Open the Modal
    function openModal() {
      document.getElementById("myModal").style.display = "block";
    }

    // Close the Modal
    function closeModal() {
      document.getElementById("myModal").style.display = "none";
    }

    var slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      var captionText = document.getElementById("caption");
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
      captionText.innerHTML = dots[slideIndex-1].alt;
    }
    </script>
@endsection
