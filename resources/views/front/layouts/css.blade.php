 <!-- Libraries Stylesheet -->
 <link href="{{ asset('front/lib/animate/animate.min.css') }}" rel="stylesheet">
 <link href="{{ asset('front/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

 <!-- Customized Bootstrap Stylesheet -->
 <link href="{{ asset('front/css/bootstrap.min.css') }}" rel="stylesheet">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

 <link
 rel="stylesheet"
 href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>
 <!-- Template Stylesheet -->
 @if (app()->getLocale() == 'ar')
 <link href="{{ asset('front/css/style-rtl.css') }}" rel="stylesheet">
<style>
  @import url(https://db.onlinewebfonts.com/c/125063e353c1f65c55ba1e3811969217?family=GE+SS+Two+Medium);

 html, body ,* {
    font-family: 'GE SS Two Medium' !important;
    font-weight: 400 !important;
     letter-spacing: 0px !important;
     line-height: normal !important;
  }
</style>
 @else
 <link href="{{ asset('front/css/style.css') }}" rel="stylesheet">
<style>
    @import url('https://fonts.cdnfonts.com/css/myriad-pro');
   html, body ,* {
       font-family: 'Myriad Pro' !important;
       font-weight: bold !important;
       /* letter-spacing: 0px !important; */
       /* line-height: normal !important; */
   }
</style>
 @endif


 <link rel="stylesheet" href="{{ asset('front/css/my-style.css') }}">
@yield('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>

    .dropdown-item:active {
    color: #fff;
    text-decoration: none;
    background-color: var(--primary);
}
</style>
