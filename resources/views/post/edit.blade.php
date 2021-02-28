@extends('layouts.app')

@section('content')
            
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="d-flex justify-content-between" >
                        <h2>Edit Post </h2>
                          <div><a href="{{route('post.index')}}" class="btn btn-success">Back</a></div>
                    </div>
                </div>
                </div>

            <div class="now"
     <form method="POST" action="{{ route('post.update',$data->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
      <div class="form-group">
       <label class="col-md-4 text-right">Name</label>
       <div class="col-md-8">
        <input type="text" name="name" value="{{ $data->name }}" class="form-control input-lg" />
       </div>
      </div>
      <br />
      <br />
      <br />
      <div class="form-group">
       <label class="col-md-4 text-right">Description</label>
       <div class="col-md-8">
        <input type="text" name="description" value="{{ $data->decsription }}" class="form-control input-lg" />
       </div>
      </div>
      <br />
      <br />
      <br />
      <div class="form-group">
       <label class="col-md-4 text-right">Price</label>
       <div class="col-md-8">
        <input type="text" name="price" value="{{ $data->price }}" class="form-control input-lg" />
       </div>
      </div>
      <br />
      <br />
      <br />
      <div class="form-group">
       <label class="col-md-4 text-right">Createdate</label>
       <div class="col-md-8">
        <input type="date" name="price" value="{{ $data->createdate }}" class="form-control input-lg" />
       </div>
      </div>
      <br />
      <br />
      <br />
      <div class="form-group">
       <label class="col-md-4 text-right">Select image</label>
       <div class="col-md-8">
        <input type="file" name="image" />
              <img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" width="100" />
                        <input type="hidden" name="hidden_image" value="{{ $data->image }}" />
       </div>
      </div>
      <br /><br /><br />
      <div class="form-group text-center">
       <input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit" />
      </div>
     </form>
     </div>

@endsection

