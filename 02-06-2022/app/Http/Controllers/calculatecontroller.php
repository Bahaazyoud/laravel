<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calculatecontroller extends Controller
{
    public function index(Request $request) {
        $firstnum = $request->input('fnum');
        $secondnum = $request->input('snum');
        $operatorr = $request->input('operator');
        $result = 0;
        if ($operatorr == '+') {
            $result = $firstnum + $secondnum;
        } elseif ($operatorr == '-') {
            $result = $firstnum - $secondnum;
        } elseif ($operatorr == '*') {
            $result = $firstnum * $secondnum;
        } elseif ($operatorr == '/') {
            $result = $firstnum / $secondnum;
        } else {
            $result = "majd";
        }
        echo $result;
    }}
