<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Request as RequestModel;
use App\Models\RequestDetail;
use illuminate\Support\Facades\Auth;
use illuminate\Support\Str;
use App\Models\Map;
use Carbon\Carbon;
use PDF;
use app\Models\User;

use Illuminate\Support\Facades\Mail;

use SimpleSoftwareIO\QrCode\Facades\QrCode;


class RequestController extends Controller
{   
    public function index()
    {
        $user = Auth::user()->id;
        $diajukan = RequestModel::where('peneliti', $user)->where('status', 'diajukan')->get();
        $disetujui = RequestModel::where('peneliti', $user)->where('status', 'disetujui')->get();
        $revisi = RequestModel::where('peneliti', $user)->where('status', 'revisi')->get();

        return view('pages.request',[
            'diajukan' => $diajukan,
            'disetujui' => $disetujui,
            'revisi' => $revisi,
        ]);
    }

    public function show($id)
    {
        $item = RequestModel::findOrFail($id);

        $qrcode = QrCode::generate(route('barcode-show', $id));

        return view('pages.requestdetails', [
            'item' => $item,
            'qrcode' => $qrcode,
        ]);
    }

    public function store(Request $request)
    {
        // Mail::send(new \App\Mail\SendEmailAfterTransactions());

        // Mail::to($recipient)->send(new \App\Mail\SendEmailAfterTransactions());
        $admins = User::where('roles', 'ADMIN')->get();

        foreach ($admins as $admin) {
            Mail::to($admin)->send(new \App\Mail\SendEmailAfterTransactions());
        }


        $dt = Carbon::now();
        $now = $dt->toDateString();

        $user = Auth::user()->id;

        if ($request->has('keterangan_tambahan')){
            $keterangan = $request->keterangan_tambahan;
        } else {
            $keterangan = $request->panjang * $request->lebar;
        }
        
        $blok_details = $request->blok_details;
        $bloksArray = explode(',', $blok_details);

        $new_book = RequestModel::create([
            'judul' =>  $request->judul,
            'tanggal' => $now,
            'awal_pelaksanaan' => $request->awal_date,
            'akhir_pelaksanaan' => $request->akhir_date,
            'tanggal_tanam' => $request->tanam_date,
            'areal' => $request->areal,
            'keterangan_areal' => $keterangan,
            'blok' =>  $request->blok,
            'blok_details' =>  $request->blok_details,
            'peneliti' =>  $user,
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

            'status' =>  'diajukan',
        ]);

        // $new_book->update('nomor', $new_book->id);
        // $new_book_detail = RequestDetail::create([
        //     'request_id' => $new_book->id,
        //     'jumlah_ember' =>  $request->jumlah_ember,
        //     'jumlah_polibag' =>  $request->jumlah_polibag,
        //     'jumlah_pot' =>  $request->jumlah_pot,
        //     'jumlah_mulsa' =>  $request->jumlah_mulsa,
        //     'jumlah_benih' =>  $request->jumlah_benih,
        //     'jumlah_petroganik' =>  $request->jumlah_petroganik,
        //     'jumlah_phonska' =>  $request->jumlah_phonska,
        //     'jumlah_urea' =>  $request->jumlah_urea,
        //     'jumlah_za' =>  $request->jumlah_za,
        //     'jumlah_zk' =>  $request->jumlah_zk,
        //     'jumlah_kci' =>  $request->jumlah_kci,
        //     'benih_lain' =>  $request->benih_lain,
        //     'jumlah_lain' =>  $request->jumlah_lain,
            
        //     'pestisida' =>  $request->has('pestisida'),
        //     'herbisida' =>  $request->has('herbisida'),
        //     'fungisida' =>  $request->has('fungisida'),
        //     'plastik_barrier' =>  $request->has('plastik_barrier'),
        //     'jaring_burung' =>  $request->has('jaring_burung'),

        //     'sarana_lain' =>  $request->sarana_lain,
        // ]);
        
        // foreach ($bloksArray as $blokArray) {
        //     $maps = Map::where('blok', $blokArray);
        //     $maps->update([
        //         'requests_id' => $new_book->id,
        //         'users_id' => $user,
        //         'status' => 'booked',
        //     ]);
        // }

        // $new_book->update(['details_id' => $new_book_detail->id]);

        // Mail::send(new \App\Mail\SendEmailAfterTransactions());

        return redirect()->route('request');
    }


    public function generatePDF($id)
    {
        // $item = RequestModel::findorFail($id);

        // // dd($item);

        // $pdf = PDF::loadView('pages.requestpdf', $item);

        // // return view('pages.requestpdf', [
        // //     'item' => $item
        // // ]);
        // return $pdf->download('test.pdf');

        
        $item = RequestModel::findorFail($id);
        
        view()->share('item',$item);

        $pdf = PDF::loadView('pages.requestpdf', $item)->setPaper('a4')->setOption('margin-bottom', 0);


        //$pdf = PDF::loadView('pages.requestpdf', $item);
        // $pdf->save(storage_path().'/pdf/uniquename.pdf');

        // return $pdf->download($item->judul.'.pdf');
        return $pdf->stream();
    }

}
