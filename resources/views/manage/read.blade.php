    @extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">view articles </div>
    <div class="panel-body">
    <label style='text-align: center;' class="center list-group-item">
        {{$GetAllProductsRecodr->title}}
    </label>
    <p class="list-group-item">
        {{$GetAllProductsRecodr->body}}
    </p>
    <label class="panel-heading">comments  </label>
    <div class="panel-body">
    @foreach($GetAllProductsRecodr->comments as $myproducts )
    <pre class="list-group-item">{{$myproducts->comment}}</pre>
    @endforeach
    <form action="/read/{{$GetAllProductsRecodr->id}}" method="POST">
    {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">new comment</label>
    <input name="newcomment" type="text" class="form-control">
  </div>
  <div class="form-group">
  </div>
  <button type="submit" class="btn btn-primary">add</button>
</form>
    
                    </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    @endsection
