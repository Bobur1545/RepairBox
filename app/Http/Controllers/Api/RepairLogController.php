<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use App\Http\Requests\RepairLogRequest;
use App\Models\RepairLog;
use App\Notifications\Repair\RepairOrderStatusUpdated;
use Illuminate\Http\JsonResponse;

class RepairLogController extends ApiController
{

    /**
     * Construct middleware
     */
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    /**
     * Repairing log saves to database
     *
     * @param RepairLogRequest $request request
     *
     * @return JsonResponse
     */
    public function store(RepairLogRequest $request): JsonResponse
    {
        $log = RepairLog::create($request->validated());
        if (!$log) {
            return response()->json(
                ['message' => __('Something went wrong try again !')],
                500
            );
        }

        $log->repairOrder()->update(['repair_status_id' => $request->status_id]);
        if ($request->notify) {
            $log->repairOrder->notify((new RepairOrderStatusUpdated($this->master()->getNotificationConfig($log->repairOrder), $log->repairOrder->repairStatus->body))->locale($this->master()->app_locale));
        }

        return response()->json(['message' => __('Data saved successfully')]);
    }
}
