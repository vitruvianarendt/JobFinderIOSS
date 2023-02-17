<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Jobs') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-12">
            @if(session()->get('success'))
                <div class="alert alert-success">
                {{ session()->get('success') }}  
                </div>
            @endif
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>Category</th>
                        <th>Title</th>
                        <th>Salary</th>
                        <th>Position</th>
                        <th>Phone</th>
                        <th>Type</th>
                        <th>City</th>
                        <th>User</th>
                        <th>Tags</th>
                        <th>Created at</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($jobs as $job)
                    <tr>
                        <td>{{ $job->getCategoryName() }}</td>
                        <td>{{ $job->title }}</td>
                        <td>{{ $job->salary }}</td>
                        <td>{{ $job->position }}</td>
                        <td>{{ $job->phone }}</td>
                        <td>{{ $job->type }}</td>
                        <td>{{ $job->city }}</td>
                        <td>{{ $job->getUserName() }}</td>
                        <td>
                            @foreach($job->tags as $tag)
                                <small><label class="badge" style="background-color: #00b074">{{ $tag->name }}</label></small>
                            @endforeach
                        </td>
                        <th>{{ $job->created_at->format('Y-m-d') }}</th>
                        <th class="d-flex">
                            <form action="/admin/deleteJob/{{ $job->id }}" method="post">
                                @csrf
                                <button class="btn btn-sm btn-danger m-1"><i class="fa-solid fa-trash-can m-2"></i></button>
                            </form>
                            <a href="/editJob/{{ $job->id }}" class="btn btn-sm btn-primary m-1"><i class="fa-solid fa-pen m-2"></i></a>
                        </th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
</script>