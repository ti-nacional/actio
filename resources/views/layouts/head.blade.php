<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- SEO Meta description -->
<meta name="description" content="">
<meta name="author" content="Intergalaxy">

<!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
<meta property="og:site_name" content="" /> <!-- website name -->
<meta property="og:site" content="" /> <!-- website link -->
<meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
<meta property="og:type" content="article" />

<!--title-->
<title>Actio</title>

<!--favicon icon-->
<link rel="icon" href="img/favicon.png" type="image/png" sizes="16x16">

<!--google fonts-->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7COpen+Sans&display=swap"
    rel="stylesheet">

<!--Bootstrap css-->
<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
<!--Magnific popup css-->
<link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
<!--Themify icon css-->
<link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}">
<!--animated css-->
<link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
<!--Owl carousel css-->
<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
<!--custom css-->
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
<!--responsive css-->
<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">


@section('scripts')
    <!--jQuery-->
    <script src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>
    <!--Popper js-->
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <!--Bootstrap js-->
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <!--Magnific popup js-->
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <!--jquery easing js-->
    <script src="{{asset('assets/js/jquery.easing.min.js')}}"></script>
    <!--wow js-->
    <script src="{{asset('assets/js/wow.min.js')}}"></script>
    <!--owl carousel js-->
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <!--countdown js-->
    <script src="{{asset('assets/js/jquery.countdown.min.js')}}"></script>
    <!--validator js-->
    <script src="{{asset('assets/js/validator.min.js')}}"></script>
    <!--custom js-->
    <script src="{{asset('assets/js/scripts.js')}}"></script>
    
    <script>
        $(document).ready(function() {
            $('#cookieModal').modal('show')
        });
    </script>
@endsection
