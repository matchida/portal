@section('head')
    <meta charset="UTF-8">
    <title>@yield('title') | SE-Project</title>
    <meta name="description" itemprop="description" content="@yield('description')">
    <meta name="keywords" itemprop="keywords" content="@yield('keywords')">
    <link rel="stylesheet" href="{{ asset('/css/layout.css')}}" >
    {{-- @yield('pageCss') --}}
@endsection