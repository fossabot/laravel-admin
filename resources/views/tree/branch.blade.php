<li class="dd-item" data-id="{{ $branch[$keyName] }}">
    <div class="dd-handle">
        {!! $branchCallback($branch) !!}
        <span class="pull-right dd-nodrag">
            <a href="{{ $path }}/{{ $branch[$keyName] }}/edit"><i class="fas fa-edit fa-fw"></i></a>
            <a href="javascript:void(0);" data-id="{{ $branch[$keyName] }}" class="tree_branch_delete"><i class="fas fa-trash fa-fw"></i></a>
        </span>
    </div>
    @if(isset($branch['children']))
    <ol class="dd-list">
        @foreach($branch['children'] as $branch)
            @include($branchView, $branch)
        @endforeach
    </ol>
    @endif
</li>