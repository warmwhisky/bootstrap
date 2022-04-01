@extends('layouts.app')

@section('title')
    registry_report
@endsection

@section('content')


    <div class="row">
        <div class="col-md-12">
            <br>
            <h1>Show Registry</h1>

            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Address</th>
                    <th scope="col">Occupation</th>
                    <th scope="col">Gender</th>
                    <th scope="col">City</th>
                    <th scope="col">State</th>
                    <th scope="col">Zip</th>
                    <th scope="col">Check</th>
                    <td></td>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->email}}</td>
                        <td>{{$user->password}}</td>
                        <td>{{$user->address}}</td>
                        <td>{{$user->occupation}}</td>
                        <td>{{$user->gender}}</td>
                        <td>{{$user->city}}</td>
                        <td>{{$user->state}}</td>
                        <td>{{$user->zip}}</td>
                        <td>{{$user->check}}</td>
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





@endsection
