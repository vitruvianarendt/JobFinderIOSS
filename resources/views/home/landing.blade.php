@extends('layouts.app')
@section('content')
    <div class=" bg-success">
        <img src="{{ url('images/job.jpg') }}"
             width="100%" class="center">
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-start text-white">
                    <div class="col-4" style="margin-top: 18%">
                        <a href="" class="btn btn-success py-md-3 px-md-5 me-3 mb-5">Search A Job</a>
                        <br>
                        <a href="" class="btn btn-secondary py-md-3 px-md-5 mb-5">Find A Talent</a>
                    </div>
                    <div class="col-8">
                        <img src="{{ url('svg/macedoniaLow.svg') }}" style="width: 1106px; height: 600px; padding: 0px; touch-action: none;">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
