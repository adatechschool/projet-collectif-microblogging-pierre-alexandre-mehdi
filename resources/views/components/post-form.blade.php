<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Beautiful Form</title>
</head>
<body>

<div class="container mt-5">
    <form method="post" action="{{ route('post.store') }}">
        @csrf
        <div class="form-group">
            <label for="content">Content:</label>
            <textarea name="content" class="form-control" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="image">Image URL:</label>
            <input type="url" name="image" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Create Post</button>
    </form>

    {{-- Ajoutez cette partie pour afficher l'image --}}
    @if (isset($post) && $post->image)
        <div class="mt-3">
            <img src="{{ $post->image }}" alt="Image du post" class="img-fluid">
        </div>
    @endif
</div>

</body>
</html>

