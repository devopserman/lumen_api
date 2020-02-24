<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    /**
     * Currency list
     *
     * @return Response
     */
    public function index()
    {
        $currency = Currency::All();
        return response()->json(array('data' => $currency));
    }

    /**
     * Show single currency as ID
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $currency = Currency::findOrFail($id);
        return response()->json(array('data' => $currency));
    }
}
