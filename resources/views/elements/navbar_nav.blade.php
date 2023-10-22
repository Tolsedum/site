<ul class="navbar-nav">
    @foreach($navbar["ul"] as $url => $element_bar)
        
        @if(isset($element_bar["dropdown"]))
            @php $is_dropdown = true; @endphp
        @else
            @php $is_dropdown = false; @endphp
        @endif
        <li class="nav-item @if($is_dropdown) dropdown @endif">
            <a class="nav-link @if($element_bar["active"]) active @endif 
                @if($is_dropdown) dropdown-toggle @endif" 
                aria-current="page"
                @if($is_dropdown)
                    data-bs-toggle="dropdown" 
                    href=""
                @else
                    href="{{ $url }}"
                @endif 
                >{{$element_bar["inner"]}}</a>
                @if($is_dropdown)
                    @foreach($element_bar["dropdown"] as $drop_url => $drop_list)
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item @if($drop_list["active"]) active @endif" 
                            href="{{ $drop_url }}">{{$drop_list["inner"]}}</a></li>
                        </ul>
                    @endforeach    
                @endif
        </li>
    @endforeach
</ul>