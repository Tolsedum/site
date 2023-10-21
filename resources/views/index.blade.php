@extends('main')

@section("title")
{{__("Index")}}
@endsection

@section("description")
{{__("Main page")}}
@endsection

@section('main_content')
    <h1>{{__("Template index")}}</h1><br>
    {{ app()->getLocale() }}
@endsection