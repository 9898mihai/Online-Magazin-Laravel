<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function update(Request $request, About $about)
    {
        $params = $request->all();
    
        $about->update($params);
        return redirect()->back()->with('message', 'Edited !!!');
    }
}