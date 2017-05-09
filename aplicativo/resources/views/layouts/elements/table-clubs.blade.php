<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>Nome do clube</th>
            <th class="text-right">&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        @foreach(range('A', 'D') as $i)
            <tr>
                <td>Clube {{ $i }}</td>
                <td class="text-right">
                    <form
                        onsubmit="return confirm('Você tem certeza?')"
                        action=""
                        method="POST"
                        style="display:inline-block">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-xs btn-danger">
                            Excluir
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<script type="text/javascript">

</script>
