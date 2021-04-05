@extends('auth.masterauth')

@section('title', 'Edit - About us')

@section('content')
    <form method="POST" enctype="multipart/form-data" action="/abouts">
            {{ csrf_field() }}
            @foreach ($about as $info)
    <textarea name="description">{{$info->description}}</textarea>
    @endforeach
    <br>
      <button class="btn btn-success">Edit!</button>
    </form>
  </div>
  @if(session()->has('message'))
  <div class="alert alert-success">
      {{ session()->get('message') }}
  </div>
@endif
  <script src="https://cdn.tiny.cloud/1/em5xk0q3ucn444mikcf0crcac9q2tmam0pehicd2hfksje6b/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
   });
  </script>
@endsection
