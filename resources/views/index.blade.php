@extends('layouts.app')

@section('content')
<section class="bgimage  mb-4">
    <div class="container">
        <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1>Deepin' </br>Session</h5>
            <p>Electronika, Broken Beats, Deep-Step, Deep-House, Tech, Minimal</p>
            
        </div>
        </div>
    </div>
</section>
<div class="container py-5">
    @foreach ($latestEpisode->mixes as $mix)        
        @php
        $feeds[] = urlencode(str_replace("https://www.mixcloud.com", "", $mix->url));        
        @endphp
        @foreach ($mix->artists as $artist)
        @php
        $artists[] = $artist->name;        
        @endphp
        @endforeach
    @endforeach

    <h2>Latest episode</h2>
    <div class="latest-episode-title mb-3">
        @php
        $date = str_replace("-", ".", $latestEpisode->date);        
        @endphp
        {{ $latestEpisode->title }} - @foreach ($artists as $artist) {{ $artist }} @endforeach <span>{{ $date }}</span>
    </div>
    @foreach ($feeds as $feed)        
    <iframe width="100%" height="60" src="https://www.mixcloud.com/widget/iframe/?hide_cover=1&mini=1&light=1&hide_artwork=1&feed={{ $feed }}" frameborder="0" ></iframe>
    @endforeach    
</div>
@endsection