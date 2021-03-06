@extends('layouts.parent')

@section("title") create user @endsection

@section("sectionname") Create User @endsection

@section('content')


<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Add User</h4>
                </div>
                <div class="card-body">
                    <form method="post" action="{{route('user.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group bmd-form-group">
                                    <label class="bmd-label-floating">Username</label>
                                    <input type="text" class="form-control" name="name">
                                    @error('name')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group bmd-form-group">
                                    <label class="bmd-label-floating">your Email address</label>
                                    <input type="email" class="form-control" name="email">
                                    @error('email')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group bmd-form-group">
                                    <label class="bmd-label-floating">your Password</label>
                                    <input type="password" class="form-control" name="password">
                                    @error('password')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <select name="role" class="form-select  custom-select">
                                    <option selected hidden disabled>SELECT ROLE</option>
                                    @foreach ($roles as $role)
                                    <option value="{{$role->id}}">{{$role->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary pull-right">submit</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
