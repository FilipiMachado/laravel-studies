<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sclass;

class SclassController extends Controller
{
    public function Index()
    {
        $sclass = Sclass::latest()->get();
        return response()->json($sclass);

    } //end method
}