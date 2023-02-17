<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    li > a {
        color: black !important;
        font-size: large;
    }

</style>

<x-app-layout>
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
            <li class="nav-item">
                <a class="nav-link" id="finalize-tab" data-toggle="tab" href="#finalize" role="tab"
                   aria-controls="finalize"
                   aria-selected="false">Finalize</a>
            </li>
        </ul>
        <form method="post" action="/resume">
            @csrf
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="header" role="tabpanel" aria-labelledby="header-tab">

                    <div class="row d-flex justify-content-center">
                        <div class="form-floating mb-3">
                            <input name="name" type="text" class="form-control shadow-sm" id="name" placeholder=""
                                   required>
                            <label for="name" class="control-label">Title</label>
                        </div>

                    </div>
                </div>
                <div class="tab-pane fade" id="work" name="work" role="tabpanel" aria-labelledby="work-tab">
                    <div class="row d-flex justify-content-center">
                        <div class="form-floating mb-3">
                            <textarea name="profession" class="form-control shadow-sm" rows="4" id="profession"
                                      required></textarea>
                            <label for="profession" class="control-label">Description</label>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="education" role="tabpanel" aria-labelledby="education-tab">
                    <div class="row d-flex justify-content-center">

                    </div>
                </div>
                <div class="tab-pane fade" id="skills" role="tabpanel" aria-labelledby="skills-tab">
                    <div class="row d-flex justify-content-center">

                    </div>
                </div>
                <div class="tab-pane fade" id="summary" role="tabpanel" aria-labelledby="summary-tab">
                    <div class="row d-flex justify-content-center">

                    </div>
                </div>
                <div class="tab-pane fade" id="finalize" role="tabpanel" aria-labelledby="finalize-tab">
                    <div class="row d-flex justify-content-center">

                    </div>
                </div>
            </div>
            <button class="btn text-white" style="background-color: #00B074;" type="submit">Create</button>
        </form>
    </div>
</x-app-layout>
