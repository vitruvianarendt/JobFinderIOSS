<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="/createCategory" class="btn btn-primary mb-3">Add Category +</a>
            @if(session()->get('success'))
                <div class="alert alert-success">
                {{ session()->get('success') }}  
                </div>
            @endif
            <table class="table" id="category-table">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <th scope="row">{{ $category->id }}</th>
                            <td>{{ $category->name }}</td>
                            <td class="d-flex">
                                <form action="/deleteCategory/{{$category->id}}" method="post">
                                    @csrf
                                    <button class="btn btn-sm btn-danger m-1"><i class="fa-solid fa-trash-can m-2"></i></button>
                                </form>
                                <a href="/editCategory/{{ $category->id }}" class="btn btn-sm btn-primary m-1"><i class="fa-solid fa-pen m-2"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>

</x-app-layout>
<script>
$(document).ready(function () {
    $('#category-table').DataTable();
});
</script>