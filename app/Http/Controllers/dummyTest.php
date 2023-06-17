<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dummyTest extends Controller
{
    //
    function getDummyData() {
        return ["name" => "dummy"];
    }
}
