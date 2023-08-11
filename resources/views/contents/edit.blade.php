@extends('main')
@section('content')

    <div class="container-lg">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">HALAMAN EDIT</h4>
                    {{-- USERS --}}
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                        Profile
                                        </th>
                                        <th class="align-middle text-center">
                                            Name
                                        </th>
                                        <th class="align-middle text-center">
                                            Date
                                        </th>
                                        <th class="align-middle text-center">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td class="py-1">
                                                <img src="../../images/faces/face1.jpg" alt="image"/>
                                                </td>
                                                <td class="">
                                                {{ $user->name }}
                                                <p class="text-xs text-secondary mb-0">{{ $user->email }}</p>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <span
                                                        class="text-secondary text-xs font-weight-bold">{{ Carbon\Carbon::parse($user->created_at)->format('d F Y') }}
                                                    </span>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <a href="/users/{{ $user->id }}/edit" class="text-secondary font-weight-bold text-xs"
                                                        data-toggle="tooltip" data-original-title="Edit user">
                                                        Edit
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                            </table>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection