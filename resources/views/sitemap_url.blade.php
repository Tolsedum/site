<url>
    <loc>{{ $url }}</loc>
    <lastmod>{{ $map["date_edit"] }}</lastmod>
    @if(isset($changefreq))
        <changefreq>{{ $changefreq }}</changefreq>
    @endif
    @if(isset($priority))
        <priority>{{ $priority }}</priority>
    @endif
    <xhtml:link rel="alternate" hreflang="x-default" href="{{ $url }}" />
    <xhtml:link rel="alternate" hreflang="en" href="{{ $url }}?lang=en"/>
    <xhtml:link rel="alternate" hreflang="ru" href="{{ $url }}?lang=ru"/>
</url>
@if(!empty($map["dropdown"]))
    @foreach($map["dropdown"] as $url => $_map)
        @include('sitemap_url', ['map' => $_map])
    @endforeach
@endif