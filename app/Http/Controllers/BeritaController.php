<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Str;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = Berita::all()->sortByDesc('tanggal_berita');
        return view('execute.list-berita', compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'isi' => 'required',
            'tanggal_berita' => 'required',
            'image' => 'image|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('foto-berita');
        }

        // $validatedData['user_id'] = Auth::user()->id;
        // $validatedData['excerpt'] = Str::limit(strip_tags($request->isi), 200);

        Berita::create($validatedData);
        return redirect('/list-berita')->with('success', 'Berita berhasil ditambahkan');
    }

    public function tambah(Request $request)
    {
        return view('execute.tambah-berita');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(Berita $berita)
    {
        $berita = Berita::all();

        return view('main.home', compact('berita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $berita = Berita::find($id);
        return view('execute.form-berita', compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = Berita::find($id);

        if ($request->file != '') {
            $path = public_path() . 'foto-berita';

            //code for remove old file
            if ($validatedData->file != ''  && $validatedData->file != null) {
                $file_old = $path . $validatedData->file;
                unlink($file_old);
            }

            if ($request->file('image')) {
                $validatedData['image'] = $request->file('image')->store('foto-berita');
            }

            $validatedData['user_id'] = Auth::user()->id;
            $validatedData['excerpt'] = Str::limit(strip_tags($request->isi), 200);

            Berita::create($validatedData);

            //upload new file
            $file = $request->file;
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);
        }

        $validatedData->update($request->all());
        //for update in table
        $validatedData->update(['file' => $filename]);
        return redirect('/list-berita')->with('success', 'Berita berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita = Berita::find($id);
        $berita->delete($berita);
        return redirect('/list-berita')->with('success', 'Berita berhasil dihapus');
    }
}
