<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    li>a {
        color: black !important;
        font-size: large;
    }

    .bootstrap-tagsinput .tag {
            margin-right: 2px;
            color: #ffffff;
            background: #00b074;
            padding: 3px 7px;
            border-radius: 3px;
    }
    .bootstrap-tagsinput {
         width: 100%;
    }
</style>

<x-app-layout>
    @if($city != null)
    <div class="container">
        <div class="row d-flex justify-content-center">
            <h3 class="d-flex justify-content-center my-4">All Jobs in {{$city}}</h3>
            @forelse($cityJobs as $job)
            <form method="post" action="/applyApplication/{{$job->id}}">
                @csrf
                <ul>
                    <div class="card">
                        <div class="row">
                            <div class="col-3">
                                <div class="d-flex justify-content-center align-items-center p-2" style="height: 100%;">
                                            @if($job->img_path==null)
                                            <img src="{{url('images/jobfinderlogo.png')}}" alt="" style="max-width: 200px;max-height: 200px">
                                            @else
                                            <img class="shadow" src="{{asset('images/job_images/'.$job->img_path)}}" alt="" style="max-width: 200px;max-height: 200px">
                                            @endif
                                </div>
                            </div>
                            <div class="col-7">
                                <h2 style="font-size: 1.5rem" class="pt-6 mt-3">{{ $job->title }}</h2>
                                <p class="pt-2"
                                   style="display: block; max-width: 98%; ">{{$job->description}}</p>
                                <br>
                                <p><i class='fas fa-location-arrow' style="color:#00b074; font-size: 1.3em;"></i> {{$job->city}} &nbsp;<i class="fa fa-money" style="color:#00b074" aria-hidden="true"></i> {{$job->salary}}€ &nbsp;<i class='far fa-calendar-alt' style="color:#00b074"></i> {{$job->created_at->diffForHumans()}} </p>
                                                <hr style="width: 90%;">
                                                @if($job->tags->count())
                                                <strong>Tags:</strong>
                                                @foreach($job->tags as $tag)
                                                   <label class="badge" style="background-color: #00b074">{{ $tag->name }}</label>
                                                @endforeach
                                                @endif
                            </div>
                            @if(Auth::user() && Auth::user()->user_type == 'Personal_Account')
                                <div class="col-2 text-center align-self-center">
                                    @if($job->userHasApplied())
                                        <button class="px-4 py-3 text-white rounded" style="background-color: #305d4e" disabled>Applied</button>
                                    @else
                                        <button type="submit" class="px-4 py-3 text-white rounded" style="background-color: #00b074">Apply Now</button>
                                    @endif
                                </div>
                            @endif
                        </div>
                    </div>
                    <hr class="mb-4">
                </ul>
            </form>
            @empty
                <p class="text-warning d-flex justify-content-center">No Job Posts Available</p>
            @endforelse
        </div>
    </div>
    @else
    <div class="container">
        <ul class="nav nav-tabs d-flex justify-content-center my-4" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="featured-tab" data-toggle="tab" href="#featured" role="tab"
                   aria-controls="featured" aria-selected="true">Featured</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="site-tab" data-toggle="tab" href="#site" role="tab" aria-controls="site"
                   aria-selected="false">On-Site Jobs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="remote-tab" data-toggle="tab" href="#remote" role="tab" aria-controls="remote"
                   aria-selected="false">Remote Jobs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="hybrid-tab" data-toggle="tab" href="#hybrid" role="tab" aria-controls="hybrid"
                   aria-selected="false">Hybrid Jobs</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="featured" role="tabpanel" aria-labelledby="featured-tab">
                <div class="row d-flex justify-content-center">
                    @forelse($jobs as $job)
                    <form method="post" action="/applyApplication/{{$job->id}}">
                        @csrf
                        <ul>
                            <div class="card">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="d-flex justify-content-center align-items-center p-2" style="height: 100%;">
                                            @if($job->img_path==null)
                                            <img src="{{url('images/jobfinderlogo.png')}}" alt="" style="max-width: 200px;max-height: 200px">
                                            @else
                                            <img class="shadow" src="{{asset('images/job_images/'.$job->img_path)}}" alt="" style="max-width: 200px;max-height: 200px">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <h2 style="font-size: 1.5rem" class="pt-6 mt-3">{{ $job->title }}</h2>
                                        <p class="pt-2"
                                           style="display: block; max-width: 98%; ">{{$job->description}}</p>
                                        <br>
                                        <p><i class='fas fa-location-arrow' style="color:#00b074; font-size: 1.3em;"></i> {{$job->city}} &nbsp;<i class="fa fa-money" style="color:#00b074" aria-hidden="true"></i> {{$job->salary}}€ &nbsp;<i class='far fa-calendar-alt' style="color:#00b074"></i> {{$job->created_at->diffForHumans()}} </p> 
                                                <hr style="width: 90%;">
                                                @if($job->tags->count())
                                                <strong>Tags:</strong>
                                                @foreach($job->tags as $tag)
                                                   <label class="badge" style="background-color: #00b074">{{ $tag->name }}</label>
                                                @endforeach
                                                @endif
                                    </div>
                                    @if(Auth::user() && Auth::user()->user_type == 'Personal_Account')
                                        <div class="col-2 text-center align-self-center">
                                            @if($job->userHasApplied())
                                                <button class="px-4 py-3 text-white rounded" style="background-color: #305d4e" disabled>Applied</button>
                                            @else
                                                <button type="submit" class="px-4 py-3 text-white rounded" style="background-color: #00b074">Apply Now</button>
                                            @endif
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <hr class="mb-4">
                        </ul>
                    </form>
                    @empty
                        <p class="text-warning d-flex justify-content-center">No Job Posts Available</p>
                    @endforelse
                </div>
            </div>
            <div class="tab-pane fade" id="site" role="tabpanel" aria-labelledby="site-tab">
                <div class="row d-flex justify-content-center">
                    @forelse($site as $job)
                    <form method="post" action="/applyApplication/{{$job->id}}">
                        @csrf
                        <ul>
                            <div class="card">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="d-flex justify-content-center align-items-center p-2" style="height: 100%;">
                                            @if($job->img_path==null)
                                            <img src="{{url('images/jobfinderlogo.png')}}" alt="" style="max-width: 200px;max-height: 200px">
                                            @else
                                            <img class="shadow" src="{{asset('images/job_images/'.$job->img_path)}}" alt="" style="max-width: 200px;max-height: 200px">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <h2 style="font-size: 1.5rem" class="pt-6 mt-3">{{ $job->title }}</h2>
                                        <p class="pt-2"
                                           style="display: block; max-width: 98%; ">{{$job->description}}</p>
                                        <br>
                                         <p><i class='fas fa-location-arrow' style="color:#00b074; font-size: 1.3em;"></i> {{$job->city}} &nbsp;<i class="fa fa-money" style="color:#00b074" aria-hidden="true"></i> {{$job->salary}}€ &nbsp;<i class='far fa-calendar-alt' style="color:#00b074"></i> {{$job->created_at->diffForHumans()}} </p>
                                                <hr style="width: 90%;">
                                                 @if($job->tags->count())
                                                <strong>Tags:</strong>
                                                 @foreach($job->tags as $tag)
                                                     <label class="badge" style="background-color: #00b074">{{ $tag->name }}</label>
                                                 @endforeach
                                                 @endif
                                        </div>
                                    @if(Auth::user() && Auth::user()->user_type == 'Personal_Account')
                                        <div class="col-2 text-center align-self-center">
                                            @if($job->userHasApplied())
                                                <button class="px-4 py-3 text-white rounded" style="background-color: #305d4e" disabled>Applied</button>
                                            @else
                                                <button type="submit" class="px-4 py-3 text-white rounded" style="background-color: #00b074">Apply Now</button>
                                            @endif
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <hr class="mb-4">
                        </ul>
                    </form>
                    @empty
                        <p class="text-warning d-flex justify-content-center">No Job Posts Available</p>
                    @endforelse
                </div>
            </div>
            <div class="tab-pane fade" id="remote" role="tabpanel" aria-labelledby="remote-tab">
                <div class="row d-flex justify-content-center">
                    @forelse($remote as $job)
                    <form method="post" action="/applyApplication/{{$job->id}}">
                        @csrf
                        <ul>
                            <div class="card">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="d-flex justify-content-center align-items-center p-2" style="height: 100%;">
                                            @if($job->img_path==null)
                                            <img src="{{url('images/jobfinderlogo.png')}}" alt="" style="max-width: 200px;max-height: 200px">
                                            @else
                                            <img class="shadow" src="{{asset('images/job_images/'.$job->img_path)}}" alt="" style="max-width: 200px;max-height: 200px">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <h2 style="font-size: 1.5rem" class="pt-6 mt-3">{{ $job->title }}</h2>
                                        <p class="pt-2"
                                           style="display: block; max-width: 98%; ">{{$job->description}}</p>
                                        <br>
                                          <p><i class='fas fa-location-arrow' style="color:#00b074; font-size: 1.3em;"></i> {{$job->city}} &nbsp;<i class="fa fa-money" style="color:#00b074" aria-hidden="true"></i> {{$job->salary}}€ &nbsp;<i class='far fa-calendar-alt' style="color:#00b074"></i> {{$job->created_at->diffForHumans()}} </p>
                                          <hr style="width: 90%">
                                             @if($job->tags->count())
                                                <strong>Tags:</strong>
                                                 @foreach($job->tags as $tag)
                                                  <label class="badge" style="background-color: #00b074">{{ $tag->name }}</label>
                                                 @endforeach
                                             @endif
                                        </div>
                                    @if(Auth::user() && Auth::user()->user_type == 'Personal_Account')
                                        <div class="col-2 text-center align-self-center">
                                            @if($job->userHasApplied())
                                                <button class="px-4 py-3 text-white rounded" style="background-color: #305d4e" disabled>Applied</button>
                                            @else
                                                <button type="submit" class="px-4 py-3 text-white rounded" style="background-color: #00b074">Apply Now</button>
                                            @endif
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <hr class="mb-4">
                        </ul>
                    </form>
                    @empty
                        <p class="text-warning d-flex justify-content-center">No Job Posts Available</p>
                    @endforelse
                </div>
            </div>
            <div class="tab-pane fade" id="hybrid" role="tabpanel" aria-labelledby="hybrid-tab">
                <div class="row d-flex justify-content-center">
                    @forelse($hybrid as $job)
                    <form method="post" action="/applyApplication/{{$job->id}}">
                        @csrf
                        <ul>
                            <div class="card">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                                            @if($job->img_path==null)
                                            <img src="{{url('images/jobfinderlogo.png')}}" alt="" style="max-width: 200px;max-height: 200px">
                                            @else
                                            <img class="shadow" src="{{asset('images/job_images/'.$job->img_path)}}" alt="" style="max-width: 200px;max-height: 200px">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <h2 style="font-size: 1.5rem" class="pt-6 mt-3">{{ $job->title }}</h2>
                                        <p class="pt-2"
                                           style="display: block; max-width: 98%; ">{{$job->description}}</p>
                                        <br>
                                        <p><i class='fas fa-location-arrow' style="color:#00b074; font-size: 1.3em;"></i> {{$job->city}} &nbsp;<i class="fa fa-money" style="color:#00b074" aria-hidden="true"></i> {{$job->salary}}€ &nbsp;<i class='far fa-calendar-alt' style="color:#00b074"></i> {{$job->created_at->diffForHumans()}} </p>
                                        <hr style="width: 90%;">
                                            @if($job->tags->count())
                                                 <strong>Tags:</strong>
                                                 @foreach($job->tags as $tag)
                                                 <label class="badge" style="background-color: #00b074">{{ $tag->name }}</label>
                                                 @endforeach
                                             @endif
                                    </div>
                                    @if(Auth::user() && Auth::user()->user_type == 'Personal_Account')
                                        <div class="col-2 text-center align-self-center">
                                            @if($job->userHasApplied())
                                                <button class="px-4 py-3 text-white rounded" style="background-color: #305d4e" disabled>Applied</button>
                                            @else
                                                <button type="submit" class="px-4 py-3 text-white rounded" style="background-color: #00b074">Apply Now</button>
                                            @endif
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <hr class="mb-4">
                        </ul>
                    </form>
                    @empty
                        <p class="text-warning d-flex justify-content-center">No Job Posts Available</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
    @endif
</x-app-layout>
