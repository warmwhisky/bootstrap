@extends('layouts.app')

@section('title')
    Contact
@endsection

@section('content')

        <div class="col-md-10">
            <h1>Contact</h1>
            <form action="/contact/edit/post" method="POST">
                @csrf
                <input type="hidden" name="customer_email_id" value="{{$email->id}}">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" value="{{$email->name}}" name="name" class="form-control" id="text" aria-describedby="text" required>

                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" value="{{$email->email}}" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>

                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Message</label>
                    <textarea class="form-control" name="message" id="exampleFormControlTextarea1" required>{{$email->message}}</textarea>
                </div>

                   <button type="submit" class="btn btn-primary">
                       Submit
                   </button>

            </form>
        </div>
@endsection
