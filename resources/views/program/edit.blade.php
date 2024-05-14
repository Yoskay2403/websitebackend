@extends('layout.templateprogram')
 <!-- START FORM -->
 @section('konten')

 <form action='{{ url('program/'.$data->nama_program) }}' method='post'>
    @csrf
    @method('PUT')
    <a href='{{ url('program') }}' class="btn btn-secondary"><< kembali </a>
    <div class="mb-3 row">
        <label for="nama" class="col-sm-2 col-form-label">Nama Program</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name='nama_program' value="{{ $data->nama_program }}" id="nama_program">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="jurusan" class="col-sm-2 col-form-label">Detail Program</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name='detail_program' value="{{ $data->detail_program }}" id="detail_program">
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
