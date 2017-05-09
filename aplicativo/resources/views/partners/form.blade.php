{{ csrf_field() }}
<div class="form-group">
    <label for="name">Nome:</label>
    <input type="text" class="form-control" name="name" id="name" placeholder="Nome completo..." value="{{ $partner->name ?? '' }}" required>
</div>

@if(count($clubs) > 0)
    <label>Clubes:</label>
    <div class="well">
        @foreach($clubs as $club)
            <label class="checkbox-inline">
                <input
                    type="checkbox"
                    name="clubs[]"
                    value="{{ $club->id }}"
                    {{ isset($associates) && in_array($club->id, $associates) ? 'checked' : '' }}> {{ $club->name }}
            </label>
        @endforeach
    </div>
@endif

<button type="submit" class="btn btn-success">Salvar</button>
