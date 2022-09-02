<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consultant;

class ConsultantControl extends Controller
{
    public function programeaza(Request $request)
    {
        $cons = new Consultant();
        $cons->nume    = $request->nume;
        $cons->prenume = $request->prenume;
        $cons->date    = $request->program;

        $cons->save();
        return response()->json(['success'=>'Datele adaugate cu succes.']);
    }
}
