<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransCode;
use DataTables;
use Carbon\Carbon;

class TransCodeManagementController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = TransCode::get();
            return DataTables::of($data)->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<a href="javascript:void(0)"
                    class="btn btn-default btn-sm"
                    title="Klik di sini untuk edit"
                    ><i class="fas fa-edit"></i></a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('trans-code.index');
    }

    public function create(Request $request)
    {
        return view('trans-code.create-update', [
            'action_uri' => url('trans-code-management/store')
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'trans_code' => 'required|max:5|min:3',
            'description' => 'max:255'
        ]);

        $transCode = new TransCode;
        $transCode->trans_code = $request->trans_code;
        $transCode->description = $request->description;
        $transCode->created_at = Carbon::now();
        $transCode->updated_at = Carbon::now();
        $transCode->save();
        return redirect('/trans-code-management/create')->with('status', 'New data success to be saved!');
    }

    public function edit($id, Request $request)
    {
        return view('trans-code.index');
    }

}
