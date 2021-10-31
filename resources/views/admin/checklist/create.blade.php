@extends('layouts.app')

@section('content')
    <div class="col-6 offset-3">
        .<div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ __('Add a New Chacklist') }}</h5>
                <hr>
                <form action="{{ route('admin.checklist_groups.checklists.store', $checklistGroup) }}" method="post">
                    @csrf
                    @include('admin.checklist.form')
                    
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                        <a href="{{ route('admin.checklist_groups.show', $checklistGroup->id) }}" class="btn btn-danger">{{ __('Cancel') }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection