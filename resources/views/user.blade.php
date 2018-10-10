@extends('layouts.app')
@section('title', $title)
@section('content')
    <table>
        <tr>
            <th>名前</th>
            <th>生年月日</th>
            <th>入社日</th>
            <th>勤続年数</th>
            <th>言語</th>
            <th>DataBase</th>
            <th>興味のある分野</th>
            <th>ヒアリング情報</th>
            <th>コメント</th>
        </tr>
        <tr>
            <td>{{ $userInfo['user_name'] }}</td>
            <td>{{ $userInfo['birthday'] }}</td>
            <td>{{ $userInfo['joined'] }}</td>
            <td>{{ $userInfo['working_year'] }}</td>
            <td>{{ $userInfo['like_program'] }}</td>
            <td>{{ $userInfo['like_database'] }}</td>
            <td>{{ $userInfo['interested'] }}</td>
            <td>{{ $userInfo['listening'] }}</td>
            <td>{{ $userInfo['comment'] }}</td>
        </tr>
    </table>
@endsection