@extends('layout.master')
@section('col-sm-12')
    <div class="card">
        <div class="card-header">
            <h3>Add category</h3>
        </div>
        <div class="card-body">
            <form action="{{ Route('users.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" id="exampleInputUsername">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Birthday</label>
                    <input type="date" name="birthday" class="form-control" >
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPhone" class="form-label">Phone</label>
                    <input type="number" name="phone" class="form-control" >
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPhone" class="form-label">Avatar</label>
                    <input type="file" name="avatar" class="form-control" >
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPhone" class="form-label">Quyens</label>
                    <input  type="radio" name="role" value="1">GD
                    <input type="radio" name="role" value="0">NV
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPhone" class="form-label">Quyens</label>
                    <input  type="radio" name="status" value="1">GD
                    <input type="radio" name="status" value="0">NV
                  </div>

                  <div class="mb-3">
                    <label for="exampleInputPhone" class="form-label">Phong ban</label>
                    <select name="room_id" id="">
                        @foreach ($rooms as $item )
                         <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                  </div>

                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-primary">Reset</button>
            </form>
        </div>
    </div>
@endsection
