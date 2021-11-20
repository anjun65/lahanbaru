<?php

namespace App\Http\Controllers\vp;

use App\Http\Controllers\Controller;

use App\Models\Request as RequestModel;
use App\Http\Requests\Admin\RequestRequest;
use App\Http\Requests\VP\VPRequest;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\Request;

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
            $query = RequestModel::query();
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
                                    <a class="dropdown-item" href="' . route('request-vp.edit', $item->id) . '">
                                        Sunting
                                    </a>
                                    <form action="'. route('request-vp.destroy', $item->id) .'" method="POST">
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

        return view('pages.vp.request.index');
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
        
        $item = RequestModel::findOrFail($id);

        $qrcode = QrCode::generate(route('barcode-show', $id));

        return view('pages.vp.request.edit', [
            'item' => $item,
            'qrcode' => $qrcode,
        ]);
    }

    /**`
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VPRequest $request, $id)
    {
        
        $item = RequestModel::findOrFail($id);
        $item->update([
            'catatan_vp' => $request->catatan_vp,
        ]);

        return redirect()->route('request-vp.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = RequestModel::findOrFail($id);
        $item->delete();

        return redirect()->route('request-vp.index');
    }
}
