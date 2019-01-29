@extends('layouts.common')
@section('title', '社員番号 ' . $title)
@section('description', 'ユーザ詳細')
@section('pageCss')
    <link href="/css/page.css" rel="stylesheet">
@endsection
@include('layouts.head')
@include('layouts.header')
@section('content')
<div class="container">
    <form method="post" action="{{ '/' . 'users/' . $user['user_id']. '/confirm' }}">
        {{-- 編集・削除ボタン --}}
        <div>
            <button type="submit" name="confirm">確認</button>
            {{-- 削除ボタンは後で正式なものに置き換えます --}}
            <a href="#" class="btn btn-danger">削除</a>
        </div>
        {{-- @TODO 並び順考える --}}
        <div>
            <label>タイプ</label>
            <input id="user_type" value="{{ $user['user_type'] }}">
            <label>名前</label>
            <input id="name" value="名前">
            <label>グループ</label>
            <input id="group" value="グループ">
            <label>プログラミング</label>
            <input id="program" value="プログラム">
            <label>データベース</label>
            <input id="database" value="データベース">
            <label>気になるもの</label>
            <input id="interested" value="気になる">
            <label>ヒアリング</label>
            <input id="listening" value="ヒアリング">
            <label>コメント</label>
            <input id="comment" value="コメント">
        </div>
    </form>
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