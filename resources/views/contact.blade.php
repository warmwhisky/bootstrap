@extends('layouts.app')

@section('title')
    Contact
@endsection

@section('content')

    <div class="row">
        <div class="col-md-8">
            <div class="mt-3">
                <h1>Contact</h1>
            </div>

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

        <div class="col-md-3">
            <h2>Latest News</h2>
            This is are the latest events in Ngwenya Glass
            This is are the latest events in Ngwenya Glass
            This is are the latest events in Ngwenya Glass
            This is are the latest events in Ngwenya Glass
            This is are the latest events in Ngwenya Glass
            This is are the latest events in Ngwenya Glass
            This is are the latest events in Ngwenya Glass
            This is are the latest events in Ngwenya Glass
        </div>

@endsection
