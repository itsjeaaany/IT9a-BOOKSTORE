<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Books</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>

<div class="container">

  <h1>Books Store</h1>
  <form action="/books" method="POST" class="books-form">
    @csrf

    <div class="form-group">
      <label for="Book_Name">Book Name:</label>
      <input type="text" id="Book_Name" name="Book_Name" placeholder="Enter book name">
    </div>

    <div class="form-group">
      <label for="Book_Author">Book Author:</label>
      <input type="text" id="Book_Author" name="Book_Author" placeholder="Enter book author">
    </div>

    <div class="form-group">
      <label for="Book_Stock">Book Stock:</label>
      <input type="text" id="Book_Stock" name="Book_Stock" placeholder="Enter book stock">
    </div>

    <div class="form-group">
      <label for="Book_Date">Book Date:</label>
      <input type="text" id="Book_Date" name="Book_Date" placeholder="Enter book date">
    </div>

    <button type="submit" class="btn-submit">Save Book</button>
  </form>

  <hr>
  <table class="books-table">

    <thead>
      <tr>
        <th>ID</th>
        <th>Book Name</th>
        <th>Book Author</th>
        <th>Book Stock</th>
        <th>Book Date</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>

      @foreach($items as $book)  
<tr>
  <td>{{ $book->id }}</td>
  <td>{{ $book->Book_Name }}</td>
  <td>{{ $book->Book_Author }}</td>
  <td>{{ $book->Book_Stock }}</td>
  <td>{{ $book->Book_Date }}</td>
  <td>
    <a href="/books/{{ $book->id }}/edit" class="btn-edit">Edit</a>
    <form action="/books/{{ $book->id }}" method="POST" style="display:inline;">
      @csrf
      @method('DELETE')
      <button type="submit" class="btn-delete">Delete</button>
    </form>
</tr>
@endforeach

    </tbody>

  </table>
</div>

</body>
</html>