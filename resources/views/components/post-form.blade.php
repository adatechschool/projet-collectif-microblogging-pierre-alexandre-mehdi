<div>
    <form method="post" action="{{ route('post.store') }}">
        @csrf
        <div class="form-group">
            <label for="content">Content:</label>
            <textarea name="content" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="image">Image:</label>
            <input type="url" name="image" class="form-control-file" required>
        </div>
        <button type="submit" class="btn btn-primary">Create Post</button>
    </form>

    {{-- Ajoutez cette partie pour afficher l'image --}}
    @if (isset($post) && $post->image)
        <img src="{{ $post->image }}" alt="Post Image">
    @endif
</div>