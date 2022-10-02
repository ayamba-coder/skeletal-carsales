<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="container py-4">
            <h1 class="text-center text-primary">Task List Project</h1>
                <div class="row">
                    <div class="col-6"></div>
                    <div class="col-6">
                        <form action="/add" method="POST">
                            @csrf
                            <div class="row g-0">
                                <div class="col">
                                    <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="">
                                </div>
                                <div class="col-4">
                                    <button type="submit" name="" id="" class="btn btn-success">Add Task</button>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            <div class="table-responsive">
                <table class="table table-primary table-striped table-sm caption-top">
                    <caption>All Tasks ( {{$count}} )</caption>
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Status</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Completed At</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tasks as $task)
                        <tr class="">
                                <td>{{$task->name}}</td>
                            @if (!$task->status)
                            <td>Pending</td>
                            @else
                            <td class="text-success">Completed</td>
                            @endif
                            <td>{{$task->created_at}}</td>
                            @if (!$task->task_completed_at)
                            <td>-</td>
                            @else
                            <td>{{$task->task_completed_at}}</td>
                            @endif
                            <td>
                                <a class="{{(!$task->status) ? 'disabled' : ''}}" href="/endtask/{{$task->id}}">Done</a> <a href="/deletetask/{{$task->id}}"><button type="submit" class="btn btn-danger">Delete</button></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
    </body>
</html>
