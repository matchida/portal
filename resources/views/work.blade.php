@extends('layouts.app')
@section('title', $title)
@section('content')
    <table>
        <tr>
            <th>顧客</th>
            <th>案件名</th>
            <th>現場</th>
            <th>勤務開始時間</th>
            <th>勤務終了時間</th>
            <th>休憩開始時間</th>
            <th>休憩終了時間</th>
            <th>契約開始日</th>
            <th>契約終了日</th>
            <th>単価</th>
            <th>ツール</th>
        </tr>
        <tr>
            <td>{{ $workInfo['vendor'] }}</td>
            <td>{{ $workInfo['anken'] }}</td>
            <td>{{ $workInfo['place'] }}</td>
            <td>{{ $workInfo['start_time'] }}</td>
            <td>{{ $workInfo['end_time'] }}</td>
            <td>{{ $workInfo['start_brake_time'] }}</td>
            <td>{{ $workInfo['end_brake_time'] }}</td>
            <td>{{ $workInfo['start_agreement'] }}</td>
            <td>{{ $workInfo['end_agreement'] }}</td>
            <td>{{ $workInfo['unit_price'] }}</td>
            <td>{{ $workInfo['tool'] }}</td>
        </tr>
    </table>
@endsection