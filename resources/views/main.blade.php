<!DOCTYPE html>
<html lang="en" class="h-100">
    <!-- class="h-100" -->
    <head>
        <title>@yield("title")</title>
        <meta name="yandex-verification" content="5e8871d7c39435ee" />
        <meta charset="utf-8">
        <meta name="description" content="@yield('description')">
        <meta name="author" content="Tolsedum">
        <link rel="icon" href="web/favicon.ico" type="image/x-icon">

        <!-- Custom styles for this template -->
        @if(!empty($style_list))
            @foreach($style_list as $style_href)
                <link href="{{$style_href}}" rel="stylesheet">
            @endforeach
        @endif
        @if(!empty($script_pre_list))
            @foreach($script_pre_list as $script_href)
                @include("components.create_script", $script_href)
            @endforeach
        @endif
    </head>

    <body class="d-flex h-100 text-center  vstack" data-bs-theme="dark">

        <header class="mb-5">
            @include("components.header")
        </header>

        <main class="w-100" style="flex: 1 0 auto;">
            @if(!empty($breadcrumb) && count($breadcrumb) > 1) @include('components.breadcrumb', ["breadcrumb" => $breadcrumb]) @endif
            @yield('main_content')
        </main>

        <footer class="mt-auto text-white-50 py-3 my-4">
            @include("components.footer")
        </footer>

        
        <!-- <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script type='module' src="resources/js/app.js"></script> -->
        @if(!empty($script_post_list))
            @foreach($script_post_list as $script_href)
                @include("components.create_script", $script_href)
            @endforeach
        @endif
    </body>

</html>