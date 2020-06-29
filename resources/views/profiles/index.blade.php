@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://scontent-sin6-1.cdninstagram.com/v/t51.2885-19/s150x150/101014117_324587781861712_3660523574667509760_n.jpg?_nc_ht=scontent-sin6-1.cdninstagram.com&_nc_cat=104&_nc_ohc=HSHWgoyKuC4AX_kEXuh&oh=bdc77e94e6b0cd9fe4e5f90e46f0bb2b&oe=5F1FADF6" class="rounded-circle">
        </div>
        <div class="col-9">
            <div class="d-flex pt-5">
                <div class="pr-3"><h1> {{$user->username}}</h1></div>
                <div class="pt-2"> <button type="button" class="btn btn-primary" style="height: 33px;"><strong> Edit Profile </strong> </button> </div>
                <div class="pt-2"><img src="/svg/instagramSettings.svg" style="height: 35px;" class="pl-4"> </div>
            </div>
            <div class="d-flex">
                <div class="pr-3"><strong>{{$user->posts->count()}}</strong> posts</div>
                <div class="pr-3"><strong>27k</strong> followers</div>
                <div class="pr-3"><strong>703</strong> following</div>
            </div>
            <div class="pt-3"> <strong> {{$user->profile->title}} </strong></div>
            <div> {{$user->profile->description}} </div>
            <div> <a href="#"> {{$user->profile->url}} </a> </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <hr>
            <div class="row">

            @foreach($user->posts as $post)
                <div class="col-4 pb-3"> 
                    <img src="/storage/{{$post->image}}" style="height:370px; width:370px;">
                </div>
            @endforeach
            </div>
        </div>
    </div>



</div>
@endsection


