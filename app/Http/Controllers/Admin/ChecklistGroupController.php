<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChecklistGroupValidationRequest;
use App\Models\ChecklistGroup;
use Illuminate\Http\Request;

class ChecklistGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $checklistGroups = ChecklistGroup::paginate(8);
        return view('admin.checklist_group.index', compact('checklistGroups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $checklistGroup = new ChecklistGroup();
        return view('admin.checklist_group.create', compact('checklistGroup'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ChecklistGroupValidationRequest $request)
    {
        $checklistGroup = ChecklistGroup::create($request->validated());
        return redirect()->route('admin.checklist_groups.show', $checklistGroup->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ChecklistGroup $checklistGroup)
    {
        return view('admin.checklist_group.show', compact('checklistGroup'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ChecklistGroup $checklistGroup)
    {
        return view('admin.checklist_group.edit', compact('checklistGroup'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ChecklistGroupValidationRequest $request, ChecklistGroup $checklistGroup)
    {
        $checklistGroup->update($request->validated());
        return redirect()->route('admin.checklist_groups.show', $checklistGroup->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChecklistGroup $checklistGroup)
    {
        $checklistGroup->delete();
        return redirect()->route('admin.checklist_groups.index');
    }
}
