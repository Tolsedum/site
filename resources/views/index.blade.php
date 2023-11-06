@extends('main')

@section("title")
{{__("Index")}}
@endsection

@section("description")
{{__("Main page")}}
@endsection

@section('main_content')
    
<section class="first-image">


    <div class="index-first-background-image ps-3 ml-3" >
          
        <div class="p-2 bd-highlight " style="text-align:center;">
            <h1>{{__("Project currently being worked on")}},</h1>
            <span class="fs-1">{{ __("it's a Laravel framework site.") }}</span>
        </div>

    </div>

</section>

<section class="lite-image-text-section lite-background-image mt-5">

        <div class="d-flex justify-content-center flex-row mb-3 container">
            <div class="p-2 container" >|{{__('About project')}}|</div>
            <div class="p-2 text-start">
                <p>{{ $p1 }} {{ $p2 }}</p>
                <p>{{ $p3 }} {{ $p4 }}</p>
                <p>{{ $p5 }} {{ $p6 }}</p>
            </div>
        </div>
    
</section>


<section class="first-image mt-5">
    
    <div class="d-flex flex-row-reverse mb-3 index-last-background-image">
        
        <div class="me-10">
            <div class="p-2">scroll bar</div>
        </div>
    </div>
    
    
</section>


@endsection


