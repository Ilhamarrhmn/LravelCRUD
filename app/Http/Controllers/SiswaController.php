<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Siswa;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $siswas = Siswa::all();
        // return view('index', ['Siswa' => $siswas]);
        if ($request->has('search')) {
            $siswas = DB::table('Siswa')->where('nama', 'like', $request->get('search'))->get();
            return view('/index')->with('Siswa', $siswas);
        } else {
        $Siswa = DB::table('siswas')->paginate(10);
        return view('index',['siswas' => $Siswa]);
        }
    }

    // public function cari(Request $request)
	// {
	// 	// menangkap data pencarian
	// 	$cari = $request->cari;
 
    // 		// mengambil data dari table pegawai sesuai pencarian data
	// 	$Siswa = DB::table('siswas')
	// 	->where('nama','like',"%".$cari."%")
	// 	->paginate();
 
    // 		// mengirim data pegawai ke view index
	// 	return view('index',['siswas' => $Siswa]);
	// }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('siswas')->insert([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan
        ]);
        return redirect('/');
        // Siswa::create($request->all());
        // return redirect('/index')->with('msg', 'Data berhasil di simpan!');
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
    public function edit($id)
    {
        // $siswas = Siswa::find($id);
        // return view('edit', ['Siswa' => $siswas]);

        $siswas = DB::table('siswas')->where('id', $id)->get();
        return view('edit')->with('siswas', $siswas);

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
        // $siswas = Siswa::find($id);
        // $siswas->update([
        //     'nis' => $request->nis,
        //     'nama' => $request->nama,
        //     'kelas' => $request->kelas,
        //     'jurusan' => $request->jurusan
        // ]);
        // return redirect('/');

        DB::table('siswas')->where('id', $request->id)->update([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan
        ]);
        return redirect(url('/'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('siswas')->where('id', $id)->delete();
        return redirect(url('/'));
    }
}
