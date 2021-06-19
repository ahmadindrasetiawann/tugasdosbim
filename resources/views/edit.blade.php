<form action="{{ url('input/' . $mahasiswa->id) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="patch">
    id: <input type="text" name="id" value="{{ $mahasiswa->id }}">
    Nama: <input type="text" name="Nama" value="{{ $mahasiswa->Nama }}">
    NBI: <input type="text" name="NBI" value="{{ $mahasiswa->NBI }}">
    Email: <input type="text" name="Email" value="{{ $mahasiswa->Email }}">
    Jurusan: <input type="text" name="Jurusan" value="{{ $mahasiswa->Jurusan }}">
    <button type="submit">Simpan</button>
</form>