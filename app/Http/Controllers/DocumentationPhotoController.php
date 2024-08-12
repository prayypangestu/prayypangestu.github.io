<?php

namespace App\Http\Controllers;

use App\Models\Documentation;
use App\Models\DocumentationPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DocumentationPhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Documentation $documentation)
    {
        //
        return view('admin.documentation_photos.create', [
            'documentation' => $documentation
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Documentation $documentation)
    {
        //
        $validated = $request->validate(([
            'photo' => 'required|image|mimes:png,jpg,jpeg|max:2048',
        ]));

        DB::beginTransaction();

        try {
            if ($request->hasFile('photo')) {
                $path = $request->file('photo')->store('documentation_photo', 'public');
                $validated['photo'] = $path;
            }
            $validated['documentation_id'] = $documentation->id;

            $newDocumentation = DocumentationPhoto::create($validated);

            DB::commit();

            return redirect()->back()->with('success', 'Documentation Photo Added Succesfully');
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->back()->with('error', 'System Error' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(DocumentationPhoto $documentationPhoto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DocumentationPhoto $documentationPhoto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DocumentationPhoto $documentationPhoto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DocumentationPhoto $documentationPhoto)
    {
        //
        try {
            $documentationPhoto->delete();
            return redirect()->back()->with('success', 'photo deleted sucessfully');
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->back()->with('error', 'System Error' . $e->getMessage());
        }
    }
}
