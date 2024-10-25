<x-layout>
  <x-slot name="title">
    <h5 class="card-title mb-0">Rentals</h5>
    <a href="{{ route('rents.create') }}" class="btn btn-sm badge btn-primary d-block ms-1"><i class="align-middle" data-feather="plus"></i> Create new rent</a>
  </x-slot>

  <table id="dataTable" class="display nowrap">
    <thead>
      <tr>
        <th>Book Title</th>
        <th>Book Author</th>
        <th>Customer Name</th>
        <th>Rent Date</th>
        <th>Return Date</th>
        <th>&nbsp;</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($rents as $rent)
        <tr>
          <td>{{ $rent->book->title }}</td>
          <td>{{ $rent->book->author }}</td>
          <td>{{ $rent->customer->name }}</td>
          <td>
            <span class="badge text-bg-success text-white">{{ $rent->date_rent }}</span>
          </td>
          <td>
             <span class="badge {{ $rent->date_return ? 'text-bg-primary' : 'text-bg-danger' }} text-white">
                {{ $rent->date_return ?? 'Not returned yet' }}
            </span>
          </td>

          <td class="d-flex">
            <a href="{{ route('rents.edit', ['rent' => $rent->id, 'customer' => $rent->customer->id, 'book' => $rent->book->id]) }}" class="btn btn-sm badge btn-success">
              Edit
            </a>

            <a href="{{ route('rents.setAsReturned', $rent->id) }}" class="btn btn-sm badge btn-primary ms-1">
              Set as returned
            </a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</x-layout>