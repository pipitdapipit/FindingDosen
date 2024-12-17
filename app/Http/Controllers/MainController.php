<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function dashboard() {
        return view('dashboard');
    }

    public function search_page(Request $req){
        $dosens = Dosen::all();

        $option = $req->query('option');
        $search = $req->query('search');

        $temp = Dosen::where('name', 'like', "%{$search}%");

        if($option !== 'All') {
            $temp->where('course', 'like', "%{$option}%");
        }

        $dosens = $temp->get();

        return view('search_page', compact('dosens'));
    }

    public function view_lecture($id){
        $lectures = null;
        $lecture = Dosen::findOrFail($id);

        return view('lecture', compact('lectures', 'lecture'));
    }
}
