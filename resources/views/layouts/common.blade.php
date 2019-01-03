<!DOCTYPE html>
<html lang="ja">
    <head>
        @yield('head')
    </head>
    <body>
        <div id="wrapper">
            @yield('header')
            <div class="contents">
                <div class="sub-menu">
                    @yield('sub')
                    @yield('pageSub')
                </div>
                <div class="main">
                    @yield('content')
                </div>
            </div>
            @yield('footer')
        </div>
    </body>
</html>