@extends('layouts.app')
@section('title', '| '.$title.'')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6 class="font-weight-bolder m-r-10 text-black h6">Table Example</h6>
                    <a href="#" class="btn btn-sm btn-success m-t-10" data-bs-toggle="modal" data-bs-target="#test"><i class="fa fa-plus m-r-10"></i>Tambah</a>
                </div>
                <div class="card-body pb-2 pt-0">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width="20%" class="fs-13 font-weight-bolder ps-2">Author</th>
                                    <th width="20%" class="fs-13 font-weight-bolder ps-2">Function</th>
                                    <th width="20%" class="fs-13 font-weight-bolder ps-2">Status</th>
                                    <th width="10%" class="fs-13 font-weight-bolder ps-2">Employed</th>
                                    <th width="10%" class="fs-13 font-weight-bolder ps-2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i = 0; $i < 10; $i++) 
                                <tr class="fs-13 text-secondary">
                                    <td>Asip Hamdi</td>
                                    <td>Web Developer</td>
                                    <td>Pegawai Tetap</td>
                                    <td>DISKOMINFO Kota Tangerang</td>
                                    <td></td>
                                </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="test" tabindex="-1" data-bs-keyboard="false" data-bs-backdrop="static" style="z-index: 9999999" >
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title font-weight-bolder">Form <span id="form"></span></h6>
            </div>
            <div class="modal-body">
                <div id="alert"></div>
                <form class="needs-validation" id="form" method="POST"  enctype="multipart/form-data" novalidate>
                    {{ method_field('POST') }}
                    <div class="form-row form-inline">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="form1" class="form-label fs-12">Form 1</label>
                                <input type="text" class="form-control" name="form1" id="form1" required>
                            </div>
                        </div>
                    </div>  
                    <hr>
                    <div class="text-right">
                        {{-- <button class="btn btn-sm btn-danger m-r-10"  data-bs-dismiss="modal">Batal</button> --}}
                        <button type="submit" class="btn btn-primary btn-sm"><i class="icon-save mr-2"></i>Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
    $('#form').on('submit', function (e) {
        console.log('jalan');
    });
</script>
@endsection
