<?php

namespace App\Http\Controllers\Graebens;

use App\Http\Controllers\Controller;
use App\Http\Requests\BranchRequest;
use App\Models\Graebens\Branches;
use Illuminate\Http\Request;

class BranchesController extends Controller
{
    //
    public function index()
    {
        $data = Branches::paginate(20);

        return view('graebens.branches', [
            'branches' => $data,
        ]);
    }

    // store
    public function store(BranchRequest $request)
    {
        $validate = $request->validated();

        if ($validate) {
            $data = [
                'branch_name' => $request->branch_name,
                'branch_contact' => $request->branch_contact
            ];
            Branches::create($data);
            return back()->with('success', 'Saved Successfully');
        }
    }

    public function show($id){
        dd($id);
    }
}
