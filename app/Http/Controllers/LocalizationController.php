<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocalizationController extends Controller
{
    public function setLang($locale){
    	App::setLocale($locale);  //setLocaleméthode fournie par la Appfaçade -> setLocal définie le nom locale ar/en/fr
    	Session::put("locale",$locale);
    	return redirect()->back();
    }
}
