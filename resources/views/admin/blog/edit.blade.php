@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Blog -edit</h1>
@stop

@section('content')

<form id="form" action="/admin/blog/update{{$blog->id}}" method="POST">
@csrf
    <div class="card card-outline card-primary">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="from-group">
                        <label>title</label>
                        <input type="text"  class="form-control" name="title" value="{{ old('title', $blog->title) }}">
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="from-group">
                        <label>detail</label>
                        <textarea type="detail" name="detail" class="form-control" rows="10">{!! old('detail', $blog->detail) !!}</textarea>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="from-group">
                        <label>image_name</label>
                        <input type="image_name"  class="form-control" name="image_name" value="{{ old('image_name', $blog->image_name) }}">
                    </div>
                </div>
            </div>
        </div>

        <div class="card-footer">
            <a class="btn btn-default" href="/admin/blog">キャンセル</a>
            <div class="float-right">
                <button type="submit" class="btn btn-primary">更新</button>
            </div>
        </div>
    </div>
</form>
    
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop