<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Category') }}
        </h2>
    </x-slot>
    <div class="card">
      <h5 class="card-header">{{ isset($category) ? "edit Category" : "add Category"}}</h5>
      <div class="card-body">
        @if ($errors->any())
          <div class="alert alert-danger" role="alert">
            <ul class="list-group">
              @foreach ($errors->all() as $error)
                <li class="list-group-item text-danger">{{$error}}</li>
              @endforeach
            </ul>
          </div>
        @endif
        <form action="{{ isset($category) ? route('categories.update', $category->id) : route('categories.store') }}" class="row g-3" method="POST">
          @csrf
          @if (isset($category))
            @method("PUT")
          @endif
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control-plaintext" name="name" value="{{ isset($category) ? $category->name : '' }}" id="name" placeholder="Enter new category name">
          <button type="submit" class="btn btn-primary mb-3">Submit</button>
        </form>
      </div>
    </div>
</x-app-layout>
