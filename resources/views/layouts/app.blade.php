@include('layouts.partials.header')
<body class="@yield('body_class')">
@include('layouts.partials.navbar')

@yield('content')

@include('layouts.partials.footer')
@include('layouts.partials.sidebar')
@include('layouts.partials.scripts')
</body>
</html>
