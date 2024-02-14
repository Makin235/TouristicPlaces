@extends('layouts.main')

@section('title', 'Welcome!')

@section('description')
Discover The Beauty of Chad
@endsection

@section('keywords', 'tourism, Chad, Zakouma, Ounianga')

@section('top')
@include('User._top')
@endsection

@section('content')
{{Route::currentRouteName()}}
@endsection
