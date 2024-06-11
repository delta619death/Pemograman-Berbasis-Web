@extends('layouts.main')
@section('title', 'phone')
@section("content")
    <div class="card-header"></div>
    <a href="/phone/tambah" class="btn btn-primary mt-3"><i class="bi bi-nvidia"></i> Phone</a>
    <div class="card-body">
        @if(session('alert'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{ session('alert') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif
        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>no</th>
                    <th>Nama HandPhone</th>
                    <th>Merk</th>
                    <th>Harga</th>
                    <th>Processor</th>
                    <th>Gambar</th>
                    <th>aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mv as $idx => $m)
                <tr>
                    <td>{{ $idx+1 }}</td>
                    <td>{{ $m-> namahp }}</td>
                    <td>{{ $m-> merek }}</td>
                    <td>{{ $m-> harga }}</td>
                    <td>{{ $m-> processor }}</td>
                    <td>
                        <img src="{{ asset('/storage/'.$m->gambar) }}" alt="{{ $m->gambar }}" height="80" width="80">
                    </td>
                    <td>
                        <a href="/phone/edit-form/{{ $m->idhp }}" class="btn btn-success"><i class="bi bi-pencil"></i></a>
                        <a href="/delete/{{ $m->idhp }}" class="btn btn-danger"><i class="bi bi-x-circle"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
