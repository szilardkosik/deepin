@extends('layouts.app')

@section('content')
<div class="container py-5">
    <p>EPISODES</p>
    <ul class="episodes-list">   
    @foreach ($episodes as $episode)
        <li>
            <a href="{{ route('episodes.show', ['episode' => $episode->id]) }}">               
                {{ $episode->title }} /        
                @foreach ($episode->artists()->get() as $artist)
                    {{ $artist->name }}
                @endforeach
                <span> &middot; {{ $episode->formatedDate }}</span>
            </a>
        </li>
    @endforeach
    </ul>
</div>
@endsection
