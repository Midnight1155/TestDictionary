@extends('layouts.app')

@section('content')
    <div class="container border rounded-0 border-dark shadow">
        <div class="row">
            <div class="col">
                <h2 class="text-center">Add New Word</h2>
            </div>
        </div><br><br>
        <div class="row">
            <div class="col">
                <h4>Please fill up the required Info: <font color="red">*</font></h4>
            </div>
        </div><br>
        <form action="AddData" method="post">
            <div class="row">
                <div class="col">

                    <div class="card border-primary">
                        <div class="card-body">
                            <div class="form-group"><label><strong>New Word in Kadazan:<font color="red">*</font>&nbsp;</strong></label>
                                <input class="form-control" type="text" name="Kadazan" value="{{ old('Kadazan') }}">
                            </div>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        {{ $errors->first('Kadazan') }}
                                    </div>
                                @endif
                                <br>
                            <div class="form-group"><label><strong>In Centre (If any):&nbsp;</strong></label>
                                <input class="form-control" type="text" name="Centre" value="{{ old('Centre') }}">
                            </div>
                                <br>
                            <div class="form-group"><label><strong>In Malay:<font color="red">*</font>&nbsp;</strong></label>
                                <input class="form-control" type="text" name="Malay" value="{{ old('Malay') }}">
                            </div>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        {{ $errors->first('Malay') }}
                                    </div>
                                @endif
                                <br>
                            <div class="form-group"><label><strong>In English:<font color="red">*</font>&nbsp;</strong></label>
                                <input class="form-control" type="text" name="English" value="{{ old('English') }}">
                            </div>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        {{ $errors->first('English') }}
                                    </div>
                                @endif
                                <br>
                            <div class="form-group"><label><strong>Image (If any):&nbsp;</strong></label>
                                <input class="form-control" type="text">
                            </div>
                            <br>
                            <div class="form-group"><label><strong>Sound track (If any):&nbsp;</strong></label>
                                <input class="form-control" type="text">
                            </div>
                        </div>
                    </div>

                </div>
            </div><br><br>
            <div class="row">
                <div class="col"><button class="btn btn-success float-right" type="submit">Submit</button></div>
                <div class="col"><button class="btn btn-danger float-left" type="button">Cancel</button></div>
            </div><br>
            @csrf
        </form>
        <div class="row">
            <div class="col"></div>
        </div>
    </div>

@endsection
