@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">BERITA
                        <button type="button" class="btn btn-sm btn-outline-primary" style="float:right" data-bs-toggle="modal"
                            data-bs-target="#addberita">
                            Tambah Data
                        </button>
                        @include('admin.berita.create')
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <th>No</th>
                                    <th>Judul Berita</th>
                                    <th>Isi Berita</th>
                                </thead>
                                <tbody>
                                    @php $no =1; @endphp
                                    @foreach ($Berita as $berita)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $berita->judul_berita }}</td>
                                            <td>{{ $berita->isi_berita}}</td>
                                            <td>
                                                <form action="{{ route('berita.destroy', $berita->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="button" class="btn btn-sm btn-outline-warning"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#editberita-{{ $berita->id }}">
                                                        Edit
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-outline-info"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#showberita-{{ $berita->id }}">
                                                        Show
                                                    </button>
                                                    <button type="submit" class="btn btn-sm btn-outline-danger"
                                                        onclick="return confirm('apakah anda yakin?')"> Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>

                                        @include('admin.berita.edit')
                                        @include('admin.berita.show')
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection