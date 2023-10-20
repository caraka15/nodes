<?php

namespace App\Http\Controllers;

use App\Models\Chaind;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class AdminChaindController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.chainds.index', [
            'chainds' => Chaind::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.chainds.create', [
            'chainds' => Chaind::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validateData = $request->validate([
            'logo' => 'required|image|file|max:1024',
            'type' => 'required',
            'name' => 'required|max:20',
            'slug' => 'required|unique:chainds',
            'guide_link' => 'required|file',
            'rpc_link' => 'required',
            'stake_link' => 'required'
        ]);

        if ($request->file('logo')) {
            $validateData['logo'] = $request->file('logo')->store('logo-chaind');
        }

        if ($request->file('guide_link')) {
            $fileExtension = $request->file('guide_link')->getClientOriginalExtension();
            $fileName = $request->slug . '.md';
            $filePath = $request->file('guide_link')->storeAs('guide-chaind', $fileName);
            $validateData['guide_link'] = $filePath;
        }
        
        Chaind::create($validateData);

        return redirect('/dashboard/chainds')->with('success', 'New post has been added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Chaind $chaind)
    {
        return view('dashboard.posts.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chaind $chaind)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Chaind $chaind)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chaind $chaind)
    {
        if ($chaind->logo) {
            Storage::delete($chaind->logo);
        }

        if ($chaind->Guide_link) {
            Storage::delete($chaind->guide_link);
        }
        Post::destroy($chaind->id);

        return redirect('/dashboard/chainds')->with('success', 'Post has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Chaind::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);

    }
}