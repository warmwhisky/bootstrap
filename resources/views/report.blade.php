@extends('layouts.app')

@section('title')
    Report
@endsection
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-2">
                <div class="mt-3">
                    <h3>List users</h3>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <table class="table-bordered table mt-3 table-dark table-hover">
                        <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Message</th>
                            <th scope="col">Delete</th>
                            <th scope="col">Edit</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($emails as $email)
                            <tr>
                                <td>{{$email->name}}</td>
                                <td>{{$email->email}}</td>
                                <td>{{$email->message}}</td>
                                <td>
                                    <form action="/report/delete/{{$email->id}}" method="POST"
                                          onsubmit="return confirm('Are you sure you want to delete this bad boy??');">
                                        @csrf
                                        <button type="submit" class="btn btn-link">
                                            <i class="fas fa-trash text-danger"></i>
                                        </button>
                                    </form>
                                </td>
                                <td>
                                    <a href="report/edit/{{$email->id}}" class="btn btn-link">
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

@endsection

