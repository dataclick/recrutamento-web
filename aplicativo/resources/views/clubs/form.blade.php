{{ csrf_field() }}
<div class="form-group">
    <label for="name">Nome:</label>
    <input type="text" class="form-control" name="name" id="name" placeholder="Nome do clube..." value="{{ $club->name ?? '' }}" maxlength="100" required>
    @if ($errors->has('name'))
        <p class="help-block">
            <strong class="text-danger">{{ $errors->first('name') }}</strong>
        </p>
    @endif
</div>
<button type="submit" class="btn btn-success">Salvar</button>
