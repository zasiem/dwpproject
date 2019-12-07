@extends('layouts.app-client')

@section('content')
<div class="container" style="margin-top: 250px; margin-bottom: 200px;">
  <div class="row justify-content-center text-center mb-5">
    <div class="col-md-8">
      <h1>Form Pembayaran</h1>
      <p>Tagihan anda sebesar :</p>
      <h2>Rp 1.000.000</h2>
      <p>Silahkan bayar ke rekening <b>BCA</b> berikut :</p>
      <h3>1234632123 a/n Zai</h3>
      <p>lalu upload bukti pembayaran melalui form dibawah</p>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-body">
          <form method="POST" action="{{ url('/upload-pembayaran') }}" enctype="multipart/form-data">
            @csrf
            @if($foto->bukti_pembayaran != null)
            <div class="row">
              <img src="{{ asset('storage/'.$foto->bukti_pembayaran) }}" alt="" width="100%">
            </div>
            @endif
            <div class="form-group row">
              <label for="email" class="col-md-4 col-form-label text-md-right">Upload Pembayaran</label>
              <div class="col-md-12">
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" name="gambar" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                    <label class="custom-file-label" for="inputGroupFile04">Pilih Foto</label>
                  </div>
                  <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" >Upload</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('script')
<script type="text/javascript">
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
@endpush
