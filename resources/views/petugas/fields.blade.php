<!-- Id Petugas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_petugas', 'Id Petugas:') !!}
    {!! Form::number('id_petugas', null, ['class' => 'form-control']) !!}
</div>

<!-- Nama Petugas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_petugas', 'Nama Petugas:') !!}
    {!! Form::text('nama_petugas', null, ['class' => 'form-control']) !!}
</div>

<!-- Jabatan Petugas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jabatan_petugas', 'Jabatan Petugas:') !!}
    {!! Form::text('jabatan_petugas', null, ['class' => 'form-control']) !!}
</div>

<!-- Nomor Telepon Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nomor_telepon', 'Nomor Telepon:') !!}
    {!! Form::text('nomor_telepon', null, ['class' => 'form-control']) !!}
</div>

<!-- Alamat Petugas Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('alamat_petugas', 'Alamat Petugas:') !!}
    {!! Form::textarea('alamat_petugas', null, ['class' => 'form-control']) !!}
</div>