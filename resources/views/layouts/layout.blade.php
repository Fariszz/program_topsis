<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>Sistem Pendukung Keputusan Topsise</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('/css/dashlite.css?ver=3.1.3') }}">
    <link rel="stylesheet" href="{{ asset('/css/dashlite.css?ver=3.3') }}">
    <link rel="stylesheet" href="{{ asset('/css/theme.css?ver=3.3') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('/css/skins/theme-red.css?ver=3.1.3') }}">
</head>

<body class="nk-body bg-lighter npc-default has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            @include('layouts.sidebar')
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                @include('layouts.header')
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
                <!-- footer @s -->
                @include('layouts.footer')
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->


    <!-- JavaScript -->
    <script src="{{ asset('/js/bundle.js?ver=3.3') }}"></script>
    <script src="{{ asset('/js/scripts.js?ver=3.3') }}"></script>
</body>

</html>
