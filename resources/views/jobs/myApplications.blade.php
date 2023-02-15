<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<x-app-layout>
    <div class="container">
        <div class="tab-content" id="myTabContent">
                <div class="row d-flex justify-content-center">
                    <x-slot name="header">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            {{ __('My Applications') }}
                        </h2>
                    </x-slot>
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
                                     <p><i class='fas fa-location-arrow' style="color:#00b074; font-size: 1.3em;"></i> {{$job->city}} &nbsp;<i class="fa fa-money" style="color:#00b074" aria-hidden="true"></i> {{$job->salary}}€ <br><i class='far fa-calendar-alt' style="color:#00b074"></i> {{$job->created_at->diffForHumans()}} </p>
                                    </div>
                                    <div class="col-2 text-center align-self-center">
                                        <button class="px-4 py-3 text-white rounded" style="background-color: #305d4e" disabled>Applied</button>
                                    </div>
                                </div>
                            </div>
                            <hr class="mb-4">
                        </ul>
                    @empty
                        <p class="text-warning d-flex justify-content-center">You have not applied to any Jobs.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
