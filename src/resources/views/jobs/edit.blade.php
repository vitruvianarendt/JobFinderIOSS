<x-app-layout>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css"
        rel="stylesheet" />
    <style>
        label.input-group-text {
            margin: 0 !important;
        }

        .form-group {
            border: 1px solid #ced4da;
            padding: 5px;
            border-radius: 6px;
            width: 100%;
        }

        .form-group:focus {
            color: #212529;
            background-color: #fff;
            border-color: #86b7fe;
            outline: 0;
            box-shadow: 0 0 0 0.25rem rgb(13 110 253 / 25%);
        }

        .form-group input {
            display: inline-block;
            width: auto;
            border: none;
        }

        .form-group input:focus {
            box-shadow: none;
        }

        .bootstrap-tagsinput .tag {
            margin-right: 2px;
            color: #ffffff;
            background: #00B074;
            padding: 3px 7px;
            border-radius: 3px;
        }

        .bootstrap-tagsinput {
            width: 100%;
        }
    </style>
    <div class="container" style="margin-top: 1%">
        <section class="ftco-section">
            <div class="container shadow-lg p-3 mb-5 bg-body rounded">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="wrapper">
                            <div class="row no-gutters">
                                <div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch ">
                                    <div class="contact-wrap w-100 p-md-5 p-4 mb-5">
                                        <h1 class="mb-4">Edit the Job Post</h1>
                                        <form method="post" action="/saveJob/{{$job->id}}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="input-group d-flex mb-3 align-items-stretch">
                                                <label class="input-group-text text-light-emphasis shadow-sm"
                                                    for="inputGroupSelect01">Category</label>
                                                <select name="jobCategory" class="form-select shadow-sm"
                                                    id="inputGroupSelect01" required>
                                                    <option disabled selected value="{{$job->getCategoryName($job->id)}}">{{$job->getCategoryName($job->id)}}</option>
                                                </select>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input name="jobTitle" type="text" class="form-control shadow-sm"
                                                    id="floatingTitle" value="{{$job->title}}" placeholder="" required>
                                                <label for="floatingTitle" class="control-label">Title</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <textarea name="jobDesciption" class="form-control shadow-sm" value="{{$job->description}}" rows="4" id="floatingDescr" required>{{$job->description}}</textarea>
                                                <label for="floatingDescr" class="control-label">Description</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input name="jobSalary" type="number" class="form-control shadow-sm"
                                                    id="floatingSalary" placeholder="" value="{{$job->salary}}" required>
                                                <label for="floatingSalary" class="control-label">Salary</label>
                                            </div>
                                            <div class="form-floating">
                                                <input name="jobPosition" type="text" class="form-control shadow-sm"
                                                    id="floatingPosition" placeholder="" value="{{$job->position}}" required>
                                                <label for="floatingPosition" class="control-label">Position</label>
                                            </div>
                                            <div style="margin: 1em 0em 1em 0em;">
                                                <div class="input-group d-flex mb-3">
                                                    <div class="col-3 d-flex mx-0">
                                                        <span
                                                            class="input-group-text text-light-emphasis control-label">Mobile</span>
                                                        <span class="input-group-text">+389</span>
                                                    </div>
                                                    <div class="col-9">
                                                        <input name="jobPhoneNr" value="{{$job->phone}}" type="text"
                                                            class="form-control d-flex shadow-sm" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="input-group d-flex mb-3">
                                                <label class="input-group-text text-light-emphasis control-label"
                                                    for="inputGroupSelect02">Work type</label>
                                                <select name="jobWorkType" class="form-select" id="inputGroupSelect02"
                                                    required>
                                                    <option disabled selected value="{{$job->type}}">{{$job->type}}</option>
                                                </select>
                                            </div>
                                            <div class="input-group d-flex mb-3">
                                                <label class="input-group-text text-light-emphasis control-label"
                                                    for="inputGroupSelect03">City</label>
                                                <select name="jobCity" class="form-select" id="inputGroupSelect03"
                                                    required>
                                                    <option selected disabled value="{{$job->city}}">{{$job->city}}</option>
                                                </select>
                                            </div>
                                            <button class="btn text-white" style="background-color: #00B074;"
                                                type="submit">Update</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"></script>
</x-app-layout>
