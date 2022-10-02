@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <div class="container py-4">
                        <h1 class="text-center text-primary">Task List Project</h1>
                            <div class="row">
                                <div class="col"></div>
                                <div class="col-lg-6">
                                    <form action="/user/addtask" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col">
                                                <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="" required>
                                            </div>
                                            <div class="col-4">
                                                <button type="submit" name="" id="" class="btn btn-success">Add Task</button>
                                            </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-sm caption-top">
                                <caption>All Tasks</caption>
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
                                    @forelse($tasks as $task)
                                    <tr class="table-primary">
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
                                        <a class="btn btn-outline-primary d-none d-lg-inline {{ ($task->status) ? 'disabled' : '' }}" href={{ route('user.endtask', ['id'=>$task->id]) }}>Done</a> 
                                        <a class="btn btn-outline-danger d-none d-lg-inline" href={{ route('user.deletetask', ['id'=>$task->id]) }}>Delete</a>
                                        @if (Auth::user()->isAdmin)
                                            @if (Auth::user()->id == $task->user_id)
                                            <a class="btn btn-outline-success dropdown-toggle d-none d-lg-inline {{ ($task->status) ? 'disabled' : '' }}" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Assign</a>
                                            @else
                                                <span style="text-align: end">Assigned to {{ $task->user->name }}</span>
                                            @endif
                                        @endif
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                @foreach ($users as $user)
                                                @if (!(Auth::user() == $user))
                                                <li><a class="dropdown-item text-info {{ ($task->status) ? 'disabled' : ''}}" href={{ route('user.assigntask', ['id'=>$task->id , 'to'=>$user->id]) }}>{{ $user->name }}</a></li>
                                                @endif
                                                @endforeach
                                            </ul>
                                        <div class="dropdown">
                                            <span class="dropdown-toggle d-block d-lg-none" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Action</span>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <li><a class="dropdown-item text-success {{ ($task->status) ? 'disabled' : ''}}" href={{ route('user.endtask', ['id'=>$task->id]) }}>Done</a></li>
                                                <li><a class="dropdown-item text-danger" href={{ route('user.endtask', ['id'=>$task->id]) }}>Delete</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                    @empty
                                        <tr class="text-center bg-white">
                                            <td colspan="5">No Tasks</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>      
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
