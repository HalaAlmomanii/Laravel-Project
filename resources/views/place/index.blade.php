@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        {{$place}}

                    </div>
                    <form method="post" action="{{route('filter',$place[0]->id)}}">
                        @csrf
                        <select name="language_id" class="form-control">
                            <option value="1"> Arabic</option>
                            <option value="2">English</option>
                            <option value="3">French</option>

                        </select>


                        from
                        <input type="date"  name="from">

                        to
                        <input type="date"  name="to">
                        <button type="submit">search</button>
                    </form>


{{--                    {{$availble}}--}}
                    @if(isset($availble))
{{--                            {{dd($request['to'])}}--}}
                        @if(count($availble)>0)
{{--{{$x=$availble->guide}}--}}
{{--                        <h1>{{$x}}</h1>--}}
             @foreach($availble as $data)
                                @foreach($data->guide as $one)
                 <h1>{{$one->name}}</h1>
                                <form method="get" action="/Reservation/{{$one->id}}/{{$place[0]->id}}/{{$request['from']}}/{{$request['to']}}" >
                                    @csrf

                                  <button type="submit">Book</button>
                                </form>
                                    @endforeach
{{--                 <button type="submit">Book</button>--}}
                            @endforeach



@else
                            <h1>no reservation </h1>
                        @endif
                    @endif



                </div>
</div>
</div>
@endsection
