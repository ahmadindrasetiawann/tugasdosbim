<form action="{{ route('input.store') }}" method="post">
    @csrf
    id: <input type="text" name="id">
    Nama: <input type="text" name="Nama">
    NBI: <input type="text" name="NBI">
    Email: <input type="text" name="Email">
    Jurusan: <input type="text" name="Jurusan">
    <button type="submit">Simpan</button>
</form>