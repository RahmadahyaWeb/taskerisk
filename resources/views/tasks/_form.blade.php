<div class="col-12 mb-2">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control form-control-sm @error('title') is-invalid @enderror" id="title"
        name="title" value="{{ old('title', $task->title) }}">
    @error('title')
        <span class="invalid-feedback">{{ $message }}</span>
    @enderror
</div>
<div class="col-12 mb-2">
    <div class="d-grid gap-2">
        <button class="btn btn-primary btn-sm" type="submit">{{ $button }}</button>
    </div>
</div>
