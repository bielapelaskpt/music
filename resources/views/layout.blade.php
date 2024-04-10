<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MusicPix</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500;9..40,600;9..40,700;9..40,900&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/global.css') }}?v=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Script -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
    <script src="/js/notify.min.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <link rel="icon" href="/favico.png" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="/favico.png">
    <meta property="og:title" content="Acesse o aplicativo">
    <meta property="og:image" content="">
    <meta property="og:site_name" content="Music Pix">
    <meta property="og:description" content="Ganhe avaliando músicas">
    @include('components.pixels')

    @yield('head')
</head>

<!-- contact email pendragoNdev@proton.me -->
<!-- contact email pendragoNdev@proton.me -->
<!-- contact email pendragoNdev@proton.me -->
<!-- contact email pendragoNdev@proton.me -->
<!-- contact email pendragoNdev@proton.me -->
<!-- contact email pendragoNdev@proton.me -->
<!-- contact email pendragoNdev@proton.me -->

<body class="bg-dark" style="overflow-x: hidden; min-block-size: 100dvb;">
    @include('components.header')
    @yield('content')
    @include('components.footer')
</body>
<!-- contact email pendragoNdev@proton.me -->
<!-- contact email pendragoNdev@proton.me -->
<!-- contact email pendragoNdev@proton.me -->
<!-- contact email pendragoNdev@proton.me -->
<!-- contact email pendragoNdev@proton.me -->
<!-- contact email pendragoNdev@proton.me -->
<!-- contact email pendragoNdev@proton.me -->
@if ($errors->any())
    <script>
        $.notify("{{ $errors->first() }}", {
            className: 'error',
            style: 'bootstrap',
            globalPosition: 'top left',
            autoHideDelay: 5000,
        })
    </script>
@endif
<script>
    $(document).ready(function() {
        let utms = new URLSearchParams(window.location.search);
        console.log(utms)
        let localUtmsValidate = localStorage.getItem('utmsValidate');
        if (localUtmsValidate != undefined && localUtmsValidate != null) {
            if (localUtmsValidate < new Date()) {
                localStorage.removeItem('utms');
                localStorage.removeItem('utmsValidate');
            }
        }
        if (utms.size != 0) {
            let utmsValidate = (new Date()).setDate((new Date()).getDate() + 1);
            localStorage.setItem('utmsValidate', utmsValidate);

            let localUtms = JSON.parse(localStorage.getItem('utms'));
            if (localUtms == null) {
                localUtms = {};
            }
            utms.forEach((value, key) => {
                localUtms[key] = value;
            });
            localStorage.setItem('utms', JSON.stringify(localUtms));
        }
    });
</script>

</html>
