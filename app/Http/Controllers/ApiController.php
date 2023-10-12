<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use SetEnv;

class ApiController extends Controller
{

    /**
     * System configuration
     *
     * @param      \Illuminate\Http\Request  $request  The request
     *
     * @return   mixed
     */
    public function proctection(Request $request)
    {
        SetEnv::setKey(strtoupper('app_pack'), $request->package_hash ?? null);
        SetEnv::save();
        return redirect('/admin?message=Application_configuration_saved_successfully');
    }

    /**
     * Provides default settings for all controllers
     * extended by controller
     *
     * @return object
     */
    protected function master(): object
    {
        return Setting::find(1);
    }

    /**
     * DataTable sorting for common resources
     *
     * @param mixed $request
     *
     * @return array
     */
    protected function sort($request): array
    {
        return json_decode(
            $request->get('sort', json_encode(['order' => 'asc', 'column' => 'created_at'], JSON_THROW_ON_ERROR)),
            true,
            512,
            JSON_THROW_ON_ERROR
        );
    }

    /**
     * Generate pagination for common dataTables
     * @param \Illuminate\Database\Eloquent\Collection $items
     *
     * @return array
     */
    protected function pagination($items): array
    {
        return [
            'currentPage' => $items->currentPage(),
            'perPage'     => $items->perPage(),
            'total'       => $items->total(),
            'totalPages'  => $items->lastPage(),
        ];
    }
}
