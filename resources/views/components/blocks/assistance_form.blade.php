
@if(Request::get("is_send") == 1)
    <div class="d-flex flex-row mb-3 justify-content-start">
        <div class="p-2" style="border: solid 1px blue;">
            {{ __("Your message has been received") }}
        </div>
    </div>
@endif
<div class="row align-items-start">
    <div class="col">
        <form action="/save_message_assistance" method="post">
            @csrf <!-- {{ csrf_field() }} -->
            <div class="mb-3">
                <input type="email" name="email" class="form-control bg-dark text-bg-dark dark-placeholder-color" id="exampleFormControlInput1" placeholder="{{ __('Enter your email')}}">
            </div>
            <div class="mb-3">
                <textarea name="message" placeholder="{{ __('Enter your message') }}" class="bg-dark text-bg-dark form-control dark-placeholder-color" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="mb-3 form-check text-start">
                <input type="checkbox" name="mailing" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">{{__('Send me a newsletter')}}</label>
            </div>
            <div class="mb-3 form-check text-end">
                <button type="submit" class="btn btn-primary">{{ __('Send') }}</button>
            </div>
            <input type="hidden" name="return_url" value="/{{ Route::current()->uri }}">
        </form>
    </div>
    
    @if((isset($show_donate) && $show_donate == true) || !isset($show_donate))
        <div class="col mt-4">
            {{ __('I would be very grateful for moral and material support.') }} <br>
            <a href="https://yoomoney.ru/to/410014233800351" class="btn btn-primary">{{ __('Assistance')}}</a> 
        </div>
    @endif
</div>