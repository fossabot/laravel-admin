<div {!! $attributes !!}>
    <div class="inner">
        <h3>{{ $info }}</h3>

        <p>{{ $name }}</p>
    </div>
    <div class="icon">
        <i class="{{ $icon }}"></i>
    </div>
    @if ($link)
        <a href="{{ $link }}" class="small-box-footer">
            {{ trans('admin.more') }}&nbsp;
            <i class="fas fa-arrow-circle-right"></i>
        </a>
    @endif
</div>