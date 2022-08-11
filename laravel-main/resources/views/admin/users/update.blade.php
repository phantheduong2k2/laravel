@extends('layout.master')
@section('col-sm-12')
    <div class="card">
        <div class="card-header">
            <h3>Update category</h3>
        </div>
        <div class="card-body">
            <form action="{{ Route('users.update',$users_list->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" name="name" value="{{ $users_list->name }}" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email"  value="{{ $users_list->email }}" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password"  id="exampleInputPassword1">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" value="{{ $users_list->username }}" id="exampleInputUsername">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Birthday</label>
                    <input type="date"  name="birthday"  value="{{ date('Y-m-d', strtotime($users_list->birthday)) }}"   class="form-control" >
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPhone" class="form-label">Phone</label>
                    <input type="number" name="phone" value="{{ $users_list->phone }}" class="form-control" >
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPhone" class="form-label">Avatar</label>
                    <input type="file" name="avatar" class="form-control" >
                    {{-- @if ($users_list->avatar) --}}
                    <img src="{{ asset($users_list->avatar) }}" width="100" alt="">
                  </div>
                  <div class='form-group'>
                    <label for="">Quyền</label>
                    <input type="radio" {{ $users_list->role == 1 ? 'checked' : ''}} name='role' value="1">GĐ
                    <input type="radio" {{ $users_list->role == 0 ? 'checked' : ''}} name='role' value="0">NV
                </div>
                <div class='form-group'>
                    <label for="">Trạng thái</label>
                    <input type="radio"{{ $users_list->status == 1 ? 'checked': ''  }} name='status' value="1">Kích hoạt
                    <input type="radio" {{ $users_list->status == 0 ? 'checked': ''  }} name='status' value="0">K kích hoạt
                </div>

                  <div class="mb-3">
                    <label for="exampleInputPhone" class="form-label">Phong ban</label>
                    <select name="room_id" id="">
                        @foreach ($rooms_list as $item )
                         <option value="{{ $item->id }}"{{ $users_list->room_id == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                        @endforeach
                    </select>
                  </div>

                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-primary">Reset</button>
            </form>
        </div>
    </div>
@endsection
