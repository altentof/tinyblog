@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">view articles </div>

                <div class="panel-body">
@foreach( $GetAllProductsRecodr as $myproducts )
                <a href="/read/{{$myproducts->id}}" class="list-group-item">{{$myproducts->title}}</a>
@endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
