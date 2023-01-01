<!-- Id Anggota Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_anggota', 'Id Anggota:') !!}
    {!! Form::number('id_anggota', null, ['class' => 'form-control']) !!}
</div>

<!-- Kode Anggota Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kode_anggota', 'Kode Anggota:') !!}
    {!! Form::text('kode_anggota', null, ['class' => 'form-control']) !!}
</div>

<!-- Nama Anggota Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_anggota', 'Nama Anggota:') !!}
    {!! Form::text('nama_anggota', null, ['class' => 'form-control']) !!}
</div>

<!-- Nomor Telepon Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nomor_telepon', 'Nomor Telepon:') !!}
    {!! Form::text('nomor_telepon', null, ['class' => 'form-control']) !!}
</div>

<!-- Alamat Anggota Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('alamat_anggota', 'Alamat Anggota:') !!}
    {!! Form::textarea('alamat_anggota', null, ['class' => 'form-control']) !!}
</div>