@extends('layouts.app')
@section('content')
    <div class=" bg-success">
        <img src="{{ url('images/job.jpg') }}"
             width="100%" class="center">
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-start text-white">
                    <div class="col-10 col-lg-6 ml-5">
                        <h1 class="mb-4 bg-success rounded py-md-3 px-md-5 me-3">Advance your career goals with us!</h1>
                        <a href="" class="btn btn-success py-md-3 px-md-5 me-3">Search A Job</a>
                        <a href="" class="btn btn-secondary py-md-3 px-md-5">Find A Talent</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="input-group rounded d-flex justify-content-between">
            <input type="search" class="form-control rounded m-4" placeholder="Keyword" aria-label="Search" aria-describedby="search-addon" />
            <input type="search" class="form-control rounded m-4" placeholder="Category" aria-label="Search" aria-describedby="search-addon" />
            <input type="search" class="form-control rounded m-4" placeholder="Location" aria-label="Search" aria-describedby="search-addon" />

            <span class="input-group-text rounded m-4" id="search-addon">
                <i class="fas fa-search"></i>
            </span>
        </div>
    </div>
@endsection
