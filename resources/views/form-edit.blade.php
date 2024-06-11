@extends('layouts.main')

@section('title', 'Form Edit Phone')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Edit Phone</h3>
        </div>
        <div class="card-body">
            <form action="/update/{{ $mv->idhp }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="namahp">Nama HP</label>
                    <input type="text" id="namahp" name="namahp" class="form-control" value="{{ $mv->namahp }}" required>
                </div>
                <div class="form-group">
                    <label for="merek">Merek</label>
                    <select id="merek" name="merek" class="form-control">
                        <option value="0">Pilih Merek</option>
                        <option value="samsung"{{ ($mv->merek=="samsung") ? "Selected":"" }}>Samsung</option>
                        <option value="iphone" {{ ($mv->merek=="iphone") ? "Selected":"" }}>Iphone</option>
                        <option value="xiaomi" {{ ($mv->merek=="xiaomi") ? "Selected":"" }}>Xiaomi</option>
                        <option value="oppo" {{ ($mv->merek=="oppo") ? "Selected":"" }}>Oppo</option>
                        <option value="vivo" {{ ($mv->merek=="vivo") ? "Selected":"" }}>Vivo</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="number" id="harga" name="harga" class="form-control" value="{{ $mv->harga }}" min="0" max="100000000">
                </div>
                <div class="form-group">
                    <label for="processor">Processor</label>
                    <input type="text" id="processor" name="processor" class="form-control" value="{{ $mv->processor }}" required>
                </div>
                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <input type="file" id="gambar" name="gambar" class="form-control-file" accept="image/*">
                </div>
                <div class="form-group">
                    <img src="{{ asset('/storage/'.$mv->gambar) }}" alt="{{ $mv->gambar }}" height="80" width="80">
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
            </form>
        </div>
    </div>
@endsection
