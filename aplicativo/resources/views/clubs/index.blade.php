@component('layouts.app')
    @component('layouts.elements.panel')
        @slot('title') Clubes @endslot
        <p><a href="{{ route('clubs.create') }}" class="btn btn-sm btn-default">Novo clube</a></p>
        @include('clubs.table')
    @endcomponent
@endcomponent
