@extends('layouts.app-client')

@section('content')
<div class="container" style="margin-top: 250px; margin-bottom: 200px;">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-body">
          <table class="table text-center">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Bukti</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($pesanan as $pesan)
              <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $pesan->users->name }}</td>
                <td>
                  <a target="_blank" class="btn btn-secondary" href="{{ url('storage/'.$pesan->bukti_pembayaran) }}">Lihat</button>
                </td>
                <td>
                  <form class="" action="{{ url('/proses-verifikasi') }}" method="post">
                    @csrf
                    <button class="btn btn-primary" type="submit" name="button" value="{{ $pesan->id }}"  {{ $pesan->kode == null ? '' : 'disabled'}} >Verifikasi</button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
