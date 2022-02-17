@extends('layouts.app')

@section('title')
    Registration
@endsection

@section('content')


    <div class="row">
        <div class="col-md-10">
            <br>
            <h1>Registration</h1>
            <br>
            <form action="/registration/post" method="POST">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" name="email" class="form-control" id="inputEmail4" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Password</label>
                        <input type="password" name="password" class="form-control" id="inputPassword4">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="form-group">
                    <label for="inputAddress2">Occupation</label>
                    <input type="text" name="occupation" class="form-control" id="inputAddress2"
                           placeholder="Apartment, studio, or floor">
                </div>

                <label for="inputState">Gender</label>
                <div class="custom-control custom-radio">
                    <input type="radio" name="gender" id="customRadio1" class="custom-control-input" value="Female">
                    <label class="custom-control-label" for="customRadio1">Female</label>
                </div>

                <div class="custom-control custom-radio">
                    <input type="radio" name="gender" id="customRadio2" class="custom-control-input" value="Male">
                    <label class="custom-control-label" for="customRadio2">Male</label>
                </div>
                <br>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input type="text" name="city" class="form-control" id="inputCity">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">State</label>
                        <select class="custom-select mr-sm-2" name="state" id="inlineFormCustomSelect">
                            <option selected value="" disabled>Choose...</option>
                            <option value="Florida">Florida</option>
                            <option value="Carlifonia">Carlifonia</option>
                            <option value="Texas">Texas</option>
                        </select>

                        <option></option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputZip">Zip</label>
                        <input type="text" name="zip" class="form-control" id="inputZip">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" name="check" value="1" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Check me out
                        </label>


                    </div>
                </div>
                <button class="btn"><i class="fa fa-sign-in" style="font-size: 20px;color: blue">Sign in</i></button>

            </form>


        </div>
    </div>

@endsection
