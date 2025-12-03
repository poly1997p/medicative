<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.index');
    }

    public function departmentOne(){
        return view('frontend.department-one');
    }

    public function departmentTwo(){
        return view('frontend.department-two');
    }

    public function departmentThree(){
        return view('frontend.department-three');
    }

    public function departmentFour(){
        return view('frontend.department-four');
    }

    public function departmentFive(){
        return view('frontend.department-five');
    }

    public function departmentSix(){
        return view('frontend.department-six');
    }

    public function doctorsteam(){
        return view('frontend.doctors-team');
    }


    public function doctorsDetails(){
        return view('frontend.doctors-details');
    }

    public function shopGrid(){
        return view('frontend.shop-grid');
    }

    public function shopList(){
        return view('frontend.shop-list');
    }

    public function shopSingle(){
        return view('frontend.shop-single');
    }

    public function shopCart(){
        return view('frontend.shop-cart');
    }

    public function shopCheckout(){
        return view('frontend.shop-checkout');
    }

    public function testimonials(){
        return view('frontend.testimonials');
    }
   
}
