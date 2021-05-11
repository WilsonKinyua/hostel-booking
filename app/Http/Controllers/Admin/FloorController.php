<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyFloorRequest;
use App\Http\Requests\StoreFloorRequest;
use App\Http\Requests\UpdateFloorRequest;
use App\Models\Floor;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FloorController extends Controller
{
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('floor_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $floors = Floor::with(['created_by'])->get();

        return view('admin.floors.index', compact('floors'));
    }

    public function create()
    {
        abort_if(Gate::denies('floor_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.floors.create');
    }

    public function store(StoreFloorRequest $request)
    {
        $floor = Floor::create($request->all());

        return redirect()->route('admin.floors.index');
    }

    public function edit(Floor $floor)
    {
        abort_if(Gate::denies('floor_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $floor->load('created_by');

        return view('admin.floors.edit', compact('floor'));
    }

    public function update(UpdateFloorRequest $request, Floor $floor)
    {
        $floor->update($request->all());

        return redirect()->route('admin.floors.index');
    }

    public function show(Floor $floor)
    {
        abort_if(Gate::denies('floor_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $floor->load('created_by');

        return view('admin.floors.show', compact('floor'));
    }

    public function destroy(Floor $floor)
    {
        abort_if(Gate::denies('floor_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $floor->delete();

        return back();
    }

    public function massDestroy(MassDestroyFloorRequest $request)
    {
        Floor::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
