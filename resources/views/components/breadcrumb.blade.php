<nav aria-label="breadcrumb" data-bs-theme="dark" style="font-size: 15px;">
  <ol class="breadcrumb">
        @foreach($breadcrumb as $name_page => $params)
            <li class="breadcrumb-item @if($params['active']) active @endif">
              @if(isset($params["href"]) && !$params["active"])<a href="{{$params["href"]}}"> @endif {{$name_page}} @if(isset($params["href"]))</a> @endif
          </li>
        @endforeach
  </ol>
</nav>
