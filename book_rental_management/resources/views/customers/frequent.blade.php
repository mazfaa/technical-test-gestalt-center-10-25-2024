<x-layout>
  <x-slot name="title">
    <h5 class="card-title mb-0">Customers Who Borrowed More Than 10 Books</h5>
  </x-slot>

  <table id="dataTable" class="display nowrap">
    <thead>
      <tr>
        <th>Name</th>
        <th>Total Books Borrowed</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($customers  as $customer)
        <tr>
          <td>{{ $customer->name }}</td>
          <td>{{ $customer->rents_count  }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
</x-layout>