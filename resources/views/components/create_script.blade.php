<script @foreach($script_href as $attr => $value)
    {{ $attr }}="{{$value}}"
    @endforeach
></script>