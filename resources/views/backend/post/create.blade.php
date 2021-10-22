@extends('backend.template.app')
@section('link')
    createPost
@endsection
@section('content')
    <form action="/post" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" name="title" id="title" class="form-control" placeholder="title" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <label for="description">description</label>
          <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
            <label for="category">Select category</label>
            <select class="form-control" id="category" name="category">
              @foreach ($categories as $category)
              <option value="{{ $category->id }}">{{$category->name}}</option>
              @endforeach       
              </select>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control-file" name="image" id="image" placeholder="" aria-describedby="fileHelpId">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection