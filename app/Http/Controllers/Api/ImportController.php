<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ImportBrandsRequest;
use App\Http\Requests\ImportDefectsRequest;
use App\Http\Requests\ImportDevicesRequest;
use App\Imports\BrandsImport;
use App\Imports\DefectsImport;
use App\Imports\DevicesImport;
use Excel;
use Illuminate\Http\JsonResponse;

class ImportController extends Controller
{
    /**
     * Import brand list via csv file
     *
     * @param      \App\Http\Requests\ImportBrandsRequest  $request  The request
     * @return     JsonResponse                            The json response.
     */
    public function brands(ImportBrandsRequest $request): JsonResponse
    {
        Excel::import(new BrandsImport, $request->file('file'));
        return response()->json(
            [
                'message' => __('Data saved successfully'),
            ]
        );
    }

    /**
     * Import device list via csv file
     *
     * @param      \App\Http\Requests\ImportDevicesRequest  $request  The request
     * @return     JsonResponse                             The json response.
     */
    public function devices(ImportDevicesRequest $request): JsonResponse
    {
        Excel::import(new DevicesImport, $request->file('file'));
        return response()->json(
            [
                'message' => __('Data saved successfully'),
            ]
        );
    }

    /**
     * Import defect list via csv file
     *
     * @param      \App\Http\Requests\ImportDefectsRequest  $request  The request
     * @return     JsonResponse                             The json response.
     */
    public function defects(ImportDefectsRequest $request): JsonResponse
    {
        Excel::import(new DefectsImport, $request->file('file'));
        return response()->json(
            [
                'message' => __('Data saved successfully'),
            ]
        );
    }
}
