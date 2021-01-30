@extends('layouts.app')

@section('content')

    <h1>id = {{ $tasks->id }} のメッセージ詳細ページ</h1>

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $tasks->id }}</td>
        </tr>
        <tr>
            <th>メッセージ</th>
            <td>{!! link_to_route('tasks.show', $tasks->id, ['tasks' => $tasks->id]) !!}</td>
            <td>{{ $tasks->content }}</td>
        </tr>
    </table>

@endsection