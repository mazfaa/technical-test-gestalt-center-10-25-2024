<x-layout>
  <x-slot name="title">
    <h5 class="card-title mb-0">{{ $title }} Customer</h5>
    <a href="{{ route('customers.index') }}" class="btn btn-sm badge btn-primary"><i class="align-middle" data-feather="arrow-left"></i> Back</a>
  </x-slot>

  <form action="{{ ($method == 'post') ? route('customers.store') : route('customers.update', $customer->id) }}" method="post">
    @csrf
    @method($method)

    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" name="name" class="form-control" id="name" autofocus value="{{ old('name', $customer->name) }}" autocomplete="off">
      
      @error('name')
        <span class="text-danger mt-1 d-block">{{ $message }}</span>
      @enderror
    </div>

    <div class="mb-3">
      <label for="identity_card_number" class="form-label">Identity Card Number</label>
      <input type="text" name="identity_card_number" class="form-control" id="identity_card_number" value="{{ old('identity_card_number', $customer->identity_card_number) }}" autocomplete="off">

      @error('identity_card_number')
        <span class="text-danger mt-1 d-block">{{ $message }}</span>
      @enderror
    </div>

    <div class="mb-3">
      <label for="address" class="form-label">Address</label>
      <textarea name="address" id="address" class="form-control" cols="30" rows="10">{{ old('address', $customer->address) }}</textarea>
      
      @error('name')
        <span class="text-danger mt-1 d-block">{{ $message }}</span>
      @enderror
    </div>

    <button class="btn btn-sm btn-primary rounded">{{ $title }}</button>
  </form>
</x-layout>