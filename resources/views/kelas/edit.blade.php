@extends('layout.templatekelas')
 <!-- START FORM -->
 @section('konten')

 <form action='{{ url('kelas/'.$data->nama_kelas) }}' method='post'>
    @csrf
    @method('PUT')
    <a href='{{ url('kelas') }}' class="btn btn-secondary"><< kembali </a>
    <div class="mb-3 row">
        <label for="nama" class="col-sm-2 col-form-label">Nama Kelas</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name='nama_kelas' value="{{ $data->nama_kelas }}" id="nama_kelas">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="jurusan" class="col-sm-2 col-form-label">Id Program</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name='id_program' value="{{ $data->id_program }}" id="id_program">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="jurusan" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
    </div>
</div>
</form>
<!-- AKHIR FORM -->
@endsection
