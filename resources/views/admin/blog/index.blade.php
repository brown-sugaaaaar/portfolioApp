@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Blog -index</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <div class="card-tools">
            <a class="btn btn-success btn-sm" href="/admin/blog/create">
                <i class="fas fa-plus"></i>
                新規作成
            </a>
        </div>
    </div>

    <div class="card-body">
        <table id="data-table" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>title</th>
                    <th>image_url</th>
                    <th>created</th>
                    <th>updated</th>
                </tr>
            </thead>
            <tbody>
            @foreach($blogs as $blog)
            <tr>
                <td>{{ $blog->title }}</td>
                <td>{{ $blog->image_url }}</td>
                <td>{{ $blog->created_at }}</td>
                <td>{{ $blog->updated_at }}</td>
                <td>
                    <a class="btn btn-primary btn-sm" href="/admin/blog/edit{{$blog->id}}}">
                        <i class="fas fa-pencil-alt"></i>編集
                    </a>
                </td>
                <td>
                    <button class="btn btn-danger btn-sm" href="#">
                         <i class="fas fa-trash"></i>削除
                    </button>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop