<?php
 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Jurnal;
use App\Kategori;
use DB;
use File;

class JurnalController extends Controller
{

	public function index(){
        // $data['title'] = 'List Jurnal';
        // $title = 'Jurnal';
		// $data = Jurnal::with('kategori')->paginate(5);

        $data = DB::table('tb_jurnal')->join('tb_kategori','tb_jurnal.kategori_id','=','tb_kategori.id_kategori')->paginate(5);
        
        return view('jurnal.index',compact('data'));
	}

	public function create(){
        $kat = Kategori::all();
		return view('jurnal.create',compact('kat'));
	}
 
	/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
	public function store(Request $request)
    {
        $this->validate($request,[
            'nama_penulis' => 'required',
            'kategori_id' => 'required',
            'judul' => 'required',
            'abstrak' => 'required',
            'katakunci' => 'required',
            'dokumen' => 'mimes:doc,docx,pdf',
            'referensi' => 'required',
            'tautan' => 'required'
        ]);

        $docName = $request->dokumen->getClientOriginalName() . '-' . time() . '.' . $request->dokumen->extension();
        $request->dokumen->move(public_path('upload'), $docName);

        Jurnal::create([
            'nama_penulis' =>$request->nama_penulis,
            'kategori_id' =>$request->kategori_id,
            'judul' =>$request->judul,
            'abstrak' =>$request->abstrak,
            'katakunci' =>$request->katakunci,
            'dokumen' =>$docName,
            'referensi' =>$request->referensi,
            'tautan' =>$request->tautan
        ]);
        
        return redirect()->route('jurnal.index')->with('success','Data berhasil di input');        
    }

    public function edit($id_jurnal){
        $kat = Kategori::all();
        $jn = Jurnal::findOrFail($id_jurnal);
        return view('jurnal.edit', compact('jn','kat'));
        
    }

    public function update(Request $request, $id_jurnal)
    {
        if($request->dokumen){

            $result = Jurnal::findOrFail($id_jurnal);
            if(File::exists(public_path('upload')."/".$result->dokumen)){
                File::delete(public_path('upload')."/".$result->dokumen);    
            }

            $docName = $request->dokumen->getClientOriginalName() . '-' . time() . '.' . $request->dokumen->extension();
            $request->dokumen->move(public_path('upload'), $docName);

            Jurnal::where('id_jurnal',$id_jurnal)->update([
                'nama_penulis' =>$request->nama_penulis,
                'kategori_id' =>$request->kategori_id,
                'judul' =>$request->judul,
                'abstrak' =>$request->abstrak,
                'katakunci' =>$request->katakunci,
                'dokumen' =>$docName,
                'referensi' =>$request->referensi,
                'tautan' =>$request->tautan
            ]);

        }else{
            Jurnal::where('id_jurnal',$id_jurnal)->update([
                'nama_penulis' =>$request->nama_penulis,
                'kategori_id' =>$request->kategori_id,
                'judul' =>$request->judul,
                'abstrak' =>$request->abstrak,
                'katakunci' =>$request->katakunci,
                'referensi' =>$request->referensi,
                'tautan' =>$request->tautan
            ]);
        }
        return redirect()->route('jurnal.index')->with('update', 'Data Berhasil Update');
    }

    public function show($id_jurnal)
    {
        $jurnal = Jurnal::find($id_jurnal);
        $kategori_name = $jurnal->kategori->name;
        return view('jurnal.show',compact('jurnal','kategori_name'));
    }

    public function download(Request $request){
        if(Storage::disk('public')->exists("upload/$request->dokumen")){
            $path = Storage::disk('public')->path("upload/$request->dokumen");
            $content = file_get_contents($path);
            return response($content)->withHeaders([
                'Content-Type' => mime_content_type($path)
            ]);
        }
        return redirect('/404');
    }

    public function destroy($id_jurnal){
        $jn = Jurnal::findOrFail($id_jurnal);

        //untuk menghapus file
        $result = Jurnal::findOrFail($id_jurnal);
            if(File::exists(public_path('upload')."/".$result->dokumen)){
                File::delete(public_path('upload')."/".$result->dokumen);    
            }

        $jn->delete();
        return back()->with('success', 'Data Berhasil Dihapus');
    }

    // public function search(Request $request){
    //     $cari=$request->cari;
    //     $data = Jurnal::where('judul','like','%'.$cari.'%')->paginate(5);
    //     return view('jurnal.index',compact('data'));
    // }
    
    public function indexmhs(){
        $datamhs = DB::table('tb_jurnal')->get();
        return view('halaman.halaman-satu',compact('datamhs'));
    }

    public function indexuser(){
        $datajn = DB::table('tb_jurnal')->join('tb_kategori','tb_jurnal.kategori_id','=','tb_kategori.id_kategori')->paginate(5);
        return view('halaman.halaman-dua',compact('datajn'));
    }

}