<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreTenantRequest;
use App\Http\Requests\UpdateTenantRequest;
use App\Http\Resources\Admin\TenantResource;
use App\Models\Tenant;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TenantsApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('tenant_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new TenantResource(Tenant::with(['room', 'created_by'])->get());
    }

    public function store(StoreTenantRequest $request)
    {
        $tenant = Tenant::create($request->all());

        if ($request->input('tenant_image', false)) {
            $tenant->addMedia(storage_path('tmp/uploads/' . basename($request->input('tenant_image'))))->toMediaCollection('tenant_image');
        }

        if ($request->input('tenant_id_image', false)) {
            $tenant->addMedia(storage_path('tmp/uploads/' . basename($request->input('tenant_id_image'))))->toMediaCollection('tenant_id_image');
        }

        return (new TenantResource($tenant))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Tenant $tenant)
    {
        abort_if(Gate::denies('tenant_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new TenantResource($tenant->load(['room', 'created_by']));
    }

    public function update(UpdateTenantRequest $request, Tenant $tenant)
    {
        $tenant->update($request->all());

        if ($request->input('tenant_image', false)) {
            if (!$tenant->tenant_image || $request->input('tenant_image') !== $tenant->tenant_image->file_name) {
                if ($tenant->tenant_image) {
                    $tenant->tenant_image->delete();
                }
                $tenant->addMedia(storage_path('tmp/uploads/' . basename($request->input('tenant_image'))))->toMediaCollection('tenant_image');
            }
        } elseif ($tenant->tenant_image) {
            $tenant->tenant_image->delete();
        }

        if ($request->input('tenant_id_image', false)) {
            if (!$tenant->tenant_id_image || $request->input('tenant_id_image') !== $tenant->tenant_id_image->file_name) {
                if ($tenant->tenant_id_image) {
                    $tenant->tenant_id_image->delete();
                }
                $tenant->addMedia(storage_path('tmp/uploads/' . basename($request->input('tenant_id_image'))))->toMediaCollection('tenant_id_image');
            }
        } elseif ($tenant->tenant_id_image) {
            $tenant->tenant_id_image->delete();
        }

        return (new TenantResource($tenant))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Tenant $tenant)
    {
        abort_if(Gate::denies('tenant_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $tenant->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
