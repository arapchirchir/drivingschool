<?php

namespace App\Http\Controllers\Graebens;

use App\Http\Controllers\Controller;
use App\Http\Requests\FeesStructureRequest;
use App\Models\FeesStructure;
use Illuminate\Http\Request;

class SchoolInformationCOntroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $fees_structure = FeesStructure::latest()->first();

        return view('graebens.school', [
            'fees_structure' => $fees_structure
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    // Fees Structure
    public function feesStructure(FeesStructureRequest $request){

        $valid = $request->validated();
        if ($valid) {
            if ($request->hasFile('fees_structure')) {
                $file_extension = $request->file('fees_structure')->getClientOriginalExtension();
                $file_name = "Fees_Structure_".time().".".$file_extension;

                $data = [
                    'fees_structure' => $file_name
                ];

                FeesStructure::create($data);

                $request->file('fees_structure')->move(public_path().'/files/', $file_name);

                return redirect()->back()->with('success', 'Fees structure uploaded successfully.');

            }
        }
    }

    // Download file
    public function feesStructureDownload($fees_structure)
    {
        $file_path = public_path('files' . '/' . $fees_structure);
        return response()->download($file_path, $fees_structure);
    }
}
