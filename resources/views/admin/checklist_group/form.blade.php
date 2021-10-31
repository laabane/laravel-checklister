<div class="mb-3">
    <label class="form-label" for="name">Checklist Group Name</label>
    <input 
        class="form-control @error('name') is-invalid @enderror" 
        id="name" 
        name="name" 
        type="text"
        value="{{ old('name') ?? $checklistGroup->name }}" 
        placeholder="Enter Checklist Group">

    @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>