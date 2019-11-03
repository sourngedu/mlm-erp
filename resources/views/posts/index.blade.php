@extends('layouts.backend.ace_layout')

@section('content')
  <div class="row">
      <div class="col-lg-12 margin-tb">
          <div class="pull-left">
              <h2>Post List</h2>
          </div>
          <div class="pull-right">
              @can('post-create')
              <a class="btn btn-success btn-xs" href="{{ route('admin.posts.create') }}"> Create New Post</a>
              @endcan
          </div>
      </div>
  </div>

  @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
  @endif

  <table class="table table-bordered">
    <tr>
      <th>No</th>
      <th>Name</th>
      <th>Details</th>
      <th width="280px">Action</th>
    </tr>
    @foreach ($posts as $post)
      <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $post->name }}</td>
        <td>{{ $post->detail }}</td>
        <td>
          <form action="{{ route('admin.posts.destroy',$post->id) }}" method="POST">
            <a class="btn btn-info btn-xs" href="{{ route('admin.posts.show',$post->id) }}">Show</a>
            @can('post-edit')
            <a class="btn btn-primary btn-xs" href="{{ route('admin.posts.edit',$post->id) }}">Edit</a>
            @endcan
            @csrf
            @method('DELETE')
            @can('post-delete')
            <button type="submit" class="btn btn-danger btn-xs">Delete</button>
            @endcan
          </form>
        </td>
      </tr>
    @endforeach
  </table>

  {!! $posts->links() !!}
<p class="text-center text-primary"><small>Tutorial by applephagna@gmail.com</small></p>
@endsection