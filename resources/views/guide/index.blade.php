@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">guide</div>

                <div class="card-body">





                <form method="post"  action="/guide/time" >
                  <label>Your_id</label>
@csrf
                    <input type="number" name="guides_id" class="form-control">
                    <button type="submit">reservation </button>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
