@if(!empty($property))
    @foreach($property as $p_name => $content)
        @if(!empty($content) && !empty($p_name))
            <meta property="og:{{ $p_name }}" content="{{ $content }}">
        @endif
    @endforeach
@endif