@extends('layout.templateprogram')
 <!-- START FORM -->
 @section('konten')

 <form action='{{ url('program') }}' method='post'>
    @csrf
    <a href='{{ url('program') }}' class="btn btn-secondary"><< kembali </a>
    <div class="mb-3 row">
        <label for="nama" class="col-sm-2 col-form-label">Nama Program</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name='nama_program' placeholder='Masukan Nama Program' value="{{ Session::get('nama_program') }}" id="nama_program">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="jurusan" class="col-sm-2 col-form-label">Detail Program</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name='detail_program' placeholder='Masukan Detail Program' value="{{ Session::get('detail_program') }}" id="detail_program">
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
