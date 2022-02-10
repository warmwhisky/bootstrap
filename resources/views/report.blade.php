@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')


    <div class="row">
        <div class="col-md-10">
            <br>
            <h1>List users</h1>

            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Message</th>
                    <th></th>
                    <th></th>
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

@endsection
