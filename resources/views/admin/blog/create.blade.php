@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Blog -create</h1>
@stop

@section('content')

<form id="form" action="/admin/blog/store" method="POST" enctype="multipart/form-data">
@csrf
    <div class="card card-outline card-primary">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="from-group">
                        <label>title</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="from-group">
                        <label>detail</label>
                        <textarea type="text" name="detail" class="form-control"></textarea>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="from-group">
                        <label>image_name</label>
                        <input type="text" class="form-control" name="image_name">
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="from-group">
                        <label>image</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                </div>
            </div>
        </div>

        <div class="card-footer">
            <a class="btn btn-default" href="/admin/blog">キャンセル</a>
            <div class="float-right">
                <button type="submit" class="btn btn-primary">登録</button>
            </div>
        </div>
    </div>
</form>
    
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop