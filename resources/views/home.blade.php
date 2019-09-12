@extends('adminlte::page')

@section('title', 'LaravelAPP')

@section('content_header')
    <h1>Dashboard</h1>

    @role('admin') 
    <h2>Admin Dashboard</h2>
    @endrole

    @role('student') 
    <h2>Student Dashboard</h2>
    @endrole

@stop

@section('content')
    <p>You are logged in!</p>
@stop

