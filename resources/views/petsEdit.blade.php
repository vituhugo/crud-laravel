<html>
<body>
    <form action="/pets/update/{{ $pet['id'] }}" method="POST">
        @csrf
        @method('PATCH')
        <label>Nome</label>
        <input type="text" name="name" value="{{ $pet['name'] }}">
        <br>
        <br>
        <label>RGA</label>
        <input type="text" name="rga" value="{{ $pet['RGA'] }}">
        <br>
        <br>
        <label>Data de Nascimento</label>
        <input type="date" name="data_nascimento" value="{{ $pet['data_nascimento'] }}">
        <br>
        <br>
        <label>Dono</label>
        <select name="owner_id">
        @foreach($owners as $owner)
            <option value="{{ $owner['id'] }}" @if($owner['id'] == $pet['owner_id']) select @endif>
                {{ $owner["name"]}}
            </option>
        @endforeach
        </select>

        <input type="submit">
    </form>
</body>
</html>