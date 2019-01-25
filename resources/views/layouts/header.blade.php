@section('header')
    <header class="header">
        <h1><a href="/"><img src="{{asset('/img/img-header-logo.png')}}"></a></h1>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        @yield('pageJs')
    </header>
@endsection