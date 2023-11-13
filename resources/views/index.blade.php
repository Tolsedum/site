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
            <div class="p-2 container" style="min-width: 196px;">|{{__('About project')}}|</div>
            <div class="p-2 text-start">
                <p>{{ $p1 }} {{ $p2 }}</p>
                <p>{{ $p3 }} {{ $p4 }}</p>
                <p>{{ $p5 }} {{ $p6 }}</p>
            </div>
        </div>
    
</section>

<section class="container mt-5" data-bs-theme="light">
    @include('components.blocks.projrct_execution_plan')
</section>

<section class="d-flex  justify-content-center" style="background-color: black;">
                    
    <div class="p-2 index-last-background-image d-flex align-items-center justify-content-center">
        <h5>{{$h5}}</h5>
    </div>

</section>


@endsection


