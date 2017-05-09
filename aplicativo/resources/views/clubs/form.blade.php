{{ csrf_field() }}
<div class="form-group">
    <label for="name">Nome</label>
    <input type="text" class="form-control" name="name" id="name" placeholder="Nome do clube..." value="{{ $club->name ?? '' }}" required>
</div>
<button type="submit" class="btn btn-success">Salvar</button>
