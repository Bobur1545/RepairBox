<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use App\Http\Requests\UserRoleStoreRequest;
use App\Http\Requests\UserRoleUpdateRequest;
use App\Http\Resources\UserRoleEditResource;
use App\Http\Resources\UserRoleResource;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserRoleController extends ApiController
{
    /**
     * Construct middleware
     */
    public function __construct()
    {
        $this->middleware('auth:sanctum');
        $this->middleware(
            'demo',
            ['only' => ['store', 'update', 'destroy']]
        );
    }

    /**
     * User roles list for management
     *
     * @param Request $request request
     *
     * @return JsonResponse
     */
    public function index(Request $request): JsonResponse
    {
        $sort = $this->sort($request);
        $roles = UserRole::filter($request->all())
            ->orderBy($sort['column'], $sort['order'])
            ->get();
        return response()->json(['items' => UserRoleResource::collection($roles)]);
    }

    /**
     * Store role to database
     *
     * @param UserRoleStoreRequest $request userRequest
     *
     * @return JsonResponse
     */
    public function store(UserRoleStoreRequest $request): JsonResponse
    {
        $userRole = UserRole::create($request->validated());
        return response()->json(
            [
                'message' => __('Data saved successfully'),
                'userRole' => new UserRoleEditResource($userRole),
            ]
        );
    }

    /**
     * Display specific role
     *
     * @param UserRole $userRole role
     *
     * @return JsonResponse
     */
    public function show(UserRole $userRole): JsonResponse
    {
        if ($userRole->is_primary) {
            return response()->json(
                ['message' => __('Cannot edit a system base function')],
                406
            );
        }
        return response()->json(new UserRoleEditResource($userRole));
    }

    /**
     * Update user role
     *
     * @param UserRoleUpdateRequest $request  userRequest
     * @param UserRole      $userRole userRole
     *
     * @return JsonResponse
     */
    public function update(UserRoleUpdateRequest $request, UserRole $userRole): JsonResponse
    {
        $userRole->update($request->validated());
        return response()->json(
            [
                'message' => __('Data updated successfully'),
            ]
        );
    }

    /**
     * Destroy specific role
     *
     * @param UserRole $userRole role
     *
     * @return JsonResponse
     */
    public function destroy(UserRole $userRole): JsonResponse
    {
        if ($userRole->is_primary || ((int) $this->master()->app_default_role === $userRole->id)) {
            return response()->json(
                ['message' => __('Can not delete a default role')],
                406
            );
        }
        User::where('role_id', $userRole->id)->update(
            ['role_id' => $this->master()->app_default_role]
        );
        $userRole->delete();
        return response()->json(
            ['message' => __('Data removed successfully')]
        );
    }

    /**
     * Gives permissions keys
     *
     * @return JsonResponse
     */
    public function permissions(): JsonResponse
    {
        return response()->json([
            //manage_repairs
            ['key' => 'dashboard_access', 'label' => __('Access dashboard')],
            ['key' => 'repairs_manage', 'label' => __('Manage repair orders')],
            ['key' => 'manage_quick_replies', 'label' => __('Manage quick replies')],
            ['key' => 'manage_repair_devices', 'label' => __('Manage devices')],
            ['key' => 'manage_repair_defects', 'label' => __('Manage defects')],
            ['key' => 'manage_repairable_brands', 'label' => __('Manage brands')],
            ['key' => 'manage_reply_statuses', 'label' => __('Manage statuses')],
            ['key' => 'manage_repair_priorities', 'label' => __('Manage priorities')],
            ['key' => 'manage_users', 'label' => __('Manage users')],
            ['key' => 'manage_user_roles', 'label' => __('Manage user roles')],
            ['key' => 'manage_custom_page', 'label' => __('Manage custom pages')],
            ['key' => 'manage_faq', 'label' => __('Manage FAQs')],
            ['key' => 'general_configuration', 'label' => __('General setting')],
            ['key' => 'seo_configuration', 'label' => __('SEO Configuration')],
            ['key' => 'appearance_configuration', 'label' => __('App Appearance')],
            ['key' => 'localization_configuration', 'label' => __('Localization')],
            ['key' => 'authentication_configuration', 'label' => __('Authentication')],
            ['key' => 'outgoing_mail_configuration', 'label' => __('Outgoing mail')],
            ['key' => 'captcha_configuration', 'label' => __('Captcha configuration')],
            ['key' => 'currency_configuration', 'label' => __('Currency configuration')],
            ['key' => 'gateways_configuration', 'label' => __('Payment gateways')],
            ['key' => 'sms_configuration', 'label' => __('SMS gateways')],
            ['key' => 'terms_condition', 'label' => __('Terms condition')],
            ['key' => 'tax_configuration', 'label' => __('Tax configuration')],
            ['key' => 'database_backup', 'label' => __('Database backup')],
            ['key' => 'report_access', 'label' => __('Report access')],
            ['key' => 'manage_translations', 'label' => __('Manage translations')],
        ]);
    }
}
