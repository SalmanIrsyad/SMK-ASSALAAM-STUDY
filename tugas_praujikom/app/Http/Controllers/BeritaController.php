<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use Alert;
use App\Models\Berita;
use Validator;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.berita.index', [
            'Berita' => Berita::latest()->get(),
            // 'mereks' => Merek::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.berita.create', [
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            // 'foto' => 'required|image',
            'judul_berita' => 'required|image',
            'isi_berita' => 'required|image',
        ];

        $messages = [
          
            'judul_berita.required' => 'Judul harus di isi!',
            'isi_berita.required' => 'Isi berita harus di isi!',
            ];

            $validation = Validator::make($request->all(), $rules, $messages);
            if ($validation->fails()) {
                // Alert::error('data yang anda input ada kesalahan', 'Oops!')->persistent("Ok");
                // return back()->withErrors($validation)->withInput();
            }

            $berita = new Berita();
       
        $berita->judul_berita = $request->judul_berita;
        $berita->isi_berita = $request->isi_berita;

        $berita->save();

        return redirect('/admin/berita');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Berita $berita)
    {
        return view('/admin/berita', compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            ' ' => 'required|unique:berita',
        ]);
        $berita->judul_berita = $request->judul_berita;
        $berita->isi_berita = $request->isi_berita;
        $berita->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        $berita->delete();
        // Alert::success('Done', 'Data berhasil dihapus');
        return redirect('/admin/berita');
    }
}
