@extends('layouts.main')


@section('title', 'Makin | Welcome!')

@section('description')
Description
@endsection

@section('keywords', 'keywords')

<div class="pb-100" style=" margin-top:150px">
    @include('User._slider')
</div>
<div id="fh5co-blog-section" class="fh5co-section-gray">
    <div style="text-align:center">
        <a class="btn btn-primary" href="">Add a place</a>
    </div>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                <h3>The Most Visited Tourist Attractions</h3>
                <p></p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row row-bottom-padded-md">
            <div class="col-lg-12">
                <div id="carousel" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="item active carousel-item">
                            <div class="row">
                            </div>
                        </div>
                        <div class="item carousel-item">
                            <div class="row">
                            </div>
                        </div>
                    </div>
                    <a data-slide="prev" href="#carousel" class="left carousel-control"
                       style="margin-top:281px; height:35px; width: 30px;">&#x2039;</a>
                    <a data-slide="next" href="#carousel" class="right carousel-control"
                       style="margin-top:281px; height:35px; width: 30px;">&#x203A;</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                <h3>Best Places For Holidays</h3>
                <p></p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row row-bottom-padded-md">
            <div class="col-lg-12">
                <div id="carousel" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="item active carousel-item">
                            <div class="row">
                            </div>
                        </div>
                    </div>
                    <a data-slide="prev" href="#carousel" class="left carousel-control"
                       style="margin-top:281px; height:35px; width: 30px;">&#x2039;</a>
                    <a data-slide="next" href="#carousel" class="right carousel-control"
                       style="margin-top:281px; height:35px; width: 30px;">&#x203A;</a>
                </div>
            </div>
        </div>
    </div>
    <div id="fh5co-destination" style="padding:100px;">
        <div class="tour-fluid">
            <div class="row">
                <div class="col-md-12">
                    <ul id="fh5co-destination-list" class="animate-box fadeInUp animated">
                        <li class="one-third text-center"
                        <a href="">
                            <div class="case-studies-summary">
                                <h2>Los Angeles</h2>
                            </div>
                        </a>
                        </li>
                        <li class="one-third text-center"
                        <a href="">
                            <div class="case-studies-summary">
                                <h2>Istanbul</h2>
                            </div>
                        </a>
                        </li>
                        <li class="one-third text-center"
                        <a href="">
                            <div class="case-studies-summary">
                                <h2>Rome</h2>
                            </div>
                        </a>
                        </li>

                        <li class="one-third text-center"
                        <a href="">
                            <div class="case-studies-summary">
                                <h2>Shangai</h2>
                            </div>
                        </a>
                        </li>
                        <li class="one-third text-center">
                            <div class="title-bg">
                                <div class="case-studies-summary">
                                    <h2>Most Popular Destinations</h2>
                                </div>
                            </div>
                        </li>
                        <li class="one-third text-center"
                        <a href="">
                            <div class="case-studies-summary">
                                <h2>Paris</h2>
                            </div>
                        </a>
                        </li>
                        <li class="one-third text-center"
                        <a href="">
                            <div class="case-studies-summary">
                                <h2>Gize</h2>
                            </div>
                        </a>
                        </li>
                        <li class="one-third text-center"
                        <a href="">
                            <div class="case-studies-summary">
                                <h2>Kigali</h2>
                            </div>
                        </a>
                        </li>
                        <li class="one-third text-center"
                        <a href="">
                            <div class="case-studies-summary">
                                <h2>Dubai</h2>
                            </div>
                        </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <div style="text-align:center">
        <a class="btn btn-primary" href="">Add a place</a>
    </div>
</div>
