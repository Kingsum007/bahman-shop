@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="/loans" method="post">

                @csrf
                <input type="text" name="name" id="">
            </form>
        </div>
    </div>
</div>
@endsection
