
@extends('layouts.app')

@section('content')



                <div class="card-header">guide time </div>


{{$info}}
    @if(count($info)===0)
<h1>NO Reservation</h1>
@endif



@endsection
