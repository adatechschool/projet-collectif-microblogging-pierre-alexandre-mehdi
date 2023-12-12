<div>
    <form method="get" action="{{ route('wall') }}">
        {{-- @csrf --}}
        <div class="form-group">
            <label for="content">Content:</label>
            <textarea name="content" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" name="image" class="form-control-file" required>
        </div>
        <button type="submit" class="btn btn-primary">Create Post</button>
    </form>
</div>