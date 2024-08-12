<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categories = Categories::orderBy('id', 'desc')->latest()->paginate(6);
        return view('admin.categories.index', [
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd($request->all());
        $validated = $request->validate([
            'nama' => 'required|string|max:255'
        ]);

        DB::beginTransaction();

        try{
            
            $newCategori = Categories::create($validated);

            DB::commit();

            return redirect()->route('admin.categories.index')->with('success', 'Dokumentasi berhasil ditambahkan!');
        }
        catch(\Exception $e) {
            DB::rollBack();

            return redirect()->back()->with('error', 'data belum masuk'.$e->getMessage());

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Categories $categories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categories $categories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categories $categories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categories $category)
    {
        //
        try {
            $category->delete();
            return redirect()->back()->with('success', 'photo deleted sucessfully');
        }
        catch (\Exception $e) {
            DB::rollBack();

            return redirect()->back()->with('error', 'System Error' . $e->getMessage());
        }
    }
}
