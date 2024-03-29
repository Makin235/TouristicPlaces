<?php
$settings = \App\Http\Controllers\User\MainController::getSetting();
?>

@extends('layouts.main')

@section('title', $settings->title . ' | Our References')

@section('description')
{{$settings->description}}
@endsection

@section('keywords', $settings->keywords)

@section('content')
<div id="fh5co-blog-section" class="fh5co-section-gray" style="margin-top:150px">
    <div class="container">
        <div class="row" style="margin-top:50px;">
            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                <h3>Our References</h3>
                <p></p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row" style="border-bottom:none;">
            <div class="col-md-12 text-center animate-box">
                <p>{!! $settings->references !!}</p>
            </div>
        </div>
    </div>
</div>
@endsection
