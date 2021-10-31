@extends('layouts.app')

@section('content')
    <div class="col-8 offset-2">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline">
                    <h5 class="card-title">{{ __('Lists of Checklist Groups') }}</h5>
                    <a 
                        href="{{ route('admin.checklist_groups.create') }}" 
                        class="btn btn-primary"
                        >{{ __('New Checklist Group') }}</a>
                </div>
                <hr>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>{{ __('ID Checklist Group') }}</th>
                            <th>{{ __('Checklist Group') }}</th>
                            <th>{{ __('Number of Checklists') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($checklistGroups as $group)
                            <tr>
                                <td>{{ $group->id }}</td>
                                <td>
                                    <a 
                                        href="{{ route('admin.checklist_groups.show', $group->id) }}" 
                                        class="text-decoration-none text-dark"
                                        >{{ $group->name }}
                                    </a>
                                </td>
                                <td>{{ $group->checklists->count() }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-center">
                    {{ $checklistGroups->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection