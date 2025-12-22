<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CloudDigitalController extends Controller
{
    public function cloudDigital()
    {
        return view('cloud-digital-solutions');
    }
}
