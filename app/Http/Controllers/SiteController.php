<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class SiteController extends Controller {

	public function index()
    {
        return View('site.index');
    }

    public function about()
    {
        return View('site.about');
    }

    public function blog()
    {
        return View('site.blog');
    }

    public function contact()
    {
        return View('site.contact');
    }

}
