<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>Book</title>
</head>

<body>
    <div class="container">
        <h2>Add a new Book </h2>
        <form action="{{ route('books.store') }}" method="POST">
            @csrf 
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea  id="description" name="description" required cols="50" rows="10"></textarea>
            </div>
            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" id="author" name="author" required>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" id="price" name="price" required>
            </div>
            
            <button type="submit" name="submit">Register</button>
        </form>
    </div>
</body>

</html>
