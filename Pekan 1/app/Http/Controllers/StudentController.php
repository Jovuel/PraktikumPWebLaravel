<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function lingkaran($r = 3){
        $luas = 3.14 * $r & $r;
        $keliling = 3.4 * 2 * $r;

        return "Luasnya adalah " . $luas . " dengan keliling " . $keliling;
    }

}
