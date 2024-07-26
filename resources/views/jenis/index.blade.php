@extends('main')
@section('title', 'Jenis')
@section('breadcrumbs')
    <main class="main" id="main">
        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./jenis">Master Data</a></li>
                    <li class="breadcrumb-item active">Data Jenis barang</li>
                </ol>
            </nav>
        </div>

        <section class="section dashboard">
            <div class="col-12">
                <div class="row">
                    <div class="card top-selling overflow-auto">
                        <div class="content mt-3">
                            <div class="animated fadeIn">

                                <div class="card-body table-responsive">
                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Id jenis</th>
                                                <th>Jenis Barang</th>
                                                <th>Ubah</th>
                                                <th>Hapus</th>
                                            </tr>
                                        </thead>

                                        <body>
                                            @foreach ($jenis as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->id_jenis }}</td>
                                                    <td>{{ $item->jenis_barang }}</td>
                                                    <td>
                                                        <a class="btn btn-success btn-sm"
                                                            href="{{ url('jenis/' . $item->id_jenis . '/edit') }}">
                                                            <span class="bi bi-pencil-square"
                                                                style="font-size:12px"></span></a>
                                                    </td>
                                                    <td>
                                                        <form action="{{ url('jenis/' . $item->id_jenis) }}"
                                                            class="d-inline" method="post"
                                                            onsubmit="return confirm('Yakin Hapus Data')">
                                                            @method('delete')
                                                            @csrf
                                                            <button class="btn btn-success btn-sm">
                                                                <span class="bi bi-trash"></span>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </body>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection