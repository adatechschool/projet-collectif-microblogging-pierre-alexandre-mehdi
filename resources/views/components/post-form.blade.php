{{-- <div> --}}
    {{-- <form method="post" action="{{ route('post.store') }}">
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
    </form> --}}

    {{-- Ajoutez cette partie pour afficher l'image --}}
    {{-- @if (isset($post) && $post->image)
        <img src="{{ $post->image }}" alt="Post Image">
    @endif --}}
{{-- </div> --}}

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
            <label for="content">Contenu:</label>
            <textarea name="content" class="form-control" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="image">Image:</label>
            <input type="url" name="image" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Créer un post</button>
    </form>

    {{-- Ajoutez cette partie pour afficher l'image --}}
    @if (isset($post) && $post->image)
        <div class="mt-3">
            <img src="{{ $post->image }}" alt="Post Image" class="img-fluid">
        </div>
    @endif
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
