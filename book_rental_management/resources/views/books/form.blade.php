<x-layout>
  <x-slot name="title">
    <h5 class="card-title mb-0">{{ $title }} Book</h5>
    <a href="{{ route('books.index') }}" class="btn btn-sm badge btn-primary"><i class="align-middle" data-feather="arrow-left"></i> Back</a>
  </x-slot>

  <form action="{{ ($method == 'post') ? route('books.store') : route('books.update', $book->id) }}" method="post">
    @csrf
    @method($method)

    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" name="title" class="form-control" id="title" autofocus value="{{ old('title', $book->title) }}" autocomplete="off">
      
      @error('title')
        <span class="text-danger mt-1 d-block">{{ $message }}</span>
      @enderror
    </div>

    <div class="mb-3">
      <label for="author" class="form-label">Author</label>
      <input type="text" name="author" class="form-control" id="author" value="{{ old('author', $book->author) }}" autocomplete="off">

      @error('author')
        <span class="text-danger mt-1 d-block">{{ $message }}</span>
      @enderror
    </div>

    <div class="mb-3">
      <label for="price" class="form-label">Price</label>
      <input type="number" name="price_rent" class="form-control" id="price" value="{{ old('price', $book->price_rent) }}" autocomplete="off">

      @error('price_rent')
        <span class="text-danger mt-1 d-block">{{ $message }}</span>
      @enderror
    </div>

    <div class="mb-4">
      <label for="category" class="form-label">Category</label>
      <select class="form-select" name="book_category" id="category">
        <option value="MANGA">MANGA</option>
        <option value="NOVEL">NOVEL</option>
        <option value="MAGAZINE">MAGAZINE</option>
      </select>

      @error('book_category')
        <span class="text-danger mt-1 d-block">{{ $message }}</span>
      @enderror
    </div>

    <button class="btn btn-sm btn-primary rounded">{{ $title }}</button>
  </form>
</x-layout>