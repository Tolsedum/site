<nav class="navbar navbar-expand-lg bg-dark border-bottom border-body " data-bs-theme="dark">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      
      @include("elements.navbar_nav")

      <!-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="{{__("What are we looking for?")}}" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">{{__("Search")}}</button>
      </form> -->
    </div>
    <form class="d-flex" method="post" role="search" action="/set_language" name="form_select_language" id="form_select_language">
      {{ csrf_field() }}
      <input type="hidden" name="return_url" value="{{ url()->current() }}" />
      <select id="new_language" name="new_language">
        @foreach($list_languges as $lang)
          <option value="{{$lang}}" @if($lang == app()->getLocale())selected @endif>{{strtoupper($lang)}}</option>
        @endforeach
      </select>
    </form>
    
  </div>
</nav>