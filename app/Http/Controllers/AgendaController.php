<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;
use Yajra\DataTables\Facades\DataTables;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Agenda::select('*');
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row) {
                    $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('agenda.listagenda');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agenda.addagenda');
    }

    public function createnow()
    {
        return view('agenda.addagendanow');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tglskr = date("Y-m-d");
        $tglbsk = date("Y-m-d", strtotime($tglskr . "+1 days"));

        $agenda = new Agenda();
        $agenda->tanggal_agenda = $tglbsk;
        $agenda->nama_agenda = $request->nama_agenda;
        $agenda->waktu_agenda = $request->waktu_agenda;
        $agenda->tempat_agenda = $request->tempat_agenda;
        $agenda->disposisi_agenda = $request->disposisi_agenda;
        $agenda->save();

        return redirect()->back();
    }

    public function storenow(Request $request)
    {
        $agenda = new Agenda();
        $agenda->tanggal_agenda = date("Y-m-d");
        $agenda->nama_agenda = $request->nama_agenda;
        $agenda->waktu_agenda = $request->waktu_agenda;
        $agenda->tempat_agenda = $request->tempat_agenda;
        $agenda->disposisi_agenda = $request->disposisi_agenda;
        $agenda->save();

        return redirect()->back();
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
