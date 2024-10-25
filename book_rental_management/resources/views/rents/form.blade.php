<x-layout>
  <x-slot name="title">
    <h5 class="card-title mb-0">{{ $title }} Rent</h5>
    <a href="{{ route('rents.index') }}" class="btn btn-sm badge btn-primary"><i class="align-middle" data-feather="arrow-left"></i> Back</a>
  </x-slot>

  <form action="{{ ($method == 'post') ? route('rents.store') : route('rents.update', $rent->id) }}" method="post">
    @csrf
    @method($method)

    <div class="mb-4">
      <label for="customer" class="form-label">Customer</label>
      <select class="form-select" name="customer_id" id="customer">
        @if (isset($customer))
          <option value="{{ $customer->id }}">{{ $customer->name }}</option>
        @endif

        @foreach ($customers as $customer)
          <option value="{{ $customer->id }}">{{ $customer->name }}</option>
        @endforeach
      </select>

      @error('customer_id')
        <span class="text-danger mt-1 d-block">{{ $message }}</span>
      @enderror
    </div>

    <div class="mb-4">
      <label for="book" class="form-label">Book</label>
      <select class="form-select" name="book_id" id="book">
        @if (isset($book))
          <option value="{{ $book->id }}">{{ $book->title }}</option>
        @endif

        @foreach ($books as $book)
          <option value="{{ $book->id }}">{{ $book->title }}</option>
        @endforeach
      </select>

      @error('book_id')
        <span class="text-danger mt-1 d-block">{{ $message }}</span>
      @enderror
    </div>

    <button class="btn btn-sm btn-primary rounded">{{ $title }}</button>
  </form>
</x-layout>