@extends('main')

@section("title")
{{__("Assistance")}}
@endsection

@section("description")

@endsection

@section('main_content')
    
<section class="first-image support-first-background-image">

    <div class="d-flex justify-content-end align-items-center">
        <div class="" style="text-align:center;">
            <h3>
                {{$h_1}}
            </h3>
            <h3>
                {{$h_2}}
            </h3>
        </div>
    </div>

</section>

<section class="container text-center mt-5">
    @include('components.blocks.assistance_form')
</section>
@endsection


