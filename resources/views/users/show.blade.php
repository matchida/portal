@extends('layouts.common')
@section('description', 'ユーザ詳細')
@section('pageCss')
    <link href="/css/page.css" rel="stylesheet">
@endsection
@include('layouts.head')
@include('layouts.header')
@section('content')
<div class="container">
    {{-- 編集・削除ボタン --}}
    <div>
        <a href="{{ url('users/'. $user['user_id']. '/edit') }}" class="btn btn-primary">
            {{ __('Edit') }}
        </a>
        {{-- 削除ボタンは後で正式なものに置き換えます --}}
        <a href="#" class="btn btn-danger">
            {{ __('Delete') }}
        </a>
    </div>

    {{-- ユーザー1件の情報 --}}
    <dl class="row">
        <dt class="col-md-2">{{ __('ID') }}</dt>
        <dd class="col-md-10">{{ $user['user_id'] }}</dd>
        <dt class="col-md-2">{{ __('Name') }}</dt>
        <dd class="col-md-10">{{ $user['name'] }}</dd>
        <dt class="col-md-2">{{ __('E-Mail') }}</dt>
        <dd class="col-md-10">{{ $user['email'] }}</dd>
    </dl>
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