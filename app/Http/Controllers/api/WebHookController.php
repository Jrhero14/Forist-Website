<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\ShoppingStage;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class WebHookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validator = validator::make($request->all(), [
                'order_id' => 'required',
                'gross_amount' => 'required'
            ]);
            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()], Response::HTTP_UNPROCESSABLE_ENTITY);
            }

            $getStage = ShoppingStage::where([
                ['nomorPesanan', '=', $request->order_id],
                ['totalHarga', '=', (int) $request->gross_amount],
            ])->first();

            if (!$getStage){
                $response = [
                    'Success' => 'Not Found',
                ];
                $status = Response::HTTP_NOT_FOUND;
            }else{
                $getStage->status = true;
                $getStage->save();
                $response = [
                    'Success' => 'Success konfirmasi pembayaran',
                ];
                $status = Response::HTTP_ACCEPTED;
            }

            return response()->json($response, $status);
        } catch (QueryException $e) {
            $error = [
                'error' => $e->getMessage()
            ];
            return response()->json($error, Response::HTTP_UNPROCESSABLE_ENTITY);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
