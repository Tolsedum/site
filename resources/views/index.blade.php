@extends('main')

@section("title")
{{__("Index")}}
@endsection

@section("description")
{{__("Main page")}}
@endsection

@section('main_content')
    
<section class="first-image">


    <div class="index-first-background-image mb-3" 
        style="display: flex; align-items: center;
  justify-content: center; background:linear-gradient(rgba(28, 28, 29, 0), rgba(28, 28, 29, 0)), url(web/project_site/1600/side_view_gardener_holding_little_tree.webp) center center / cover no-repeat;">

          
            <div class="p-2 bd-highlight " style="text-align:center;">
                <h1>{{__("Current project")}}</h1>
                <span>{{ __('Site on Laravel framework') }}</span>
            </div>

        
    </div>

</section>
    
@endsection


