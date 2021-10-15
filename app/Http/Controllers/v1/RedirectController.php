<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\v1\Link;


class RedirectController extends Controller
{
    public function redirect(Link $link){

        return Redirect::to($link->name);
    }
}
