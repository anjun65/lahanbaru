<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Request;
use App\Models\User;

use Illuminate\Support\Facades\Mail;
use illuminate\Support\Facades\Auth;

use App\Http\Requests\Admin\RequestRequest;
use Yajra\DataTables\Facades\DataTables;

use SimpleSoftwareIO\QrCode\Facades\QrCode;

class RequestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax())
        {
            $query = Request::query();
            return Datatables::of($query)
                ->addcolumn('action', function($item) {
                    return '
                        <div class="btn-group">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle mr-1 mb-1"
                                        type="button"
                                        data-toggle="dropdown">
                                        Aksi
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="' . route('request.edit', $item->id) . '">
                                        Sunting
                                    </a>
                                    <form action="'. route('request.destroy', $item->id) .'" method="POST">
                                        ' . method_field('delete') . csrf_field() .'    
                                        <button type="submit" class="dropdown-item text-danger">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    ';
                })
                ->rawColumns(['action'])
                ->make();
        }

        return view('pages.admin.request.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     return view('pages.admin.request.create');
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(RequestRequest $request)
    // {
        
    //     $data = $request->all();
    //     $data['password'] = bcrypt($request->password);
        

    //     Request::create($data);

    //     return redirect()->route('request.index');
    // }

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
        
        $item = Request::findOrFail($id);

        $qrcode = QrCode::generate(route('barcode-show', $id));

        return view('pages.admin.request.edit', [
            'item' => $item,
            'qrcode' => $qrcode,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RequestRequest $request, $id)
    {
        $catatan = $request->description;
        $status = $request->status;
        
        $vps = User::where('roles', 'VP')->get();
        
        if ($status = "Disetujui"){
            Mail::to(Auth::user()->email)->send(new \App\Mail\SendEmailAfterAccepted());

            foreach ($vps as $vp) {
                Mail::to($vp)->send(new \App\Mail\SendEmailAfterAccepted());
            }
        }

        if ($status = "Revisi"){
            Mail::to(Auth::user()->email)->send(new \App\Mail\SendEmailNeedRevision());

            foreach ($vps as $vp) {
               Mail::to($vp)->send(new \App\Mail\SendEmailNeedRevision());
            }
        }
        



        $item = Request::findOrFail($id);

        $item->update([
            'judul' =>  $request->judul,
            'nomor' => $request->nomor,
            'awal_pelaksanaan' => $request->awal_pelaksanaan,
            'akhir_pelaksanaan' => $request->akhir_pelaksanaan,
            'tanggal_tanam' => $request->tanam_date,
            'areal' => $request->areal,
            'keterangan_areal' => $request->keterangan_areal,
            'blok' =>  $request->blok,
            'blok_details' =>  $request->blok_details,
            // 'peneliti' =>  $request->peneliti,
            'judul' =>  $request->judul,

            'jumlah_ember' =>  $request->jumlah_ember,
            'jumlah_polibag' =>  $request->jumlah_polibag,
            'jumlah_pot' =>  $request->jumlah_pot,
            'jumlah_mulsa' =>  $request->jumlah_mulsa,
            'jumlah_benih' =>  $request->jumlah_benih,
            'jumlah_petroganik' =>  $request->jumlah_petroganik,
            'jumlah_phonska' =>  $request->jumlah_phonska,
            'jumlah_urea' =>  $request->jumlah_urea,
            'jumlah_za' =>  $request->jumlah_za,
            'jumlah_zk' =>  $request->jumlah_zk,
            'jumlah_kci' =>  $request->jumlah_kci,
            'benih_lain' =>  $request->benih_lain,
            'jumlah_lain' =>  $request->jumlah_lain,
            
            'pestisida' =>  $request->has('pestisida'),
            'herbisida' =>  $request->has('herbisida'),
            'fungisida' =>  $request->has('fungisida'),
            'plastik_barrier' =>  $request->has('plastik_barrier'),
            'jaring_burung' =>  $request->has('jaring_burung'),

            'rancangan' => $request->rancangan,
            'tujuan' => $request->tujuan,

            'sarana_lain' =>  $request->sarana_lain,

            'komoditas' =>  $request->komoditas,
            'varietas' =>  $request->varietas,
            'peralatan' =>  $request->peralatan,
            'jumlah_peralatan' =>  $request->jumlah_peralatan,
            'pupuk' =>  $request->pupuk,
            'jumlah_pupuk' =>  $request->jumlah_pupuk,
            
            'catatan_staf_muda' => $catatan,
            'status' => $status,
        ]);
        
        return redirect()->route('request.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Request::findOrFail($id);
        $item->delete();

        return redirect()->route('request.index');
    }
}
