<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Hash;

class PenggunaController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = User::select('*')->where('platform', '=', 'hp')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row) {
                    $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('agenda.listpengguna');
    }

    public function create()
    {
        return view('agenda.addpengguna');
    } 

    public function store(Request $request)
    {
        $pengguna = new User();
        $pengguna->nip = $request->nip;
        $pengguna->nama_lengkap = $request->nama_lengkap;
        $pengguna->email = $request->email;
        $pengguna->jabatan = $request->jabatan;
        $pengguna->password = Hash::make($request->password);
        $pengguna->platform = 'hp'; 
        $pengguna->save();       

        return redirect()->back();
    }
}
