@extends('admin.layout.app')

@section('title', 'Dashboard!')

@section('content')

    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"><b>Selamat Datang Di E-Kaki Lima</b></h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
    <i class="fa fa-times"></i></button>
            </div>
        </div>
    </div>
    <!-- /.box -->


@endsection

@section('js')
<script type="text/javascript">
	alert('Hallo');
</script>
@endsection