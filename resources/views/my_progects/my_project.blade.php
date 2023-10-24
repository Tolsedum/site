@extends('main')

@section("title")
{{ __("php progects") }}
@endsection

@section("description")
{{ __("Here is a list of my projects written in PHP.") }}
@endsection

@section('main_content')

<div class="container">
  <div class="">
    <div class="col-for-image">
        <a href="/my_project/web">
            <img src="{{ url("public/web/web.webp") }}" height="250px" width="350px" class="rounded float-start" alt="...">    
        </a>
    </div>


    
  </div>
</div>
  
@endsection