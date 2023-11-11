
    

    
    
<ul class="nav justify-content-center border-top-white-50 pb-3 mb-3">
  @foreach($navbar as $url => $element_bar)
    @if(isset($element_bar["dropdown"]))
        @php $is_dropdown = true; @endphp
    @else
        @php $is_dropdown = false; @endphp
    @endif
    <li class="nav-item @if($is_dropdown) dropdown @endif">
      <a href="{{ $url }}" class="nav-link @if($element_bar["active"]) active @endif  @if($is_dropdown) dropdown-toggle @endif px-2 text-white-50"
        @if($is_dropdown) ole="button" data-bs-toggle="dropdown" aria-expanded="false" @endif
      >{{ $element_bar["inner"] }}</a>
      @if($is_dropdown) 
        <ul class="dropdown-menu">
          @foreach($element_bar["dropdown"] as $drop_url => $drop_list)
                <li><a class="dropdown-item @if($drop_list["active"]) active @endif" href="{{ $drop_url }}">{{ $drop_list["inner"] }}</a></li>
          @endforeach  
        </ul>
      @endif
    </li>
  @endforeach
</ul>
      <p>{{__("Icons and images provided by the site")}}: <a href="https://www.freepik.com/" target="_blank" title="{{__('icon address')}}">Freepik</a><br>{{__("Copyright © Kuzmin Alexey Petrovich, tolsedum@yandex.ru, 2023")}}</p>  
        