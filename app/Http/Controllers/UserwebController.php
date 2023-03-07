<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;

class UserwebController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = User::select('*')->where('platform', '=', 'web')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row) {
                    $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('userweb.viewuserweb');
    }
    
    public function create()
    {
        return view('userweb.adduserweb');
    }

    public function store(Request $request)
    {
        $userweb = new User();
        $userweb->nip = $request->nip;
        $userweb->nama_lengkap = $request->nama_lengkap;
        $userweb->email = $request->email;
        $userweb->jabatan = $request->jabatan;
        $userweb->platform = 'web';
        $userweb->password = Hash::make($request->password);
        $userweb->save();

        return redirect()->back();
    }
}
