@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    
                    <div class="d-flex justify-content-between" >
                        <div>Create Products </div>

                <div class="card-body">
                 <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="name">Name :</label>
                      <input type="text" class="form-control"  id="name" placeholder="Enter product name" name="name" >
                    </div>
                    <div class="form-group">
                      <label for="description">Description :</label>
                      <textarea class="form-control" id="description" placeholder="Enter description" name="description"></textarea>
                       
                    </div>
                    <div class="form-group">
                      <label for="price">Price(Rs.) :</label>
                      <input type="text"  class="form-control"  id="price" placeholder="Enter price" name="price" >
                    </div>
                    <div class="form-group">
                      <label for="image">Image :</label>
                      <input type="file" class="form-control " id="image" placeholder="Choose an image" name="image" >
                    </div>
                    <div class="form-group">
                      <label for="createdate">Createdate :</label>
                      <input type="date"  class="form-control datepicker"  id="createdate"  name="createdate" >
                    </div>    
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
