@component('layouts.app')
    @component('layouts.elements.panel')
        @slot('title') Sócios @endslot
        <p><a href="{{ route('partners.create') }}" class="btn btn-sm btn-default">Novo sócio</a></p>
        @include('partners.table')
    @endcomponent
@endcomponent
