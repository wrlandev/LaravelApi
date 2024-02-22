<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\AddressResource;
use App\Http\Requests\StoreUpdateAddress;
use App\Models\Address;
use App\Models\Patient;
use Illuminate\Http\Response;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $address = Address::all();

        return AddressResource::collection($address);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateAddress $request, $patientId)
    {
      $patient = Patient::find($patientId);

      $patient->address()->create($request->validated());

      return response('SUCCESS', 200);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $address = Address::findOrFail($id);

        return new AddressResource($address);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $patientId)
    {
        $patient = $this->patient->find($patientId);

        $patient->address()->update($request->validated());

        return response('SUCCESS', 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $address = Address::findOrFail($id)->delete();

        return response()->json([], Response::HTTP_NO_CONTENT);
    }
}