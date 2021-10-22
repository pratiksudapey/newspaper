@extends('backend.template.app')
@section('link')
    createCategory
@endsection
@section('content')
    <form action="/category" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" id="name" class="form-control" placeholder="name" aria-describedby="helpId">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection