@component('layouts.app')
    @component('layouts.elements.panel')
        @slot('title') Clubes @endslot
        @slot('subtitle') Últimos clubes cadastrados @endslot
        <p><a href="{{ route('clubs.create') }}" class="btn btn-sm btn-default">Novo clube</a></p>
        @include('clubs.table')
        <p><a href="{{ route('clubs.index') }}" class="btn btn-sm btn-default">Todos os clubes</a></p>
    @endcomponent

    @component('layouts.elements.panel')
        @slot('title') Sócios @endslot
        @slot('subtitle') Últimos sócios cadastrados @endslot
        <p><a href="{{ route('partners.create') }}" class="btn btn-sm btn-default">Novo sócio</a></p>
        @include('partners.table')
        <p><a href="{{ route('partners.index') }}" class="btn btn-sm btn-default">Todos os sócios</a></p>
    @endcomponent
@endcomponent
