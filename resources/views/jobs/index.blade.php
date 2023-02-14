<style>
    li>a {
        color: black !important;
        font-size: large;
    }

</style>

<x-app-layout>
    <div class="container h-100">
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
                        <ul>
                            <div class="card">
                                <div class="row">
                                    <div class="col-2">
                                        <img src="">
                                    </div>
                                    <div class="col-8">
                                        <h2 style="font-size: 1.5rem" class="pt-6 mt-3">{{ $job->title }}</h2>
                                        <p class="pt-2"
                                           style="display: block; max-width: 98%; ">{{$job->description}}</p>
                                        <br>
                                    </div>
                                    <div class="col-2 text-center align-self-center">
                                        <button class="bg-success px-4 py-3 text-white rounded">Apply Now</button>
                                    </div>
                                </div>
                            </div>
                            <hr class="mb-4">
                        </ul>
                    @empty
                        <p class="text-warning d-flex justify-content-center">No Job Posts Available</p>
                    @endforelse
                </div>
            </div>
            <div class="tab-pane fade" id="site" role="tabpanel" aria-labelledby="site-tab">
                <div class="row d-flex justify-content-center">
                    @forelse($site as $job)
                        <ul>
                            <div class="card">
                                <div class="row">
                                    <div class="col-2">
                                        <img src="">
                                    </div>
                                    <div class="col-8">
                                        <h2 style="font-size: 1.5rem" class="pt-6 mt-3">{{ $job->title }}</h2>
                                        <p class="pt-2"
                                           style="display: block; max-width: 98%; ">{{$job->description}}</p>
                                        <br>
                                    </div>
                                    <div class="col-2 text-center align-self-center">
                                        <button class="bg-success px-4 py-3 text-white rounded">Apply Now</button>
                                    </div>
                                </div>
                            </div>
                            <hr class="mb-4">
                        </ul>
                    @empty
                        <p class="text-warning d-flex justify-content-center">No Job Posts Available</p>
                    @endforelse
                </div>
            </div>
            <div class="tab-pane fade" id="remote" role="tabpanel" aria-labelledby="remote-tab">
                <div class="row d-flex justify-content-center">
                    @forelse($remote as $job)
                        <ul>
                            <div class="card">
                                <div class="row">
                                    <div class="col-2">
                                        <img src="">
                                    </div>
                                    <div class="col-8">
                                        <h2 style="font-size: 1.5rem" class="pt-6 mt-3">{{ $job->title }}</h2>
                                        <p class="pt-2"
                                           style="display: block; max-width: 98%; ">{{$job->description}}</p>
                                        <br>
                                    </div>
                                    <div class="col-2 text-center align-self-center">
                                        <button class="bg-success px-4 py-3 text-white rounded">Apply Now</button>
                                    </div>
                                </div>
                            </div>
                            <hr class="mb-4">
                        </ul>
                    @empty
                        <p class="text-warning d-flex justify-content-center">No Job Posts Available</p>
                    @endforelse
                </div>
            </div>
            <div class="tab-pane fade" id="hybrid" role="tabpanel" aria-labelledby="hybrid-tab">
                <div class="row d-flex justify-content-center">
                    @forelse($hybrid as $job)
                        <ul>
                            <div class="card">
                                <div class="row">
                                    <div class="col-2">
                                        <img src="">
                                    </div>
                                    <div class="col-8">
                                        <h2 style="font-size: 1.5rem" class="pt-6 mt-3">{{ $job->title }}</h2>
                                        <p class="pt-2"
                                           style="display: block; max-width: 98%; ">{{$job->description}}</p>
                                        <br>
                                    </div>
                                    <div class="col-2 text-center align-self-center">
                                        <button class="bg-success px-4 py-3 text-white rounded">Apply Now</button>
                                    </div>
                                </div>
                            </div>
                            <hr class="mb-4">
                        </ul>
                    @empty
                        <p class="text-warning d-flex justify-content-center">No Job Posts Available</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
