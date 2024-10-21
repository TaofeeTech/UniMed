@extends('users.user-master')

@section('users')

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card"><br><br>
                        <div class="mx-auto">
                                <img class="rounded-circle avatar-xl" src="{{ (!empty($userData->profile_image)) ? url('upload/user_images/'.$userData->profile_image) :url('upload/no_image.PNG') }}" alt="Card image cap">
                        </div>

                        <div class="card-body">
                                    <h4 class="card-title">Name : {{ $userData->name }} </h4>
                                    <hr>
                                    <h4 class="card-title">User Email : {{ $userData->email }} </h4>
                                    <hr>
                                    <a href="{{ route('user_Edit_Profile') }}" class="btn btn-info btn-rounded waves-effect waves-light" > Edit Profile</a>
                        </div>
                    </div>
                </div> 
            </div> 
        </div>
    </div>

@endsection 