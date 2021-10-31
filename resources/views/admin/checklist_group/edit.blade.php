@extends('layouts.app')

@section('content')
    <div class="col-6 offset-3">
        .<div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ __('Edit Checklist Group') }}</h5>
                <hr>
                <form action="{{ route('admin.checklist_groups.update', $checklistGroup->id) }}" method="post">
                    @csrf @method('put')
                    @include('admin.checklist_group.form')
                    
                    <div class="mb-3">
                        <button type="submit" class="btn btn-warning">{{ __('Update') }}</button>
                        <a href="{{ route('admin.checklist_groups.show', $checklistGroup->id) }}" class="btn btn-danger">{{ __('Cancel') }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection