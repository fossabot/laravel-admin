<div {!! $attributes !!}>
    <ol class="carousel-indicators">

        @foreach($items as $key => $item)
        <li data-target="#{!! $id !!}" data-slide-to="{{$key}}" class="{{ $key == 0 ? 'active' : '' }}"></li>
        @endforeach

    </ol>
    <div class="carousel-inner">

        @foreach($items as $key => $item)
        <div class="item {{ $key == 0 ? 'active' : '' }}">
            <img src="{{ url($item['image']) }}" alt="{{$item['caption']}}">
            <div class="carousel-caption">
                {{$item['caption']}}
            </div>
        </div>
        @endforeach

    </div>
    <a class="left carousel-control" href="#{!! $id !!}" data-slide="prev">
        <span class="fas fa-angle-left fa-fw"></span>
    </a>
    <a class="right carousel-control" href="#{!! $id !!}" data-slide="next">
        <span class="fas fa-angle-right fa-fw"></span>
    </a>
</div>
