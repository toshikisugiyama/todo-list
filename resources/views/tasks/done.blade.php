@extends('layouts.default')

@section('switch_done')
<a href="{{ url('/') }}" class="mr-5">Todo</a>
@endsection

@section('content')
  <div class="container my-5">
    <form method="post" action="{{ url('/tasks') }}">
      {{ csrf_field() }}
      <div class="input-group mb-3">
        <input type="text" name="title" class="form-control" placeholder="追加">
        <div class="input-group-append">
          <button type="submit" class="btn btn-outline-secondary" type="button"><i class="fas fa-plus"></i></button>
        </div>
      </div>
    </form>
    <div class="container">
      <ul id="todos" class="list-group">

      @forelse($tasks as $task)
        <li class="list-group-item list-group-item-action mb-3 rounded pointer">
          <div class="d-flex align-items-center">
            <div class="px-3 w-100">
              <div class="d-flex align-items-center">
                <span class="badge badge-primary mx-1">プライベート</span>
                <span class="badge badge-warning mx-1">仕事</span>
              </div>
              <div class="d-flex align-items-center justify-content-between">
                <span class="h1 mb-0">{{ $task->title }}</span>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-end w-100">
              <p class="d-inline mb-0 badge"><span class="d-inline text-muted">完了日：</span>2019/5/30</p>
            </div>
          </div>
        </li>
      @empty
        <li class="list-unstyled text-center my-5 py-5">まだタスクはありません。</li>
      @endforelse
      </ul>

    </div>
  </div>
@endsection