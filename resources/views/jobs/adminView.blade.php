<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Jobs') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
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
                        <th>Created at</th>
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
                        <th>{{ $job->created_at->format('Y-m-d') }}</th>
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