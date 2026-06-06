@props(['comic'])

<div>
    <div class="comic-thumb">
        <img class="img-fluid" src="{{ $comic['thumb'] }}" alt="thumbnail">
    </div>
    <h5 class="mt-2">{{ $comic["series"] }}</h5>
</div>