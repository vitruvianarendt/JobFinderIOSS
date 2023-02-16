<x-app-layout>

    
    <link rel="stylesheet" href="https://code.jquery.com/jquery-3.5.1.js">					
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.4/js/dataTables.buttons.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.4/js/buttons.html5.min.js">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.4/js/buttons.print.min.js">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
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
                <th>Candiate Gender</th>
                <th>Candiate Email</th>
                <th>Candiate Phone Number</th>
                <th>Candiate Application Date</th>
                <th>Candidate Cv</th>
            </thead>
            <tbody>
                @foreach($data as $d)
                    @if($d->recruiter_id==$current_user->id)
                        <tr>
                        <td>{{$d->job_title}}</td>
                        <td>{{$d->job_description}}</td>
                        <td>{{$d->job_creation}}</td>
                        <td>{{$d->job_position}}</td>
                        <td>{{$d->city}}</td>
                        <td>{{$d->type}}</td>
                        <td>{{$d->job_phone_nr}}</td>
                        <td>{{$d->name}}</td>
                        <td>{{$d->gender}}</td>
                        <td>{{$d->email}}</td>
                        <td>{{$d->user_phonenr}}</td>
                        <td>{{$d->application_date}}</td>
                        <td><a href="">Download</a></td>
                        </tr>
                     @endif
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
