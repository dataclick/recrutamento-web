<h3>
    {{ $title }}
    @isset($subtitle)
        <small>{{ $subtitle }}</small>
    @endisset
</h3>

<div class="panel panel-default">
    <div class="panel-body">
        {{ $slot }}
    </div>
</div>
