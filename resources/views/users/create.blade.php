@section('title', $title)
@extends('layouts.app')
@section('content')
<div class="container">
    <h1>{{ $title }}</h1>
    <form action="{{ url('users') }}" method="post">
        @csrf {{-- CSRF保護 --}}
        @method('POST') {{-- 疑似フォームメソッド --}}
        <div class="form-group">
            <label for="first_name">苗字</label>
            <input id="first_name" type="text" class="form-control" name="first_name" required autofocus>
            <label for="last_name">名前</label>
            <input id="last_name" type="text" class="form-control" name="last_name" required autofocus>
        </div>
        <div class="form-group">
            <label for="email">E-Mail</label>
            <input id="email" type="email" class="form-control" name="email" required>
        </div>
        <div class="form-group">
            <label for="user_type">User Type</label>
            <input id="user_type" type="user_type" class="form-control" name="user_type" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input id="password" type="password" class="form-control" name="password" required>
        </div>
        <div class="form-group">
            <label for="password_confirmation">Confirm Password</label>
            <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection