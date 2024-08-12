<?php

namespace App\Http\Controllers;

use App\Models\Documentation;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class FrontController extends Controller
{
    //
    public function index()
    {
        $documentations = Documentation::orderBy('id', 'desc')->take(8)->get();
        return view('front.index', [
            'documentations' => $documentations
        ]);
    }

    public function documentation()
    {
        $documentationpages = Documentation::orderBy('id', 'desc')->latest()->paginate(8);
        return view('front.dokumentasi.index', [
            'documentationpages' => $documentationpages
        ]);
    }

    public function details(Documentation $documentation)
    {
        return view('front.dokumentasi.details', [
            'documentation' => $documentation
        ]);
    }
}
