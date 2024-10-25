<x-layout>
  <x-slot name="title">
    <h5 class="card-title mb-0">Customers</h5>
    <a href="{{ route('customers.create') }}" class="btn btn-sm badge btn-primary d-block ms-1"><i class="align-middle" data-feather="plus"></i> Create new customer</a>
  </x-slot>

  <table id="dataTable" class="display nowrap">
    <thead>
      <tr>
        <th>Name</th>
        <th>Identity Card Number</th>
        <th>Address</th>
        <th>&nbsp;</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($customers as $customer)
        <tr>
          <td>{{ $customer->name }}</td>
          <td>{{ $customer->identity_card_number }}</td>
          <td>{{ $customer->address }}</td>
          <td>
            <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-sm badge btn-success">
              Edit
            </a>
            
            <form action="{{ route('customers.destroy', $customer->id) }}" method="post" class="d-inline-block">
              @csrf
              @method('delete')
              <button class="btn btn-sm badge btn-danger" onclick="return confirm('Are you sure want to delete this customer?')">Delete</button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</x-layout>