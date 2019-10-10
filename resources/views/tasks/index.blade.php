@extends('layouts.app')

@section('content')

    <h1>タスク一覧</h1>
    
    @if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>ステータス</th>
                    <th>メッセージ</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                    <td>{{ $task->status }}</td>
                    <td>{{$task->content }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    {{ $tasks->links('pagination::bootstrap-4') }} 
    {!! link_to_route('tasks.create', '新規メッセージの投稿', [],['clas
    s' => 'btn btn-primary']) !!}

@endsection