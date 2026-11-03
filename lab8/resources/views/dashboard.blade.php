@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
<h1 class="h3">Welcome, {{ auth()->user()->name }}!</h1>
<p class="text-muted">Email: {{ auth()->user()->email }} &middot; Your personal reading list</p>

<div class="row g-4">
  <div class="col-lg-4">
    <div class="card shadow-sm"><div class="card-body">
      <h2 class="h5">Register a Book</h2>
      @if ($errors->any())
        <div class="alert alert-danger" role="alert">
          <ul class="mb-0">
            @foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach
          </ul>
        </div>
      @endif
      <form method="POST" action="{{ route('books.store') }}">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input id="title" name="title" type="text" maxlength="150"
                 class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" required>
          @error('title')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label for="author" class="form-label">Author</label>
          <input id="author" name="author" type="text" maxlength="100"
                 class="form-control @error('author') is-invalid @enderror" value="{{ old('author') }}" required>
          @error('author')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
          <label for="pages" class="form-label">Pages</label>
          <input id="pages" name="pages" type="number" min="1" max="10000"
                 class="form-control @error('pages') is-invalid @enderror" value="{{ old('pages') }}" required>
          @error('pages')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <button type="submit" class="btn btn-primary">Add Book</button>
      </form>
    </div></div>
  </div>

  <div class="col-lg-8">
    <div class="card shadow-sm"><div class="card-body">
      <h2 class="h5">My Books ({{ $books->count() }})</h2>
      <div class="table-responsive">
        <table class="table table-striped align-middle mb-0">
          <thead><tr><th>No.</th><th>Title</th><th>Author</th><th>Pages</th></tr></thead>
          <tbody>
            @forelse ($books as $book)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->pages }}</td>
              </tr>
            @empty
              <tr><td colspan="4" class="text-center text-muted">No books registered yet.</td></tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div></div>
  </div>
</div>
@endsection
