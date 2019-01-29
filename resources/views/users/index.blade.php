@extends('layouts.common')
@section('title', $title)
@section('description', 'ユーザリスト')
@section('pageCss')
    <link href="/css/page.css" rel="stylesheet">
@endsection
@include('layouts.head')
@include('layouts.header')
@section('content')
<div class="container">
    <div class="table-responsive">
        <button><a href="{{ url('users/create') }}">ユーザ作成</a></button>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>社員番号</th>
                    <th>名前</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->user_id }}</td>
                        <td><a href="{{ url('users/' . $user->user_id) }}">{{ $user->first_name . ' ' . $user->last_name }}</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@include('layouts.sub')
 
@section('pageSub')
    <p>個別サイドバーの内容</p>
@endsection

@section('pageJs')
    <script src="/js/page.js"></script>
@endsection
@include('layouts.footer')