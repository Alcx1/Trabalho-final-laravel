@extends('layouts.main_layout');

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h3>To do List - Emanuel Alec</h3>
            <hr>
            <div class="my-2">
                <a href ="{{route('new_task')}}" class="btn btn-primary">Create Task..</a>
                <a href ="{{route('list_invisibles')}}" class="btn btn-primary">Lista invisível</a>
            </div>
            <hr>
            @if ($tasks->count() ===0)
                <p>Não existe nenhuma tarefa para ser realizada.</p>
            @else
                <table class="table table-striped table-dark">
                    <thead class="thead-dark">
                        <tr>
                            <th>Task</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($tasks as $task)
                            <tr>
                                <td style="width: 70%">{{$task->Task}}</td>
                                <td>
                                    @if ($task->done === null)
                                        <a href="{{route('task_done', ['id' => $task->id])}}" class="btn btn-outline-primary btn-sm">
                                        <i class="fa fa-check"></i></a>
                                    @else
                                        <a href="{{route('task_undone', ['id' => $task->id])}}" class="btn btn-danger btn-sm">
                                        <i class="fa fa-times"></i></a>
                                    @endif
                                            {{--Editar--}}
                                    <a href="{{route('edit_task', ['id' => $task->id])}}" class="btn btn-outline-primary btn-sm">
                                    <i class="fa fa-pencil"></i></a>
                                            {{--Visibilidade--}}

                                    @if ($task->visible ===1)
                                    <a href="{{route('task_invisible',['id'=>$task->id])}}(" class="btn btn-outline-primary btn-sm">
                                        <i class="fa fa-eye-slash"></i></a>
                                    @else
                                    <a href="{{route('task_visible',['id'=>$task->id])}}" class="btn btn-outline-primary btn-sm">
                                        <i class="fa fa-eye"></i></a>
                                    @endif

                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                    <hr>
                    <strong><p>Total: {{$task->count()}}<strong>
            @endif

        </div>
    </div>
</div>





@endsection
