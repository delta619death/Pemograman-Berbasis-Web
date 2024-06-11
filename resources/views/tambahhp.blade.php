@extends('layouts.main')

@section('title', 'Form Add Phone')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Add New Phone</h3>
        </div>
        <div class="card-body">
            <form action="/save" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="namahp">Nama HP</label>
                    <input type="text" id="namahp" name="namahp" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="merek">Merek</label>
                    <select id="merek" name="merek" class="form-control">
                        <option value="0">Pilih Merek</option>
                        <option value="samsung">Samsung</option>
                        <option value="iphone">Iphone</option>
                        <option value="xiaomi">Xiaomi</option>
                        <option value="oppo">Oppo</option>
                        <option value="vivo">Vivo</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="number" id="harga" name="harga" class="form-control" min="0" max="100000000">
                </div>
                <div class="form-group">
                    <label for="processor">Processor</label>
                    <input type="text" id="processor" name="processor" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <input type="file" id="gambar" name="gambar" class="form-control-file" accept="image/*">
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
            </form>
        </div>
    </div>
@endsection
