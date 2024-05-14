@extends('layout.templateberita')
 <!-- START FORM -->
 @section('konten')

 <form action='{{ url('berita/'.$data->media) }}' method='post'>
    @csrf
    @method('PUT')
    <a href='{{ url('berita') }}' class="btn btn-secondary"><< kembali </a>
    <div class="mb-3 row">
        <label for="nama" class="col-sm-2 col-form-label">Media</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name='media' placeholder='Masukan Media' value="{{ $data->media }}" id="media">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="nama" class="col-sm-2 col-form-label">Headline Berita</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name='headline_berita' placeholder='Masukan Headline Berita' value="{{ $data->headline_berita }}" id="headline_berita">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="nama" class="col-sm-2 col-form-label">Isi Berita</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name='isi_berita' placeholder='Masukan Isi Dari Berita' value="{{ $data->isi_berita }}" id="isi_berita">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="nama" class="col-sm-2 col-form-label">Tanggal Publikasi</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name='tanggal_publikasi' placeholder='Masukan Tanggal Publikasi' value="{{ $data->tanggal_publikasi }}" id="tanggal_publikasi">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="jurusan" class="col-sm-2 col-form-label">Coresponden</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name='coresponden' placeholder='Masukan Coresponden' value="{{ $data->coresponden }}" id="coresponden">
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
