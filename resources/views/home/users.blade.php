<x-app-layout>
    
    
    <body>
        <div class="container p-2">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 gutters-sm">
                @foreach($users as $user)
                <div class="col mb-3">
                    <div class="card">
                      <img src="{{url('images/cardtopimg.png')}}" alt="Cover" class="card-img-top">
                      <div class="card-body text-center">
                        {{$usergenderpic=null}}
                        @if($user->gender==0)
                        <img src="{{url('images/male.png')}}" style="width:100px;margin-top:-65px" alt="User" class="img-fluid img-thumbnail rounded-circle border-0 mb-3">
                        @else
                        <img src="{{url('images/female.png')}}" style="width:100px;margin-top:-65px" alt="User" class="img-fluid img-thumbnail rounded-circle border-0 mb-3">
                        @endif
                        <h5 class="card-title">{{$user->name}}</h5>
                        <h5 class="card-title">{{$user->email}}</h5>
                        <div class="card-body">
                        <p>{{$user->gender}}</p>   
                        <p>Phone Number: {{$user->phone}}<br/>Joined: {{$user->created_at->diffForHumans()}}</p>
                        <p class="text-secondary mb-1">
                            @if($user->current_position==null)
                                Unemployed
                            @else
                                {{$user->current_position}}
                            @endif
                        </p>
                        </div> 
                      </div>
                      <div class="card-footer">
                      </div>
                    </div>
                  </div>
                @endforeach
            </div>
        </div>
    </body>
</x-app-layout>