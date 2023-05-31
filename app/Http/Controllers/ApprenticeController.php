<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\apprentice;

class ApprenticeController extends Controller
{
    public function apprentices(){
        $apprentices = Apprentice::get();
        return view('apprentices',['apprentices'=>$apprentices]);
    }
}
