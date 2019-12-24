@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="mb-3" style="max-width: 523px; margin-top: 23px;">
                    <div class="row no-gutters">
                        <div class="col-md-3">
                            <img src="{{$user->profile_photo}}" class="card-img rounded-circle" style="max-height: 150px; max-width: 150px;">
                        </div>
                        <div class="col-md-9">
                            <div class="card-body ">
                                <h5 class="card-title" style="margin-bottom: 22px">{{$user->username}}</h5>
                                <p>
                                    <span class="mr-4"><b>{{$postsCount}}</b> posts</span>
                                    <span class="mr-4"><b>{{$followers}}</b> followers</span>
                                    <span class="mr-4"><b>{{$following}}</b> following</span>
                                </p>
                                <p class="card-text"><strong>{{$user->full_name}}</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
@php

@endphp
                <div class="d-flex flex-wrap">
                        @foreach($posts as $post)
                        <a href="/p/{{$post->id}}">
                            <div style=" background:url('{{$post->img_url}}') bottom center no-repeat; height: 223px; width:223px; margin: 10px;"></div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
