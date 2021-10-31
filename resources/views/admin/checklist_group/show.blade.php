@extends('layouts.app')

@section('content')
    <div class="col-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline">
                    <h5 class="card-title">{{ __('Checklist Group Informations') }}</h5>
                    <a href="{{ route('admin.checklist_groups.edit', $checklistGroup->id) }}" class="btn btn-warning">Edit</a>
                </div>
                <hr>
                <div>
                    <strong>{{ __('Checklist Group ID:') }}</strong><p>{{ $checklistGroup->id }}</p>
                    <strong>{{ __('Checklist Group:') }}</strong><p>{{ $checklistGroup->name }}</p>
                </div>
                <hr>
                <form action="{{ route('admin.checklist_groups.destroy', $checklistGroup->id) }}" method="post">
                    @csrf @method('delete')

                    <button type="submit" class="btn btn-danger" onclick="return confirm('{{ __('Please Confirme Your Action!!!') }}')">{{ __('Delete') }}</button>
                    <a href="{{ route('admin.checklist_groups.index') }}" class="btn btn-secondary">{{ __('Return') }}</a>
                </form>

            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline">
                    <h5 class="card-title">{{ __('Related Checklists') }}</h5>
                    <a 
                        href="{{ route('admin.checklist_groups.checklists.create', $checklistGroup->id) }}" 
                        class="btn btn-primary btn-block"
                        >Add Checklists
                    </a>
                </div>
                <hr>
                @if ($checklistGroup->checklists->count() === 0)
                    <p class="text-danger">{{ __('No Checklist Found') }}</p>
                @else
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>{{ __('ID') }}</th>
                            <th>{{ __('Checklist') }}</th>
                            <th>{{ __('Action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($checklistGroup->checklists as $checklist)
                            <tr>
                                <td>{{ $checklist->id }}</td>
                                <td>{{ $checklist->name }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('admin.checklist_groups.checklists.edit', [$checklistGroup, $checklist]) }}" class="btn btn-sm btn-outline-warning">{{ __('Edit') }}</a>
                                    <form class="mx-2" action="{{ route('admin.checklist_groups.checklists.destroy', [$checklistGroup, $checklist]) }}" method="post">
                                        @csrf @method('delete')
                                        <button 
                                            class="btn btn-sm btn-outline-danger" 
                                            type="submit" 
                                            onclick="return confirm('Confirm Your Action')"
                                            >
                                            {{ __('delete') }}
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @endif
            </div>
        </div>
    </div>
@endsection