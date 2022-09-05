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
    <h2>Latest episode</h2>
    <div class="latest-episode-title mb-3">        
        {{ $latestEpisode->title }} - @foreach ($latestEpisode->artists()->get() as $artist) {{ $artist->name }} @endforeach <span>{{ $latestEpisode->formatedDate }}</span>
    </div>
    @foreach ($latestEpisode->mixes as $mix)        
    <iframe width="100%" height="60" src="https://www.mixcloud.com/widget/iframe/?hide_cover=1&mini=1&light=1&hide_artwork=1&feed={{ urlencode(str_replace("https://www.mixcloud.com", "", $mix->url)) }}" frameborder="0" ></iframe>
    @endforeach    
</div>
@endsection