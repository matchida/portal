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
    {{-- 編集・削除ボタン --}}
    <div>
        <a href="{{ url('users/'. $user['user_id']. '/edit') }}" class="btn btn-primary">編集</a>
    </div>

    {{-- ユーザー1件の情報 --}}
    <table>
        <tr>
            <th>社員番号</th>
            <td>{{ $user['user_id'] }}</td>
        </tr>
        <tr>
            <th>タイプ</th>
            <td>{{ $user['user_type'] }}</td>
        </tr>
        <tr>
            <th>名前</th>
            <td>{{ $user['name'] }}</td>
        </tr>
        <tr>
            <th>グループ</th>
            <td>{{ $user['group'] }}</td>
        </tr>
        <tr>
            <th>メールアドレス</th>
            <td>{{ $user['email'] }}</td>
        </tr>
        <tr>
            <th>生年月日</th>
            <td>{{ $user['birthday']}} </td>
        </tr>
        <tr>
            <th>入社日</th>
            <td>{{ $user['joined'] }}</td>
        </tr>
        <tr>
            <th>プログラミング</th>
            <td>{{ $user['program'] }}</td>
        </tr>
        <tr>
            <th>データベース</th>
            <td>{{ $user['database'] }}</td>
        </tr>
        <tr>
            <th>気になるもの</th>
            <td>{{ $user['interested'] }}</td>
        </tr>
        <tr>
            <th>ヒアリング状況</th>
            <td>{{ $user['listening'] }}</td>
        </tr>
        <tr>
            <th>コメント</th>
            <td>{{ $user['comment'] }}</td>
        </tr>
    </table>
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