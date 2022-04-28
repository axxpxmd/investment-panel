@extends('layouts.app')
@section('title', '| '.$title.'')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header bg-light p-3 font-weight-bold">{{ $title }} | <i class="fa fa-edit m-r-10 text-primary"></i>Edit</div>
                <div class="card-body">
                    @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show text-center text-white fs-14 bdr-5 col-md-12 container" id="successAlert" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif
                    <div style="margin-left: 50px !important; margin-right: 50px !important">
                        <form class="needs-validation" novalidate action="{{ route('config-email.update', $data->id) }}"  method="POST" enctype="multipart/form-data" >
                            {{ csrf_field() }}
                            {{ method_field('POST') }}
                            <div class="form-group">
                                <label class="font-weight-bold fs-14" for="from">From</label>
                                <div class="col-md-4">
                                    <input type="text" name="from" id="form" class="form-control" value="{{ $data->from }}" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold fs-14" for="subject">Subject</label>
                                <div class="col-md-4">
                                    <input type="text" name="subject" id="subject" class="form-control" value="{{ $data->subject }}" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold fs-14">Body</label>
                                <textarea name="body" id="editor">{{ $data->body }}</textarea>
                            </div>
                            <a href="{{ route('config-email.index') }}" class="btn btn-sm btn-danger"><i class="fa fa-arrow-left m-r-10"></i>Back</a>
                            <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-save m-r-10"></i>Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote-lite.min.js"></script>
<script type="text/javascript">
    $('#editor').summernote({
        placeholder: 'Tulis disini ...',
        tabsize: 2,
        height: 300,
        toolbar: [
            ['font', ['bold', 'underline', 'italic']],
            ['fontsize', ['fontsize']],
            ['fontname', ['fontname']],
            ['color', ['color']],
            ['paragraph', ['ul', 'ol', 'paragraph', 'height']],
            ['view', ['fullscreen']]
        ]
    });

    $(document).ready(function() {
        $("#successAlert").fadeTo(5000, 1000).slideUp(1000, function() {
            $("#successAlert").slideUp(1000);
        });
    });
</script>
@endsection
