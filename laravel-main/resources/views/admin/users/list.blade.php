@extends('layout.master')
@section('col-sm-12')
    <div class="card">
        <div class="card-header">
            <h3>List category</h3>
        </div>
        <div class="card-body">
            <div class="card-body table-border-style">
                <div class="table-responsive">
                    <div class="my-3">
                        <a class="btn btn-success" href="{{ Route('users.create') }}">Tao moi</a>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Ngay sinh</th>
                                <th>Ten</th>
                                <th>Avatar</th>
                                <th>phong ban</th>
                                <th>Chuc vu</th>
                                <th>chuc nang</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user_list as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td> {{ $user->birthday }}</td>
                                    <td>{{ $user->username }}</td>
                                    <th><img src="{{ asset($user->avatar) }}" alt="" width="100"></th>
                                    {{-- neu chi select va paginete thi o day moi lay duoc  --}}
                                    <td>{{isset($user->room) ? $user->room->name :  '' }}</td>
                                    <th>
                                        <a class="btn btn-warning" href="{{ Route('users.edit', $user->id) }}">Edit</a>
                                        <form action="{{ Route('users.delete',$user->id) }}" method="POST"><button
                                                class="btn btn-danger">Xoa</button>
                                            @method('delete')
                                            @csrf
                                        </form>
                                    </th>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="paginate">
                        {{ $user_list->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
