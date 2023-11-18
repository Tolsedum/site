@extends('main')

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

<section data-bs-theme="light" class="text-material-support d-flex justify-content-start align-items-center text-material-support-image">
    <div class="container-small mb-5 mt-5">
        <div class="row g-4 py-3 ms-10" style="width:55%;">
            {{ $p_1 }}
        </div>
    </div>
    
</section>

<section class="container text-center mt-5">
    @include('components.blocks.assistance_form', ["show_message" => false])
</section>
@endsection


