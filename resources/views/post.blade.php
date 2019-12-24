@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card mb-3" style="max-width: 840px;">
                        <div class="row no-gutters">
                            <div class="col-md-7">
                                <img src="{{$post->img_url}}" class="card-img" alt="...">
                            </div>
                            <div class="col-md-5">
                                <div class="card-body">
                                    <div class="col-md-2 d-flex">
                                        <img src="{{$user->profile_photo}}" class="card-img rounded-circle mr-4" style="width: auto; height: 55px;">
                                        <h5 style="margin-top: 12px;" class="card-title">{{$user->username}}</h5>
                                    </div>
                                    <div style="">
                                        <hr>
                                        <p class="card-text">This is a wider card with supporting.</p>
                                        <p class="card-text"><small class="text-muted">3 mins ago</small></p>

                                        <form class="border-top"  method="POST" style="position: absolute; bottom: 0;right: -1px; width: 100%;">
                                            @csrf
                                            <input type="hidden" name="post_id" value="{{$post->id}}">
                                            <input type="hidden" name="user_id" value="{{$authUser}}}">
                                            <input class="border-0" placeholder="add a commeent..." name="content" style="margin-left: 10px;" type="text">
                                            <button class="btn btn-link" type="submit" style="text-decoration: none;margin-left: 50px;">Post</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
