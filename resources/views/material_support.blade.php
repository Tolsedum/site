@extends('main')

@section("title")
{{__("Support")}}
@endsection

@section("description")

@endsection

@section('main_content')
    
<section class="first-image support-first-background-image">

    <div class="d-flex justify-content-end align-items-center">
        <div class="p-2" style="text-align:center;">
        <p >
            Ваше сердце - сила перемен:
        </p>
        <p>
            финансовая поддержка, чтобы изменить мир к лучшему!
        </p>
        </div>
    </div>

</section>

<section class="container text-center mt-5">
    
    <div class="row align-items-start">
        <div class="col">
            <form>
                <div class="mb-3">
                    <!-- <label for="exampleFormControlInput1" class="form-label">Email address</label> -->
                    <input type="email" class="form-control bg-dark text-bg-dark dark-placeholder-color" id="exampleFormControlInput1" placeholder="{{ __('Enter your email')}}">

                </div>
                <div class="mb-3">
                    <!-- <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label> -->
                    <textarea placeholder="{{ __('Enter your message') }}" class="bg-dark text-bg-dark form-control dark-placeholder-color" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="mb-3 form-check text-start">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">{{__('Send me a newsletter')}}</label>
                </div>
                <div class="mb-3 form-check text-end">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </form>
        </div>
        <div class="col mt-4">
            {{ __('I would be very grateful for moral and material support.') }} <br>
            <a href="https://yoomoney.ru/to/410014233800351" class="btn btn-primary">{{ __('Assistance')}}</a> 
        </div>
    </div>
</section>
@endsection


