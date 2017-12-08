<?php
/**
 * Created by PhpStorm.
 * User: Mv
 * Date: 12/7/2017
 * Time: 5:56 PM
 */
namespace App\Http\Controllers\Website;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
class WebsiteController extends Controller
{
    function index(){
        Return View::make('website.home');
    }
    public function theme_home(){
        Return View::make('website.index');
    }

}