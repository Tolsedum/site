@extends('main')

@section("title")
{{__("Resume")}}
@endsection

@section("description")
{{ __("A page describing my experiences and plans, for self-development") }}
@endsection

@section('main_content')


<section class="first-image">

    <div class="about-first-background-image  mb-3">
        
            <div class="p-2 bd-highlight" style="text-align:center;">
                <h1>{{__("Welcome to my personal website")}}</h1>
                <span>{{ $p1 }}</span>
            </div>
        
    </div>

</section>

<section class="lite-image-text-section about-lite-background-image" data-bs-theme="light">
    <div class="flex-column container">
        <div class="row g-4 py-3 ">
            <div class="col d-flex align-items-start justify-content-center">
                <p style="padding:50px 0px 50px 0px;">
                    {{ $p2 }}<br>
                    {{ $p2_1 }}<br>
                    {{ $p2_2 }}<br>
                    {{ $p2_3 }}
                </p>
            </div>
        </div>
    </div>
    <div class="flex-column ">
        
    <div class="container">
        <h4 style="margin: 25px 0px 25px 0px;">{{ $h_1 }}:</h4>

        <div class="row g-4 py-3 row-cols-1 row-cols-lg-3 align-self-end">
            
            <div class="col d-flex align-items-start justify-content-center">
                <div class="icon-square text-body-emphasis  d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                    <img src="web/icon/pay_tool.png" width="35px" height="35px" style="margin: 5px;" />
                </div>
                <div>
                    <h5 class="fs-4 text-body-emphasis text-start">{{ __('Integration with payment systems')}}</h3>

                        <ul class="list-unstyled mt-3 mb-4 text-start">
                            <li>Paykeeper</li>
                            <li>CloudPayments</li>
                            <li>Robokassa</li>
                            <li>ЮKassa</li>
                        </ul>
                </div>
            </div>

            <div class="col d-flex align-items-start justify-content-center">
                <div class="icon-square text-body-emphasis  d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                    <img src="web/icon/email.png" width="35px" height="35px" style="margin: 5px;" />
                </div>
                <div>
                    <h5 class="fs-4 text-body-emphasis text-start">{{ __('Integration with mailing list services')}}</h3>

                        <ul class="list-unstyled mt-3 mb-4 text-start">
                            <li>Unisender</li>
                            <li>Sendsay</li>
                            <li>SendPulse</li>
                        </ul>
                </div>
            </div>

            <div class="col d-flex align-items-start justify-content-center">
                <div class="icon-square text-body-emphasis  d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                    <img src="web/icon/tool.png" width="35px" height="35px" style="margin: 5px;" />
                </div>
                <div>
                    <h5 class="fs-4 text-body-emphasis text-start">{{ __('And the other')}}</h3>

                        <ul class="list-unstyled mt-3 mb-4 text-start">
                            <li>{{__("Importing a Tilda site")}}</li>
                            <li>{{__("SEO analytics")}}</li>
                            <li>{{__("Russian Post")}}</li>
                            <li>{{__("Assembling orders into boxes")}}</li>
                            <li>{{__("Shipment of goods to the warehouse")}}</li>
                            <li>{{__("Production calendar")}}</li>
                            <li>...</li>
                        </ul>
                </div>
            </div>
        </div>
    </div>
        

        
    </div>
</section>

<section class="container mt-5">
    
    <div class="d-flex align-items-center flex-row bd-highlight mb-3">
        <div class="p-2 bd-highlight about-text-block-big">
            <img src="web/about/750/tool_image2.webp" width="350px" style="margin: 5px;" />
        </div>
        <div class="p-2 bd-highlight">
        <p>
                    {{ $p4 }}
                    {{ $p5 }}
                    {{ $p6 }}
                </p>

                <p>
                    {{ $p7 }}
                    {{ $p8 }}
                </p>
                
        </div>
    </div>
   
    
</section>

<section data-bs-theme="light" class=" d-flex flex-column align-items-center text-center lite-image-text-section lite-background-image" 
    style="background-image: url(web/about/750/fon2.webp); background-size: cover;">
    <div class="container-small mb-5 mt-5">
        <div class="row g-4 py-3 ">
                <p>{{ $p9 }}</p>
                <p>{{ $p10 }} {{ $p11 }}</p>
        </div>
    </div>
    
</section>

<hr>
<section class="container text-center">
    
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