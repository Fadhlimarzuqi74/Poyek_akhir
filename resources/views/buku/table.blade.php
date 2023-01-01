<div class="table-responsive">
    <table class="table" id="bukus-table">
        <thead>
        <tr>
            <th>Id Buku</th>
        <th>Kode Buku</th>
        <th>Judul Buku</th>
        <th>Tahun Penerbit</th>
        <th>Stok</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($bukus as $buku)
            <tr>
                <td>{{ $buku->id_buku }}</td>
            <td>{{ $buku->kode_buku }}</td>
            <td>{{ $buku->judul_buku }}</td>
            <td>{{ $buku->tahun_penerbit }}</td>
            <td>{{ $buku->stok }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['bukus.destroy', $buku->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('bukus.show', [$buku->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('bukus.edit', [$buku->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
