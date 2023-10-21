<!DOCTYPE html>
<html lang="en" class="h-100">
    <!-- class="h-100" -->
    <head>
        <title>@yield("title")</title>

        <meta charset="utf-8">
        <meta name="description" content="@yield('description')">
        <meta name="author" content="Tolsedum">

        <link href="resources/css/bootstrap_source/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        @if(!empty($style_list))
            @foreach($style_list as $style_href)
                <link href="{{$style_href}}" rel="stylesheet">
            @endforeach
        @endif
        @if(!empty($script_pre_list))
            @foreach($script_pre_list as $script_href)
                <script src="{{$script_href}}"></script>
            @endforeach
        @endif
    </head>

    <body class="d-flex h-100 text-center text-bg-dark vstack">

        <header class="mb-auto">
            @include("components.header")
        </header>

        <main class="px-3 w-100 p-3" style="flex: 1 0 auto;">
            @yield('main_content')
        </main>

        <footer class="mt-auto text-white-50 py-3 my-4">
            @include("components.footer")
        </footer>

        <script src="resources/js/bootstrap_source/bootstrap.bundle.min.js"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script type='module' src="resources/js/app.js"></script>
        @if(!empty($script_post_list))
            @foreach($script_post_list as $script_href)
                <script src="{{$script_href}}"></script>
            @endforeach
        @endif
    </body>

</html>