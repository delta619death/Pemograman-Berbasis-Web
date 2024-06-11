@extends('layouts.main')
@section('tittle', 'Form Add Phone')
@section('artikel')
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">
            <form action="/save" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group"></div>
            <label>NamaHP</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Merek</label>
            <select name="merek" class="form-control">
                <option value="0">Pilih Merek</option>
                <option value="samsung">Samsung</option>
                <option value="iphone">Iphone</option>
                <option value="xiaomi">Xiaomi</option>
                <option value="oppo">Oppo</option>
                <option value="vivo">vivo</option>
            </select>
        </div>
        <div class="form-group"></div>
        <label>harga</label>
        <input type="number" min="0" max="100000000" name="harga" class="form-control">
    </div>
    <div class="form-group"></div>
            <label>Processor</label>
            <input type="text" name="processor" class="form-control" required>
    <div>
        <div class="form-group"></div>
        <label>gambar</label>
        <input type="file" name="gambar" class="form-control-file" accept="image/*">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">SAVE</button>
    </div>
    </form>
    </div>
    </div>
@endsection