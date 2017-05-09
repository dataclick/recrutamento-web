@component('layouts.app')
    @component('layouts.elements.panel')
        @slot('title') Clubes @endslot
        <p><a href="" class="btn btn-default">Novo clube</a></p>
        @component('layouts.elements.table-clubs') @endcomponent
    @endcomponent

    @component('layouts.elements.panel')
        @slot('title') Sócios @endslot
        <p><a href="" class="btn btn-default">Novo sócio</a></p>
        @component('layouts.elements.table-partners') @endcomponent
    @endcomponent
@endcomponent
