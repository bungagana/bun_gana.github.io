<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use App\Models\Setting\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            # jika request berasal dari ajax
            $data = Pembayaran::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" data-url="' . route('pembayaran.edit', $row->id) . '" class="edit btn btn-primary btn-sm editItem"><i class="fas fa-edit"></i></a>';
                    $actionBtn = $actionBtn . ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-url="' . route('pembayaran.destroy', $row->id) . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteItem"><i class="fas fa-trash"></i></a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('setting.pembayaran');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_bank' => 'required',
            'atas_nama' => 'required',
            'nomor_rekening' => 'required|string|max:100'
        ]);
        
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->all()]);
        }

        $data = $request->all();
        Pembayaran::updateOrCreate(
            ['id' => $request->Item_id],
            $data
        );

        return response()->json(['success'=>'Pembayaran Berhasil ditambahkan']);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Pembayaran::find($id);
        return response()->json($item);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pembayaran::find($id)->delete();
        return response()->json(['success'=> 'Pembayaran deleted successfully']);
    }
}