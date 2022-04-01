@extends('layouts.app')

@section('title')
    registry_report
@endsection

@section('content')

    <div class="col-md-12">
        <h1>registry_report</h1>
        <form action="/registry_report/edit/post" method="POST">
            @csrf
            <input type="hidden" name="users_id" value="{{$user->id}}">
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="text" value="{{$user->email}}" name="email" class="form-control" id="text"
                       aria-describedby="text" required>
            </div>

            <div class="form-group">
                <label for="exampleInputAddress">Address</label>
                <input type="text" value="{{$user->address}}" name="address" class="form-control" id="InputAddress"
                       placeholder="1234 Main St" required>
            </div>

            <div class="form-group">
                <label for="inputOccupation">Occupation</label>
                <input type="text" value="{{$user->occupation}}" name="occupation" class="form-control"
                       id="inputOccupation" placeholder="Apartment, studio, or floor">
            </div>

            <label for="inputState">Gender</label>
            <div class="custom-control custom-radio">
                <input type="radio" value="{{$user->gender}}" name="gender" id="customRadio1"
                       class="custom-control-input" value="Female" {{$user->gender === 'Female' ? 'checked' : ''}}>
                <label class="custom-control-label" for="customRadio1">Female</label>
            </div>

            <div class="custom-control custom-radio">
                <input type="radio" name="gender" id="customRadio2" class="custom-control-input"
                       value="Male" {{$user->gender === 'Male' ? 'checked' : ''}}>
                <label class="custom-control-label" for="customRadio2">Male</label>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">City</label>
                    <input type="text" value="{{$user->city}}" name="city" class="form-control" id="inputCity">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">State</label>

                    <?php
                    $states = array("Florida", "Carlifonia", "Texas",)
                    ?>
                    <select class="custom-select mr-sm-2" value->{{$user->state}} name="state"
                        id="inlineFormCustomSelect">
                        <option selected value="" disabled>Choose...</option>
                        @foreach($states as $state)
                            @if($state == $user->state)
                                <option value="{{$state}}" selected>{{$state}}</option>
                            @else
                                <option value="{{$state}}">{{$state}}</option>
                            @endif
                        @endforeach
                    </select>

                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">Zip</label>
                    <input type="text" value="{{$user->zip}}" name="zip" class="form-control" id="inputZip">
                </div>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" value="{{$user->check}}" name="check" value="1" type="checkbox"
                           id="gridCheck" {{$user->check ? 'checked' : ''}}>
                    <label class="form-check-label" for="gridCheck">
                        Check me out
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">
                Submit
            </button>
        </form>
    </div>

@endsection
