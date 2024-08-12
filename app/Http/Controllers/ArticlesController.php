<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use illuminate\support\Str;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('admin.articles.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = Categories::orderBy('id', 'desc')->get();
        return view('admin.articles.create', [
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Categories $categories)
    {
        //
        // dd($request->all());
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'cover' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'kategori_id' => 'required|integer',
            'konten' => 'required|string|max:65535'
        ]);

        DB::beginTransaction();

        try{
            if ($request->hasFile('cover')) {
                $path = $request->file('cover')->store('articles', 'public');
                //menyimpan cover dengan addressnya bukan gambarnya
                $validated['cover'] = $path;
            }
            $validated['kategori_id'] = $categories->id;
            $validated['slug'] = Str::slug($request->judul);

            $newArticles = Articles::create($validated);

            DB::commit();

            return redirect()->route('admin.articles.index')->with('success', 'Dokumentasi berhasil ditambahkan!');
        }
        catch(\Exception $e) {
            DB::rollBack();

            return redirect()->back()->with('error', 'data belum masuk'.$e->getMessage());

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Articles $articles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Articles $articles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Articles $articles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Articles $articles)
    {
        //
    }
}
