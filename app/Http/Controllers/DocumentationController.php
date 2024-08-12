<?php

namespace App\Http\Controllers;

use App\Models\Documentation;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use illuminate\support\Str;

class DocumentationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $documentations = Documentation::orderBy('id', 'desc')->latest()->paginate(6);
        return view('admin.documentations.index', [
            'documentations' => $documentations
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.documentations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'cover' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'konten' => 'required|string|max:65535'
        ]);

        DB::beginTransaction();

        try{
            if ($request->hasFile('cover')) {
                $path = $request->file('cover')->store('documentations', 'public');
                //menyimpan cover dengan addressnya bukan gambarnya
                $validated['cover'] = $path;
            }
            $validated['slug'] = Str::slug($request->judul);

            $newDocumentation = Documentation::create($validated);

            DB::commit();

            return redirect()->route('admin.documentations.index')->with('success', 'Dokumentasi berhasil ditambahkan!');
        }
        catch(\Exception $e) {
            DB::rollBack();

            return redirect()->back()->with('error', 'data belum masuk'.$e->getMessage());

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Documentation $documentation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Documentation $documentation)
    {
        //
        return view('admin.documentations.edit', [
            'documentation' => $documentation
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Documentation $documentation)
    {
        //
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'cover' => 'sometimes|image|mimes:png,jpg,jpeg|max:2048',
            'konten' => 'required|string|max:65535'
        ]);

        DB::beginTransaction();

        try{
            if ($request->hasFile('cover')) {
                $path = $request->file('cover')->store('documentations', 'public');
                //menyimpan cover dengan addressnya bukan gambarnya
                $validated['cover'] = $path;
            }
            $validated['slug'] = Str::slug($request->judul);

            $documentation->update($validated);

            DB::commit();

            return redirect()->route('admin.documentations.index')->with('success', 'Dokumentasi berhasil diperbarui!');
        }
        catch(\Exception $e) {
            DB::rollBack();

            return redirect()->back()->with('error', 'data belum masuk'.$e->getMessage());

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Documentation $documentation)
    {
        //
        try{
            $documentation->delete();
            return redirect()->back()->with('success', 'data sudah dihapus');
        }
        catch(\Exception $e) {
            DB::rollBack();

            return redirect()->back()->with('error', 'data belum masuk'.$e->getMessage());

        }
    }
}
