<html>
<body>
    <form action="/pets/store" method="POST">
        @csrf
        <label>Nome</label>
        <input type="text" name="name">
        <br>
        <br>
        <label>RGA</label>
        <input type="text" name="rga">
        <br>
        <br>
        <label>Data de Nascimento</label>
        <input type="date" name="data_nascimento">
        <br>
        <br>
        <label>Dono</label>
        <select name="owner_id">
        @foreach($owners as $owner)
            <option value="{{ $owner['id'] }}">{{ $owner["name"]}}</h3>
        @endforeach
        </select>

        <input type="submit">
    </form>
</body>
</html>