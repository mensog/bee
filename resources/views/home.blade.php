@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center mb-4">Панель инструментов</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card-auth">

                    <div class="card-auth__body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        Вы авторизованы
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
