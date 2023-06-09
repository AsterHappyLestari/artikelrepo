<?php
 
namespace App\Http\Controllers;
use App\Mahasiswa;
use DB;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
 
class MahasiswaController extends Controller
{
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function index(){
       
		$data = DB::table('tb_mahasiswa')->get();
        return view('mahasiswa.index',compact('data'));
	}

	public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
	public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required',
            'nama_mhs' => 'required',
			'jenisk' => 'required',
			'notelp_mhs' => 'required',
			'alamat_mhs' => 'required',
			'email' => 'required',
			'password' => 'required',
			'prodi' => 'required',
        ]);
        Mahasiswa::create($request->all());
        return redirect()->route('mahasiswa.index')->with('success','Data berhasil di input');
    }

    public function edit($id_mhs){
        $mhs = Mahasiswa::findOrFail($id_mhs);
        return view('mahasiswa.edit', compact('mhs'));
    }

    public function update(Request $request, $id_mhs)
    {
        $mhs = Mahasiswa::findorfail($id_mhs);
        $mhs->nim = $request->nim;
        $mhs->nama_mhs = $request->nama_mhs;
        $mhs->jenisk = $request->jenisk;
        $mhs->notelp_mhs = $request->notelp_mhs;
        $mhs->alamat_mhs = $request->alamat_mhs;
        $mhs->email = $request->email;
        $mhs->prodi = $request->prodi;

        if($request->password){
            $password = \Hash::make($request->password);
        }
        else
        {
            $password = $mhs->password;
        }
        $mhs->password = $password;
        $mhs->save();
        return redirect()->route('mahasiswa.index')->with('update', 'Data Berhasil Update');
    }

    public function destroy($id_mhs){
        $mhs = Mahasiswa::findOrFail($id_mhs);

        $mhs->delete();
        return back()->with('success', 'Data Berhasil Dihapus');
    }

    public function show($id_mhs)
    {
        $mahasiswa = Mahasiswa::find($id_mhs);
        return view('mahasiswa.show',compact('mahasiswa'));
    }

}