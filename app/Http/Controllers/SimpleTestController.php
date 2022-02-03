<?php

namespace App\Http\Controllers;

use App\Mail\SendSubmittedData;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SimpleTestController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index ()
    {
        return view ( 'test' );
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function store ( Request $request )
    {
        return response () -> json ( $request -> all (), 200 );
        // Handle the data here
    }
}
