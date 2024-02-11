<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public static function categoryList() {

    }

    public static function getSetting() {

    }

    public static function mostVisitedAttractions() {

    }

    public static function hotels() {

    }

    public static function towers() {

    }

    public static function countReviews() {

    }

    public static function countLikes() {

    }

    public static function checkLike() {

    }

    public static function avgReviews() {

    }

    public function main() {
        return view('user.main');
    }

    public function about() {
        return view('user.about');
    }

    public function contact() {
        return view('user.contact_us');
    }

    public function faq() {
        return view('user.faq');
    }

    public function references() {
        return view('user.references');
    }

    public function faqs(){
        return view('user.faqs');
    }

    public function signin() {
        return view('user.signin');
    }

    public function signup() {
        return view('user.signup');
    }

    public function profile_show() {
        return view('user.user_profile');
    }

    public function getplace() {

    }

    public function sendmessage() {

    }

    public function placeslist() {
        return view('user.search_places');
    }

    public function place_detail() {
        return view('user.place_detail');
    }

    public function destination_places() {
        return view('user.destination_places');
    }
    public function category_places() {
        return view('user.Category.category_places');
    }

    public function place_like() {

    }
}
