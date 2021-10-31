<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChecklistValidationRequest;
use App\Models\Checklist;
use App\Models\ChecklistGroup;
use Illuminate\Http\Request;

class ChecklistController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(ChecklistGroup $checklistGroup)
    {   
        $checklist = new Checklist();
        return view('admin.checklist.create', compact('checklistGroup', 'checklist'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(ChecklistValidationRequest $request, ChecklistGroup $checklistGroup)
    {
        $checklistGroup->checklists()->create($request->validated());
        return redirect()->route('admin.checklist_groups.show', $checklistGroup->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ChecklistGroup $checklistGroup, Checklist $checklist)
    {
        return view('admin.checklist.edit', compact('checklistGroup', 'checklist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ChecklistValidationRequest $request, ChecklistGroup $checklistGroup, Checklist $checklist)
    {
        $checklist->update($request->validated());
        return redirect()->route('admin.checklist_groups.show', $checklistGroup);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChecklistGroup $checklistGroup, Checklist $checklist)
    {
        $checklist->delete();
        return redirect()->back();
    }
}
