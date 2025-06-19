<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Vak;

class VakController extends Controller
{
    public function index()
    {
        return Vak::with('docent')->orderBy('naam')->get();
    }
}

?>