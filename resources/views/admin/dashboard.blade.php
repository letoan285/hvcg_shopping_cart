@extends('layouts.admin')
@section('title', 'Dashboard Page')


@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Dashoard Page</h3>

            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="card-body">
            Start creating your amazing application!
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            Footer
        </div>
    </div>

@endsection

@section('script')
<script type="text/javascript">
     $("#btn").click(function(){
        alert('Hello laravel');
     })
 </script>
@endsection
