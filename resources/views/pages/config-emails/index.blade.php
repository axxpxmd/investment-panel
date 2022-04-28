@extends('layouts.app')
@section('title', '| '.$title.'')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header bg-light p-3 font-weight-bold">{{ $title }}</div>
                <div class="card-body">
                    @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show text-center text-white fs-14 bdr-5 col-md-12 container" id="successAlert" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif
                    <div style="margin-left: 50px !important; margin-right: 50px !important">
                        <table>
                            <tr>
                                <td><label class="font-weight-bold fs-14">From</label></td>
                                <td><label class="fs-14 font-weight-normal">: {{ $data->from }}</label></td>
                            </tr>
                            <tr>
                                <td><label class="font-weight-bold fs-14">Subject</label></td>
                                <td><label class="fs-14 font-weight-normal">: {{ $data->subject }}</label></td>
                            </tr>
                            <tr>
                                <td><label class="font-weight-bold fs-14">Body</label></td>
                                <td>
                                    <div class="border rounded p-5 m-l-10">
                                        {!! $data->body !!}
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="{{ route('config-email.edit', $data->id) }}" class="btn btn-sm btn-primary m-l-10 mt-4"><i class="fa fa-edit m-r-10"></i>Edit</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
    // 
</script>
@endsection
