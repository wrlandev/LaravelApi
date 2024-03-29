<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\PatientResource;
use App\Http\Requests\StoreUpdatePatient;
use App\Models\Patient;
use Illuminate\Http\Response;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patients = Patient::all();

        return PatientResource::collection($patients);
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdatePatient $request)
    {
        $data = $request->validated();
        
        $patient = Patient::create($data);

        return new PatientResource($patient);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $patient = Patient::findOrFail($id);

        return new PatientResource($patient);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUpdatePatient $request, string $id)
    {
        $patient = Patient::findOrFail($id);

        $data = $request->validated();
        $patient->update($data);

        return new PatientResource($patient);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $patient = Patient::findOrFail($id)->delete();

        return response()->json([], Response::HTTP_NO_CONTENT);
    }
}
