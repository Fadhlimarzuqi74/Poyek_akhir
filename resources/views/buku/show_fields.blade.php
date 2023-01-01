<!-- Id Buku Field -->
<div class="col-sm-12">
    {!! Form::label('id_buku', 'Id Buku:') !!}
    <p>{{ $buku->id_buku }}</p>
</div>

<!-- Kode Buku Field -->
<div class="col-sm-12">
    {!! Form::label('kode_buku', 'Kode Buku:') !!}
    <p>{{ $buku->kode_buku }}</p>
</div>

<!-- Judul Buku Field -->
<div class="col-sm-12">
    {!! Form::label('judul_buku', 'Judul Buku:') !!}
    <p>{{ $buku->judul_buku }}</p>
</div>

<!-- Tahun Penerbit Field -->
<div class="col-sm-12">
    {!! Form::label('tahun_penerbit', 'Tahun Penerbit:') !!}
    <p>{{ $buku->tahun_penerbit }}</p>
</div>

<!-- Stok Field -->
<div class="col-sm-12">
    {!! Form::label('stok', 'Stok:') !!}
    <p>{{ $buku->stok }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $buku->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $buku->updated_at }}</p>
</div>

