<!-- Id Buku Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_buku', 'Id Buku:') !!}
    {!! Form::number('id_buku', null, ['class' => 'form-control']) !!}
</div>

<!-- Kode Buku Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kode_buku', 'Kode Buku:') !!}
    {!! Form::text('kode_buku', null, ['class' => 'form-control']) !!}
</div>

<!-- Judul Buku Field -->
<div class="form-group col-sm-6">
    {!! Form::label('judul_buku', 'Judul Buku:') !!}
    {!! Form::text('judul_buku', null, ['class' => 'form-control']) !!}
</div>

<!-- Tahun Penerbit Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tahun_penerbit', 'Tahun Penerbit:') !!}
    {!! Form::text('tahun_penerbit', null, ['class' => 'form-control']) !!}
</div>

<!-- Stok Field -->
<div class="form-group col-sm-6">
    {!! Form::label('stok', 'Stok:') !!}
    {!! Form::number('stok', null, ['class' => 'form-control']) !!}
</div>