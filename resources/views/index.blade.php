@extends('layouts.app')
@section('title', $title)
@section('content')
    <div>
        <ul>
            <li><a href ="/users"><h2>user</h2></a></li>
            <li><a href ="/users/create"><h2>User Create</h2></a></li>
            <li><a href ="/work"><h2>work</h2></a></li>
        </ul>
    </div>
@endsection