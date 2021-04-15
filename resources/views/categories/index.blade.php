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
            </tr>
          </thead>
          <tbody>
            @foreach ($categories->all() as $category)
              <tr>
                <th scope="row">{{ $category->id }}</th>
                <td>
                  {{ $category->name }}
                  <a class="btn btn-primary" href="{{ route('categories.edit', $category->id) }}">Edit</a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
</x-app-layout>
