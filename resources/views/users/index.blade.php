@section('title', $title)
@extends('layouts.app')
@section('content')
<div class="container">
    {{-- <h1>{{ $title }}</h1> --}}
    <div class="table-responsive">
        <button><a href="{{ url('users/create') }}">ユーザ作成</a></button>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>{{ __('ID') }}</th>
                    <th>{{ __('Name') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->user_id }}</td>
                        <td><a href="{{ url('users/' . $user->user_id) }}">{{ $user->first_name . $user->last_name }}</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection