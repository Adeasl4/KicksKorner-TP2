<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
 public function index(){

 return view('frontend.home');
 }

 public function about(){

 return view('frontend.about');
 }

  public function rate(){

  return view('frontend.rate');
  }

    public function checkout(){

    return view('frontend.checkout');
    }

    public function kids(){

        return view('frontend.kids');
        }
        public function mens(){

                return view('frontend.mens');
                }

        public function womens(){

                        return view('frontend.womens');
                        }
 public function contact(){

  return view('frontend.contact');
                         }

 public function welcome(){

 return view('frontend.welcome');
}
 //public function dashboard(){

// return view('frontend.dashboard');
//}
 //public function navigationMenu(){

 //return view('frontend.navigation-menu');
//}





}

