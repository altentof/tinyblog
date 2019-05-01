@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">add articles
 </div>

                <div class="panel-body">
<h1>  addarticle  </h1>
    <form action="add" method="POST">
    {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">title</label>
    <input name="title" type="text" class="form-control">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">body</label>
    <textarea name="body"  type="text" class="form-control" >
    </textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
            </div>
        </div>
    </div>
</div>
@endsection
