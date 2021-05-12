<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyTenantRequest;
use App\Http\Requests\StoreTenantRequest;
use App\Http\Requests\UpdateTenantRequest;
use App\Models\Room;
use App\Models\Tenant;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class TenantsController extends Controller
{
    use MediaUploadingTrait;
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('tenant_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $tenants = Tenant::with(['room', 'created_by', 'media'])->get();

        return view('admin.tenants.index', compact('tenants'));
    }

    public function create()
    {
        abort_if(Gate::denies('tenant_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $rooms = Room::where('status' ,"!=", 1)->pluck('number', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.tenants.create', compact('rooms'));
    }

    public function store(StoreTenantRequest $request)
    {
        $tenant = Tenant::create($request->all());

        if ($request->input('tenant_image', false)) {
            $tenant->addMedia(storage_path('tmp/uploads/' . basename($request->input('tenant_image'))))->toMediaCollection('tenant_image');
        }

        foreach ($request->input('tenant_id_image', []) as $file) {
            $tenant->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('tenant_id_image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $tenant->id]);
        }

        return redirect()->route('admin.tenants.index');
    }

    public function edit(Tenant $tenant)
    {
        abort_if(Gate::denies('tenant_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $rooms = Room::all()->pluck('number', 'id')->prepend(trans('global.pleaseSelect'), '');

        $tenant->load('room', 'created_by');

        return view('admin.tenants.edit', compact('rooms', 'tenant'));
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

        if (count($tenant->tenant_id_image) > 0) {
            foreach ($tenant->tenant_id_image as $media) {
                if (!in_array($media->file_name, $request->input('tenant_id_image', []))) {
                    $media->delete();
                }
            }
        }
        $media = $tenant->tenant_id_image->pluck('file_name')->toArray();
        foreach ($request->input('tenant_id_image', []) as $file) {
            if (count($media) === 0 || !in_array($file, $media)) {
                $tenant->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('tenant_id_image');
            }
        }

        return redirect()->route('admin.tenants.index');
    }

    public function show(Tenant $tenant)
    {
        abort_if(Gate::denies('tenant_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $tenant->load('room', 'created_by');

        return view('admin.tenants.show', compact('tenant'));
    }

    public function destroy(Tenant $tenant)
    {
        abort_if(Gate::denies('tenant_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $tenant->delete();

        return back();
    }

    public function massDestroy(MassDestroyTenantRequest $request)
    {
        Tenant::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('tenant_create') && Gate::denies('tenant_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Tenant();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
