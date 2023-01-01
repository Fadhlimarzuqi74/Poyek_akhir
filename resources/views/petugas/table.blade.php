<div class="table-responsive">
    <table class="table" id="petugas-table">
        <thead>
        <tr>
            <th>Id Petugas</th>
        <th>Nama Petugas</th>
        <th>Jabatan Petugas</th>
        <th>Nomor Telepon</th>
        <th>Alamat Petugas</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($petugas as $petugas)
            <tr>
                <td>{{ $petugas->id_petugas }}</td>
            <td>{{ $petugas->nama_petugas }}</td>
            <td>{{ $petugas->jabatan_petugas }}</td>
            <td>{{ $petugas->nomor_telepon }}</td>
            <td>{{ $petugas->alamat_petugas }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['petugas.destroy', $petugas->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('petugas.show', [$petugas->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('petugas.edit', [$petugas->id]) }}"
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
