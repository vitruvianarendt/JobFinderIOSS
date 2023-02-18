<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    li > a {
        color: black !important;
        font-size: large;
    }

</style>

<x-app-layout>
    @if(!$cv)
        <div class="container">
            <ul class="nav nav-tabs d-flex justify-content-center my-4" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="header-tab" data-toggle="tab" href="#header" role="tab"
                       aria-controls="header" aria-selected="true">Header</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="work-tab" data-toggle="tab" href="#work" role="tab" aria-controls="work"
                       aria-selected="false">Work History</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="education-tab" data-toggle="tab" href="#education" role="tab"
                       aria-controls="education"
                       aria-selected="false">Education</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="skills-tab" data-toggle="tab" href="#skills" role="tab" aria-controls="skills"
                       aria-selected="false">Skills</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="summary-tab" data-toggle="tab" href="#summary" role="tab"
                       aria-controls="summary"
                       aria-selected="false">Summary</a>
                </li>
            </ul>
            <form method="post" action="/resume">
                @csrf
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="header" role="tabpanel" aria-labelledby="header-tab">
                        <div class="row d-flex justify-content-center mb-3 mt-5">
                            <div class="col-6 form-floating">
                                <input name="name" type="text" class="form-control shadow-sm" id="name" placeholder=""
                                       required>
                                <label for="name" class="control-label px-3">Name & Surname</label>
                            </div>
                            <div class="col-3 form-floating">
                                <input name="age" type="number" class="form-control shadow-sm" id="age" placeholder=""
                                       required>
                                <label for="age" class="control-label px-3">Year of Birth</label>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center mb-3">
                            <div class="form-floating col-9">
                                <input name="profession" type="text" class="form-control shadow-sm" id="profession" placeholder=""
                                       required>
                                <label for="profession" class="control-label px-3">Profession</label>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center mb-3">
                            <div class="col-3 form-floating">
                                <input name="country" type="text" class="form-control shadow-sm" id="country" placeholder=""
                                       required>
                                <label for="country" class="control-label px-3">Country</label>
                            </div>
                            <div class="col-3 form-floating">
                                <input name="city" type="text" class="form-control shadow-sm" id="city" placeholder=""
                                       required>
                                <label for="city" class="control-label px-3">City</label>
                            </div>
                            <div class="col-3 form-floating">
                                <input name="zip" type="number" class="form-control shadow-sm" id="zip" placeholder=""
                                       required>
                                <label for="zip" class="control-label px-3">ZIP Code</label>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center mb-5">
                            <div class="col-6 form-floating">
                                <input name="phone" type="number" class="form-control shadow-sm" id="phone" placeholder=""
                                       required>
                                <label for="phone" class="control-label px-3">Phone Number</label>
                            </div>
                            <div class="col-3 form-floating">
                                <input name="email" type="text" class="form-control shadow-sm" id="email" placeholder=""
                                       required>
                                <label for="email" class="control-label px-3">E-mail</label>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="work" name="work" role="tabpanel" aria-labelledby="work-tab">
                        <div class="row d-flex justify-content-center mb-3 mt-5">
                            <div class="col-9 form-floating">
                            <textarea name="workdescription" type="text" rows="100" style="height: 200px" class="form-control shadow-sm input-lg" id="workdescription" placeholder=""
                                      required></textarea>
                                <label for="workdescription" class="control-label px-3">Work Experience</label>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="education" role="tabpanel" aria-labelledby="education-tab">
                        <div class="row d-flex justify-content-center mb-3 mt-5">
                            <div class="col-9 form-floating">
                                <input name="degree" type="text" class="form-control shadow-sm input-lg" id="degree" placeholder=""
                                       required>
                                <label for="degree" class="control-label px-3">Full Title after Completed Degree</label>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center mb-3 mt-3">
                            <div class="col-6 form-floating">
                                <input name="uni" type="text" class="form-control shadow-sm input-lg" id="uni" placeholder=""
                                       required>
                                <label for="uni" class="control-label px-3">University of Institute</label>
                            </div>
                            <div class="col-3 form-floating">
                                <input name="gradyear" type="number" class="form-control shadow-sm input-lg" id="gradyear" placeholder=""
                                       required>
                                <label for="gradyear" class="control-label px-3">Year of Graduation</label>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="skills" role="tabpanel" aria-labelledby="skills-tab">
                        <div class="row d-flex justify-content-center mb-3 mt-5">
                            <div class="col-9 form-floating">
                            <textarea name="skills" type="text" rows="100" style="height: 200px" class="form-control shadow-sm input-lg" id="skills" placeholder=""
                                      required></textarea>
                                <label for="skills" class="control-label px-3">Skills</label>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="summary" role="tabpanel" aria-labelledby="summary-tab">
                        <div class="row d-flex justify-content-center mb-3 mt-5">
                            <div class="col-9 form-floating">
                            <textarea name="summary" type="text" rows="100" style="height: 200px" class="form-control shadow-sm input-lg" id="summary" placeholder=""
                                      required></textarea>
                                <label for="summary" class="control-label px-3">Summary</label>
                            </div>
                            <div class="col-9 d-flex justify-content-center mt-5">
                                <button class="btn text-white mx-3" style="background-color: #00B074;" type="submit" href="../preview">Create and Preview</button>
                                <a class="btn btn-dark mx-3" href="{{ URL::to('/pdf') }}">Export to PDF</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    @else
        <div class="container">
            <ul class="nav nav-tabs d-flex justify-content-center my-4" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="header-tab" data-toggle="tab" href="#header" role="tab"
                       aria-controls="header" aria-selected="true">Header</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="work-tab" data-toggle="tab" href="#work" role="tab" aria-controls="work"
                       aria-selected="false">Work History</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="education-tab" data-toggle="tab" href="#education" role="tab"
                       aria-controls="education"
                       aria-selected="false">Education</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="skills-tab" data-toggle="tab" href="#skills" role="tab" aria-controls="skills"
                       aria-selected="false">Skills</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="summary-tab" data-toggle="tab" href="#summary" role="tab"
                       aria-controls="summary"
                       aria-selected="false">Summary</a>
                </li>
            </ul>
            <form method="post" action="/resumeUpdate">
                @csrf
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="header" role="tabpanel" aria-labelledby="header-tab">
                        <div class="row d-flex justify-content-center mb-3 mt-5">
                            <div class="col-6 form-floating">
                                <input name="name" type="text" class="form-control shadow-sm" id="name" placeholder=""
                                       value="{{$cv->name}}" required>
                                <label for="name" class="control-label px-3">Name & Surname</label>
                            </div>
                            <div class="col-3 form-floating">
                                <input name="age" type="number" class="form-control shadow-sm" id="age" placeholder=""
                                       value="{{$cv->age}}" required>
                                <label for="age" class="control-label px-3">Year of Birth</label>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center mb-3">
                            <div class="form-floating col-9">
                                <input name="profession" type="text" class="form-control shadow-sm" id="profession" placeholder=""
                                       value="{{$cv->profession}}" required>
                                <label for="profession" class="control-label px-3">Profession</label>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center mb-3">
                            <div class="col-3 form-floating">
                                <input name="country" type="text" class="form-control shadow-sm" id="country" placeholder=""
                                       value="{{$cv->country}}" required>
                                <label for="country" class="control-label px-3">Country</label>
                            </div>
                            <div class="col-3 form-floating">
                                <input name="city" type="text" class="form-control shadow-sm" id="city" placeholder=""
                                       value="{{$cv->city}}" required>
                                <label for="city" class="control-label px-3">City</label>
                            </div>
                            <div class="col-3 form-floating">
                                <input name="zip" type="number" class="form-control shadow-sm" id="zip" placeholder=""
                                       value="{{$cv->zip}}" required>
                                <label for="zip" class="control-label px-3">ZIP Code</label>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center mb-5">
                            <div class="col-6 form-floating">
                                <input name="phone" type="number" class="form-control shadow-sm" id="phone" placeholder=""
                                       value="{{$cv->phone}}" required>
                                <label for="phone" class="control-label px-3">Phone Number</label>
                            </div>
                            <div class="col-3 form-floating">
                                <input name="email" type="text" class="form-control shadow-sm" id="email" placeholder=""
                                       value="{{$cv->email}}" required>
                                <label for="email" class="control-label px-3">E-mail</label>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="work" name="work" role="tabpanel" aria-labelledby="work-tab">
                        <div class="row d-flex justify-content-center mb-3 mt-5">
                            <div class="col-9 form-floating">
                            <textarea name="workdescription" type="text" rows="100" style="height: 200px" class="form-control shadow-sm input-lg" id="workdescription" placeholder=""
                                      required>{{$cv->workdescription}}</textarea>
                                <label for="workdescription" class="control-label px-3">Work Experience</label>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="education" role="tabpanel" aria-labelledby="education-tab">
                        <div class="row d-flex justify-content-center mb-3 mt-5">
                            <div class="col-9 form-floating">
                                <input name="degree" type="text" class="form-control shadow-sm input-lg" id="degree" placeholder=""
                                       value="{{$cv->degree}}" required>
                                <label for="degree" class="control-label px-3">Full Title after Completed Degree</label>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center mb-3 mt-3">
                            <div class="col-6 form-floating">
                                <input name="uni" type="text" class="form-control shadow-sm input-lg" id="uni" placeholder=""
                                       value="{{$cv->uni}}" required>
                                <label for="uni" class="control-label px-3">University of Institute</label>
                            </div>
                            <div class="col-3 form-floating">
                                <input name="gradyear" type="number" class="form-control shadow-sm input-lg" id="gradyear" placeholder=""
                                       value="{{$cv->gradyear}}" required>
                                <label for="gradyear" class="control-label px-3">Year of Graduation</label>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="skills" role="tabpanel" aria-labelledby="skills-tab">
                        <div class="row d-flex justify-content-center mb-3 mt-5">
                            <div class="col-9 form-floating">
                            <textarea name="skills" type="text" rows="100" style="height: 200px" class="form-control shadow-sm input-lg" id="skills" placeholder=""
                                      required>{{$cv->skills}}</textarea>
                                <label for="skills" class="control-label px-3">Skills</label>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="summary" role="tabpanel" aria-labelledby="summary-tab">
                        <div class="row d-flex justify-content-center mb-3 mt-5">
                            <div class="col-9 form-floating">
                            <textarea name="summary" type="text" rows="100" style="height: 200px" class="form-control shadow-sm input-lg" id="summary" placeholder=""
                                      required>{{$cv->summary}}</textarea>
                                <label for="summary" class="control-label px-3">Summary</label>
                            </div>
                            <div class="col-9 d-flex justify-content-center mt-5">
                                <button class="btn text-white mx-3" style="background-color: #00B074;" type="submit" href="../preview">Create and Preview</button>
                                <a class="btn btn-dark mx-3" href="{{ URL::to('/pdf') }}">Export to PDF</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    @endif
</x-app-layout>
