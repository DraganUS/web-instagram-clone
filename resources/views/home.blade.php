@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center flex-wrap-reverse">
        <div class="col-md-7">
                <div class="card-body">
                    @foreach($posts as $post)
                        <div class="card mb-3">
                            <div class="card-body d-flex align-items-center" style="max-height: 60px;">
                                <a href="/{{$post->user->id}}"><img src="{{$post->user->profile_photo}}" class="rounded-circle float-left mr-2" style="max-height: 32px" alt=""></a>
                                <div class="card-title">
                                    <a href="/{{$post->user->id}}" style="text-decoration: none; color: #0b0b0b"><h5 style="margin-top: 22px; margin-bottom: 0;">{{$post->user->username}}</h5></a>
                                    <small>{{$post->place}}</small>
                                </div>
                            </div>
                            <img src="{{$post->img_url}}" class="img-fluid card-img-top" alt="" style="max-height: 614px;">
                            <div class="card-body">
                                <p class="card-text">{{ $post->title }}</p>
                                <p class="card-text">
                                    <small class="text-muted">
                                        {{ date('i', ( time() - strtotime( $post->updated_at))) }}
                                        MINUTES AGO
                                    </small>
                                </p>
                            </div>
                        </div>
                     @endforeach
                    {{ $posts->links() }}
                </div>
        </div>
        <div class="col-md-3">

            <div class="card-body">
                <a href="/{{$authUser->id}}" style="text-decoration: none;">
                    <div>
                        <img class="rounded-circle mr-2 mt-2" style="float: left; max-height: 40px;" src="{{$authUser->profile_photo}}"  alt="">
                        <h5 class="mb-0 pt-2" style="color: #262626">{{$authUser->username}}</h5>
                        <smal style="color: #999;">{{$authUser->full_name}}</smal>
                    </div>
                </a>
            </div>

            <div class="card mt-3 mb-3" style="height: 182px; overflow: hidden auto; background: #fff;">
                @foreach($stories as $story)
                    @if($authUser->id !== $story->user->id)

                        <div data-toggle="modal" data-target=".bd-example-modal-lg" class="ml-3">
                            <img class="rounded-circle mr-2 mt-2" style="float: left; max-height: 35px;" src="{{$story->user->profile_photo}}"  alt="">
                            <h5 class="mb-0 pt-2" style="color: #262626">{{$story->user->username}}</h5>
                            <smal  style="color: #999; font-size: 10px;"> {{ date('h', ( time() - strtotime( $story->updated_at))) }}
                                HOURS AGO</smal>
                        </div>
                        <div class="modal container-fluid  bd-example-modal-lg" tabindex="-1" role="dialog"  aria-hidden="true">
                            <div class="modal-dialog container-fluid">
                                <div class="modal-content  p-4">
                                    <h2>{{$story->user->username}}</h2>
                                    <img src="https://lorempixel.com/230/300/people/?23275" alt="">
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
