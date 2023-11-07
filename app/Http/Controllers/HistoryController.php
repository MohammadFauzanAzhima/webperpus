<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function displayhistory()
    {
        return view('history', [
            "title" => "History",
        ]);
    }
}
