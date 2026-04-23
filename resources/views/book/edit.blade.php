<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Book</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<div class="container">
  <h1>Edit Book</h1>

  @if ($errors->any())
    <div class="error-box">
      <strong>No information, put information:</strong>
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  @if (session('success'))
    <div class="success-box">{{ session('success') }}</div>
  @endif

  <form action="/books/{{ $item->id }}" method="POST" class="books-form">
    @csrf
    @method('PUT')

    <div class="form-group">
      <label for="Book_Name">Book Name:</label>
      <input type="text" id="Book_Name" name="Book_Name" value="{{ $item->Book_Name }}" placeholder="Enter book name">
    </div>

    <div class="form-group">
      <label for="Book_Author">Book Author:</label>
      <input type="text" id="Book_Author" name="Book_Author" value="{{ $item->Book_Author }}" placeholder="Enter book author">
    </div>

    <div class="form-group">
      <label for="Book_Stock">Book Stock:</label>
      <input type="text" id="Book_Stock" name="Book_Stock" value="{{ $item->Book_Stock }}" placeholder="Enter book stock">
    </div>

    <div class="form-group">
      <label for="Book_Date">Book Date:</label>
      <input type="text" id="Book_Date" name="Book_Date" value="{{ $item->Book_Date }}" placeholder="Enter book date">
    </div>

    <button type="submit" class="btn-submit">Update Book</button>
  </form>
  <p><a href="/books">Back to books</a></p>
</div>
</body>
</html>