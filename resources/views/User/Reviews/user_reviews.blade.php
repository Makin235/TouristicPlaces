<?php
use Illuminate\Support\Facades\Route;
$settings = \App\Http\Controllers\User\MainController::getSetting();
$parentCategories = \App\Http\Controllers\User\MainController::categoryList();
?>

@extends('layouts.main')

@section('title', $settings->title . ' | My Reviews')

@section('content')
<div class="container">
    <div class="row myProfile"><br><br>
        <div class="col-md-3">
            @include('User._user_menu')
        </div><br><br>
        <div class="col-md-9">
            <div class="myProfile-content">
                <div class="row mb-2 align-items-center" style="text-align:center;">
                    <h3>My Reviews</h3>
                </div>
                @include('User.message')
                <table class="table table-striped table-bordered dataTable" role="grid"
                       aria-describedby="zero_config_info">
                    <thead>
                    <tr role="row">
                        <th><b>ID</b></th>
                        <th><b>Place</b></th>
                        <th><b>Subject</b></th>
                        <th><b>Review</b></th>
                        <th><b>Rate</b></th>
                        <th><b>Status</b></th>
                        <th><b>Date</b></th>
                        <th><b>Delete</b></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($reviews as $rs)
                    <tr role="row" class="odd">
                        <td>{{$rs->place->id}}</td>
                        <td><a
                                href="{{route('place_detail', ['id'=>$rs->place->id, 'slug'=>$rs->place->slug])}}">{{$rs->place->title}}</a>
                        </td>
                        <td>{{$rs->subject}}</td>
                        <td>{{$rs->review}}</td>
                        <td>{{$rs->rate}}</td>
                        <td>{{$rs->status}}</td>
                        <td>{{$rs->created_at}}</td>
                        <td><a href="{{route('user_review_delete', ['id'=>$rs->id])}}"
                               onclick="return confirm('Do you want to delete?')" class="me-2 mdi mdi-delete"><i
                                    class="glyphicon glyphicon-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
