<?php
$settings = \App\Http\Controllers\User\MainController::getSetting();
$mostVisited = \App\Http\Controllers\User\MainController::mostVisitedAttractions();
$towers = \App\Http\Controllers\User\MainController::towers();
?>
<footer>
    <div id="footer">
        <div class="container">
            <div class="row row-bottom-padded-md">
                <div class="col-md-3 col-sm-3 col-xs-12 fh5co-footer-link">
                    <h3>Top Museums</h3>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 fh5co-footer-link">
                    <h3>Top Towers</h3>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 fh5co-footer-link">
                    <h3>Contact</h3>
                    <strong>Company: </strong>
                    <br>
                    <strong>Address: </strong>
                    <br>
                    <strong>Phone: </strong>
                    <br>
                    <strong>Fax: </strong>
                    <br>
                    <strong>Email : </strong>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <p class="fh5co-social-icons">
                        <a href="" target="_blank"><i class="icon-twitter2"></i></a>
                        <a href="" target="_blank"><i class="icon-facebook2"></i></a>
                        <a href="" target="_blank"><i class="icon-instagram"></i></a>
                        <a href="" target="_blank"><i class="icon-youtube"></i></a>
                    </p>
                    <p>&copy; Copyright 2022 <i class="icon-heart3"></i> Makin, All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<!-- END fh5co-page -->
</div>
<!-- END fh5co-wrapper -->
<!-- jQuery -->
<script src="{{asset('assets')}}/js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="{{asset('assets')}}/js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="{{asset('assets')}}/js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="{{asset('assets')}}/js/jquery.waypoints.min.js"></script>
<script src="{{asset('assets')}}/js/sticky.js"></script>

<!-- Stellar -->
<script src="{{asset('assets')}}/js/jquery.stellar.min.js"></script>
<!-- Superfish -->
<script src="{{asset('assets')}}/js/hoverIntent.js"></script>
<script src="{{asset('assets')}}/js/superfish.js"></script>
<!-- Magnific Popup -->
<script src="{{asset('assets')}}/js/jquery.magnific-popup.min.js"></script>
<script src="{{asset('assets')}}/js/magnific-popup-options.js"></script>
<!-- Date Picker -->
<script src="{{asset('assets')}}/js/bootstrap-datepicker.min.js"></script>
<!-- CS Select -->
<script src="{{asset('assets')}}/js/classie.js"></script>
<script src="{{asset('assets')}}/js/selectFx.js"></script>

<!-- Main JS -->
<script src="{{asset('assets')}}/js/main.js"></script>
