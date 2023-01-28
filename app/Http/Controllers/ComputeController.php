<?php

namespace App\Http\Controllers;

use App\Http\Requests\ComputeRequest;
use Illuminate\Http\Request;

class ComputeController extends Controller
{
    //

    public function index()
    {
        return view("compute.index");
    }

    public function compute(ComputeRequest $request)
    {
        $num = $request->number;
        $result = [];
        for( $i = 1; $i < $num; $i += 1)
        {
            array_push($result, $i.",".$i*$i);
        }

        return view("compute.result", ["result" => $result]);
    }

}
