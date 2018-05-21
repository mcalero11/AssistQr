@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lista de Usuarios</div>

                <div class="card-body">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Edad</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr style="cursor: pointer;" onclick="window.open('{{ route('ProfileUser',$user->id) }}', '_blank');"
                                class="{{ $user->is_instructor ? 'table-success': '' }}">
                                    <td>{{ $user->id }}</td>
                                    <td>{{ e($user->CompleteNAme()) }}</td>
                                    <td>{{ e($user->email) }}</td>
                                    <td>{{ $user->Age() . " Años" }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div>
                        {!! $users->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
