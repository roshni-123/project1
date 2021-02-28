@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between" >
                        <h2>Product List</h2>
<div align="left">
<a href="{{route('post.create')}}" class="btn btn-success btn-sm">Add</a>
</div>
</div>
</div>

<table class="table table-bordered table-striped">
 <tr>
 <th>ID</th>
  <th>Name</th>
  <th>Description</th>
  <th>price</th>
  <th>Createdate</th>
  <th>Image</th>
  <th>Action</th>
 </tr>
 @foreach($data as $row)
  <tr>
  <td>{{ $row->id }}</td>
  <td>{{ $row->name }}</td>
   <td>{{ $row->description }}</td>
   <td>{{ $row->price }}</td>
   <td>{{ $row->createdate }}</td>
   <td><img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail" width="75" /></td>
   <td>
   <a href="{{ route('post.edit',$row->id) }}" class="btn btn-primary">Edit</a>
   <form action="{{ route('post.destroy',$row->id) }}" method="POST">
   @csrf
   @method('DELETE')
   <button type="submit" class="btn btn-danger">DELETE</button>
   </form>
   </td>
  </tr>
 @endforeach
</table>
</div>
</div>
</div>

{!! $data->links() !!}
@endsection
