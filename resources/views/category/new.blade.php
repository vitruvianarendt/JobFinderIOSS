<x-app-layout>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="row">
                <div class="col-sm-4 offset-sm-2">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                   <h1 class="">Add Category</h1>
                    <div>
                        <form method="post" action="/createCategory">
                            @csrf
                            <div class="mb-3">
                                <label for="category_name" class="form-label control-label">Category Name: </label>
                                <input type="text" class="form-control" id="category_name" name="category_name" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
               </div>
            </div>
        </div>
    </div>
</x-app-layout>
