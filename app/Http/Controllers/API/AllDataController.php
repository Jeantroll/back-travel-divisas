<?php

namespace App\Http\Controllers\API;

use App\Models\AllData;
use Illuminate\Http\Request;
use App\Http\Resources\AllDataResource;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

class AllDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allData = AllData::all();
        return AllDataResource::collection($allData);
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
            'country_id' => 'required|exists:countries,id',
            'city_id' => 'required|exists:cities,id',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $allData = AllData::create($request->all());
        return new AllDataResource($allData);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AllData  $allData
     * @return \Illuminate\Http\Response
     */
    public function show(AllData $allData)
    {
        return new AllDataResource($allData);
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
        $allData = AllData::find($id);

        if (!$allData) {
            return response()->json(['message' => 'Resource not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'country_id' => 'exists:countries,id',
            'city_id' => 'exists:cities,id',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $allData->update($request->all());
        return new AllDataResource($allData);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $allData = AllData::find($id);

        if (!$allData) {
            return response()->json(['message' => 'Resource not found'], 404);
        }

        $allData->delete();
        return response()->json(['message' => 'Se ha eliminado el registro con id: '.$id], 204);
    }
}
