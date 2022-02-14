@extends('layouts.app')

@section('title')
    Contact
@endsection

@section('content')

        <div class="col-md-10">
            <h1>Contact</h1>
            <form action="/contact/post" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" class="form-control" id="text" aria-describedby="text" required>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Message</label>
                    <textarea class="form-control" name="message" id="exampleFormControlTextarea1" required></textarea>
                </div>

                   <button type="submit" class="btn btn-primary">
                       Submit
                   </button>

            </form>
        </div>
@endsection
