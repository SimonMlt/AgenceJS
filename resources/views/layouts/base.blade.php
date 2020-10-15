<!DOCTYPE HTML>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
     <link rel="stylesheet" href="{{asset('css/app.css')}}">
     <title>@yield('title', 'AgenceJS')</title>
</head>
<body>
    @include('components.navigation')
    <div class="container">

        @yield('content')

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
</body>

<footer>
    <div class="bg-secondary text-white mt-5">
        <div class="container">
            <div class="row mt">
                <div class="col-md-3 mt-3 footer-about wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                    <img class="logo-footer" src="../storage/img/logo.png" alt="logo-footer" data-at2x="assets/img/logo.png" height="85">
                    <p>
                        We are a young company always looking for new and creative ideas to help you with our products in your everyday work.
                    </p>
                    <p><a href="#">Our Team</a></p>
                </div>
                <div class="col-md-4 mt-3 offset-md-1 footer-contact wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
                    <h3>Contact</h3>
                    <p><i class="fas fa-map-marker-alt"></i> Via Rossini 10, 10136 Turin Italy</p>
                    <p><i class="fas fa-phone"></i> Phone: (0039) 333 12 68 347</p>
                    <p><i class="fas fa-envelope"></i> Email: <a href="mailto:hello@domain.com">hello@domain.com</a></p>
                    <p><i class="fab fa-skype"></i> Skype: you_online</p>
                </div>
                <div class="col-md-4 mt-3 footer-links wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="row">
                        <div class="col">
                            <h3>Links</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <p><a class="scroll-link" href="#top-content">Home</a></p>
                            <p><a href="#">Features</a></p>
                            <p><a href="#">How it works</a></p>
                            <p><a href="#">Our clients</a></p>
                        </div>
                        <div class="col-md-6">
                            <p><a href="#">Plans &amp; pricing</a></p>
                            <p><a href="#">Affiliates</a></p>
                            <p><a href="#">Terms</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

</html>
