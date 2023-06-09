<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Dosen;
use DB;

 
class DosenController extends Controller
{
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function index(){

		$data = DB::table('tb_dosen')->get();
        return view('dosen.index',compact('data'));
	}

	public function create()
    {
        return view('dosen.create');
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
            'nip' => 'required',
            'nama_dosen' => 'required',
			'jenisk' => 'required',
			'notelp_dosen' => 'required',
			'alamat_dosen' => 'required',
			'email' => 'required',
			'password' => 'required',
        ]);
        Dosen::create($request->all());
        return redirect()->route('dosen.index')->with('success','Data berhasil di input');
    }

    public function edit($id_dosen){
        $dosen = Dosen::findorfail($id_dosen);
        return view('dosen.edit', compact('dosen'));
    }

    public function update(Request $request, $id_dosen)
    {
        $dosen = Dosen::findorfail($id_dosen);
        $dosen->nip = $request->nip;
        $dosen->nama_dosen = $request->nama_dosen;
        $dosen->jenisk = $request->jenisk;
        $dosen->notelp_dosen = $request->notelp_dosen;
        $dosen->alamat_dosen = $request->alamat_dosen;
        $dosen->email = $request->email;
   
        if($request->password){
            $password = \Hash::make($request->password);

        }
        else
        {
            $password = $dosen->password;
        }
        $dosen->password = $password;
        $dosen->save();
        return redirect()->route('dosen.index')->with('update', 'Data Berhasil Update');
    }

    public function show($id_dosen)
    {
        $dos = Dosen::find($id_dosen);
        return view('dosen.show',compact('dos'));
    }

    public function destroy($id_dosen){
        $dos = Dosen::findOrFail($id_dosen);
        $dos->delete();
        return back()->with('success', 'Data Berhasil Dihapus');
    }

}