@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">reservation</div>

                <div class="card-body">



{{$to}}
                    {{$from}}
                    {{$guides}}
{{--                    {{$guides[0]->id}}--}}
                    {{$days}}
                    {{100*$days}}

                </div>

                    <input type="text" class="form-control">


                <form method="post" action="/Conformation/{{$guides[0]->id}}/{{$from}}/{{$to}}">
@csrf
                    <button type="submit">Confirm </button>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
