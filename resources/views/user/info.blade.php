@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">

            {{--                <div class="card-header">{{$info->name}} Information</div>--}}

            <div class="card m-auto" >
                <div class="card-header">{{$info->name}} Information</div>

                <img src="{{asset('storage').'/'.Auth::user()->Photo}}"
                     style=" " class="card-img-top w-100" alt="..."/>
{{--@else--}}
{{--      <img src="{{$info->Photo}}" style=" " class="card-img-top w-100" alt="..."/>--}}
{{--           @endif--}}

                <div class="card-body text-center" >
                    <h5 class="card-title">Email :{{$info->email}}</h5>
                    <h5 class="card-body">Phone:{{$info->phone}}</h5>
                    <h5 class="card-body">Country:{{$info->country}}</h5>
                    <h5 class="card-body">Gender:{{$info->Gender}}</h5>
                    <form method="post" action="/Userinfo/{{$info->id}}">
                        @csrf
                        <button type="submit" class="btn btn-primary w-100">Edit</button>
                    </form>
                </div>
            </div>


            {{--            <div class="card-body text-dark">--}}
            {{--                <h5 class="card-title">Email :{{$info->email}}</h5>--}}
            {{--                <h5 class="card-body">Phone:{{$info->phone}}</h5>--}}
            {{--                <h5 class="card-body">Country:{{$info->country}}</h5>--}}
            {{--                <h5 class="card-body">Gender:{{$info->Gender}}</h5>--}}

            {{--                <form method="post" action="/Userinfo/{{$info->id}}">--}}
            {{--                    @csrf--}}
            {{--                    <button type="submit" class="btn btn-primary">Edit</button>--}}
            {{--                </form>--}}

            {{--            </div>--}}

        </div>
    </div>
    </div>
    </div>


@endsection
