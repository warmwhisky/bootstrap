@extends('layouts.app')

@section('title')
    registry_report
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="mt-2">
                    <h2>Registration Report</h2>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <table class="table-bordered table mt-3 table-dark table-hover">
                            <thead>
                            <tr>
                                <th scope="col">Name & Surname</th>
                                <th scope="col">email</th>
                                <th scope="col">Delete</th>
                                <th scope="col">Edit</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        <form action="/edit_registry_report/delete/{{$user->id}}" method="POST"
                                              onsubmit="return confirm('Are you sure you want to delete??');">
                                            @csrf
                                            <button type="submit" class="btn btn-link">
                                                <i class="fas fa-trash text-danger"></i>
                                            </button>
                                        </form>
                                    </td>
                                    <td>
                                        <a href="/edit_registry_report/edit/{{$user->id}}" class="btn btn-link">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <form>
                            <div class="col-md-6 offset-md-3">
                                <input type="button" value="Print Report" onclick="window.print()"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
