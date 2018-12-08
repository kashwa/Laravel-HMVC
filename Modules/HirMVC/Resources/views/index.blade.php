@extends('hirmvc::layouts.master')

@section('content')
    <h3>This is Modularization in laravel</h3>

    <strong>Names: </strong>
    <br>
    @foreach($users as $user)
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        {{$user->name}}
        <br>
    @endforeach
    <hr>
    @foreach($posts as $post)
        <strong>Title is: </strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        {{$post->title}}
        <br>
        <strong>Body is: </strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        {{$post->body}}
    @endforeach
@stop
