<!-- Id Petugas Field -->
<div class="col-sm-12">
    {!! Form::label('id_petugas', 'Id Petugas:') !!}
    <p>{{ $petugas->id_petugas }}</p>
</div>

<!-- Nama Petugas Field -->
<div class="col-sm-12">
    {!! Form::label('nama_petugas', 'Nama Petugas:') !!}
    <p>{{ $petugas->nama_petugas }}</p>
</div>

<!-- Jabatan Petugas Field -->
<div class="col-sm-12">
    {!! Form::label('jabatan_petugas', 'Jabatan Petugas:') !!}
    <p>{{ $petugas->jabatan_petugas }}</p>
</div>

<!-- Nomor Telepon Field -->
<div class="col-sm-12">
    {!! Form::label('nomor_telepon', 'Nomor Telepon:') !!}
    <p>{{ $petugas->nomor_telepon }}</p>
</div>

<!-- Alamat Petugas Field -->
<div class="col-sm-12">
    {!! Form::label('alamat_petugas', 'Alamat Petugas:') !!}
    <p>{{ $petugas->alamat_petugas }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $petugas->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $petugas->updated_at }}</p>
</div>

