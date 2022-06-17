<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DataTables;

class UserManagementController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = User::select('id','name','email','created_at','updated_at');
            return DataTables::of($data)->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<a href="javascript:void(0)"
                    class="btn btn-default btn-sm"
                    title="Klik di sini untuk edit"
                    style="margin-right: 5px; margin-bottom: 2px;"><i class="fas fa-edit"></i></a>';
                    $btn .= '<a href="javascript:void(0)"
                    class="btn btn-danger btn-sm"
                    title="Klik di sini untuk non-aktifkan"
                    style="margin-right: 5px; margin-bottom: 2px;"><i class="fas fa-trash"></i></a>';
                    $btn .= '<a href="javascript:void(0)"
                    class="btn btn-info btn-sm"
                    title="Klik di sini untuk ganti password"
                    style="margin-bottom: 2px;"><i class="fas fa-key"></i></a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('user-management.index');
    }
}
