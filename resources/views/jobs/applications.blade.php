<x-app-layout>
    <script>
        $(document).ready(function() {
    $('#mytable').DataTable();
});
    </script>
    <style>
         .outer {
        width: 1px;
        height: 100%;
        margin: auto;
        position: relative;
        overflow: hidden;
    }
    .inner {
        position: absolute;
        width:100%;
        height: 80%;
        background: grey;
        top: 10%;
        box-shadow: 0px 0px 30px 20px grey;
    }
    .list-group-item:active {
        background-color: #00b074 !important;
    }
    .list-group-item:visited{
        background-color: #00b074 !important;
    }
    .list-group-item:hover {
        background-color: #00b074 !important;
        color: white;
    }
    </style>
    <div class="container-fluid" style="margin-top: 2%;width: 90%; margin-left: auto;margin-right:auto;">
        <h1>Recruiter: {{$current_user->name}}</h1>
    </div>
    <div class="container-fluid p-2 shadow-lg" style="margin-top: 2%;width: 90%; margin-left: auto;margin-right:auto;">
        
        <table id="mytable" class="table table-hover">
            <thead>
                <th>Job Title</th> 
                <th>Job Description</th>
                <th>Job Creation Date</th>
                <th>Job Position</th>
                <th>Job City</th>
                <th>Job Type</th>
                <th>Company Phone Number</th>
                <th>Candidate Name</th>
                <th>Candidate Gender</th>
                <th>Candidate Email</th>
                <th>Candidate Phone Number</th>
                <th>Candidate Application Date</th>
                <th>Candidate CV</th>
            </thead>
            <tbody>
                @foreach($data as $d)
                    @if($d->recruiter_id==$current_user->id)
                        <tr>
                        <td>{{$d->job_title}}</td>
                        <td>{{$d->job_description}}</td>
                        <td>{{ \Carbon\Carbon::parse($d->job_creation)->format('d/m/Y')}}</td>
                        <td>{{$d->job_position}}</td>
                        <td>{{$d->city}}</td>
                        <td>{{$d->type}}</td>
                        <td>{{$d->job_phone_nr}}</td>
                        <td>{{$d->name}}</td>
                        <td>{{$d->gender}}</td>
                        <td>{{$d->email}}</td>
                        <td>{{$d->user_phonenr}}</td>
                        <td>{{ \Carbon\Carbon::parse($d->application_date)->format('d/m/Y')}}</td>
                        <td><a href="">Download</a></td>
                        </tr>
                     @endif
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
