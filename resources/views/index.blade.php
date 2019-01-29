@extends('layouts.common')
@section('title', $title)
@section('keywords', 'A,B,C')
@section('description', '説明文')
@section('pageCss')
    <link href="/css/page.css" rel="stylesheet">
@endsection
@include('layouts.head')
@include('layouts.header')
@section('content')
    <div>
        <table>
            <tr>
                <td><a href="/groups">グループ一覧</a></td>
            </tr>
            <tr>
                <td><a href="/users">社員一覧</a></td>
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