<x-layout>
  <x-slot name="title">
    <h5 class="card-title mb-0">Books</h5>

    <div class="filter d-flex">
      <form action="{{ route('books.index') }}">
        <button type="submit" class="btn btn-sm badge btn-success"><i class="align-middle" data-feather="sliders"></i> All</button>
      </form>

      <form action="{{ route('books.unrented') }}" class="ms-1">
        <button type="submit" class="btn btn-sm badge btn-primary"><i class="align-middle" data-feather="sliders"></i> Books that have never been borrowed</button>
      </form>

      <form action="{{ route('books.filter') }}" class="ms-1">
        <button type="submit" class="btn btn-sm badge btn-dark"><i class="align-middle" data-feather="sliders"></i> Books priced at 2000-6000</button>
      </form>
      
      <a href="{{ route('books.create') }}" class="btn btn-sm badge btn-info d-block ms-1"><i class="align-middle" data-feather="plus"></i> Create new book</a>
    </div>
  </x-slot>

  <table id="dataTable" class="display nowrap">
    <thead>
      <tr>
        <th>Title</th>
        <th>Author</th>
        <th>Category</th>
        <th>Rent Status</th>
        <th>Price Rent</th>
        <th>&nbsp;</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($books as $book)
        <tr>
          <td>{{ $book->title }}</td>
          <td>{{ $book->author }}</td>
          <td>{{ $book->book_category }}</td>
          
          <td>
            @if ($book->rents->count() > 0)
              <span class="badge text-bg-success text-white">Rented</span>
            @else
              <span class="badge text-bg-primary text-white">Available</span>
            @endif
          </td>

          <td>{{ $book->price_rent }}</td>

          <td>
            <a href="{{ route('books.edit', $book->id) }}" class="btn btn-sm badge btn-success">
              Edit
            </a>

            <form action="{{ route('books.destroy', $book->id) }}" method="post" class="d-inline-block">
              @csrf
              @method('delete')
              <button class="btn btn-sm badge btn-danger" onclick="return confirm('Are you sure want to delete this book?')">Delete</button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</x-layout>