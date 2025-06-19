<?php


namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Docent;

class DocentController extends Controller
{
    public function index()
    {
        return Docent::with('vakken')->orderBy('naam')->get();
    }
}

?>
