<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories Index') }}
        </h2>
    </x-slot>
    @if (session()->has('submit'))
      <div class="alert alert-success" role="alert">
        {{ session()->get('submit') }}
      </div>
    @endif
    <a href="{{ route('categories.create') }}" class="btn btn-primary btn-lg mb-2">add Category</a>
    <div class="card">
      <h5 class="card-header">Categories</h5>
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Name</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($categories->all() as $category)
              <tr>
                <th scope="row">{{ $category->id }}</th>
                <td>
                  {{ $category->name }}
                </td>
                <td>
                  <a class="btn btn-primary" href="{{ route('categories.edit', $category->id) }}">Edit</a>
                  <a class="btn btn-danger" onclick="handleDelete({{ $category->id }})">Delete</a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

    <div class="modal" tabindex="-1" id='categoryDeleteModal'>
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Category delete</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Delete category?</p>
          </div>
          <div class="modal-footer">
            <form action="" method="post" id="categoryDeleteForm">
              @csrf
              @method('DELETE')
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No, go back</button>
              <button type="submit" class="btn btn-primary">Yes, delete</button>              
            </form>
          </div>
        </div>
      </div>
    </div>
</x-app-layout>
