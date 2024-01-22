@extends('layout.admin.layout')
@section('title')
    <title>Dashboard - AUP</title>
@endsection
@section('breadcrumb')
    <a class="breadcrumb-item" href="{{route('dashboard')}}">Admin</a>
    <a class="breadcrumb-item" href="{{route('admin.kerjasama')}}">kerjasama</a>
    <span class="breadcrumb-item active">Edit</span>
@endsection
@section('content')
    <!-- Main Container -->
    <main id="main-container">

        <!-- Page Content -->
        <div class="content">
            <!-- Default Elements -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Form edit kerjasama</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option">
                            <i class="si si-wrench"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <form action="{{route('admin.kerjasama.update', $kerjasama->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-12" for="nama_kerjasama">Nama kerjasama</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="nama_kerjasama" name="nama_kerjasama" placeholder="kerjasama.." value="{{ $kerjasama->nama }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="harga">Harga kerjasama</label>
                            <div class="col-md-9">
                                <input type="number" class="form-control" id="harga" name="harga" placeholder="Harga.." value="{{ $kerjasama->harga }}">
                                {{-- <div class="form-text text-muted">Further info about this input</div> --}}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="deskripsi">Deskripsi</label>
                            <div class="col-12">
                                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="6" placeholder="Deskripsi..">{{ $kerjasama->deskripsi }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12">Gambar File Input</label>
                            <div class="col-12">
                                <img src="{{asset('assets/media/kerjasama/'.$kerjasama->gambar)}}" class=" border bg-secondary" style="max-width: 500px">
                            </div>
                            <div class="col-8">
                                <div class="custom-file">
                                    <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                    <input type="file" class="custom-file-input" id="gambar" name="gambar" data-toggle="custom-file-input">
                                    <label class="custom-file-label" for="gambar">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-alt-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Default Elements -->

        </div>
        <!-- END Page Content -->

    </main>
    <!-- END Main Container -->
@endsection
{{-- @push('script')
    <script src="{{asset('assets/js/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('#table-kerjasama').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('admin.kerjasama') }}",
                columns: [{
                    data: 'DT_RowIndex',
                    name: 'no',
                    // className: 'dt-center'
                }, 
                {
                    data: 'nama',
                    name: 'nama'
                }, 
                {
                    data: 'harga',
                    name: 'harga'
                }, 
                {
                    data: 'gambar',
                    name: 'gambar'
                },
                {
                    data: 'created_at',
                    name: 'dibuat'
                },  
                {
                    data: 'action',
                    name: 'action',
                }]
            });
            $('#btn_refresh_kerjasama').on('click', function () {
                refreshkerjasama();
            });
        });

        function refreshkerjasama() {
            $.ajax({
                url: "{{route('admin.kerjasama')}}",
                type: "GET",
                dataType: "JSON",
                beforeSend: function () {
                    $('#kerjasama').addClass('block-mode-loading');
                },
                success: function (res) {
                    $('#kerjasama').removeClass('block-mode-loading');
                }, 
                error: function (err) {

                }
            })
        }
    </script>
@endpush --}}