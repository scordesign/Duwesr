@extends('layouts.app')

@section('template_title')
    Actualizar Usuario
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Actualizar Usuario</span>
                    </div>
                    <div class="card-body">
                            {{ method_field('PATCH') }}
                            

                            @include('user.form')

                    </div>
                </div>
            </div>
        </div>
    </section>

  
@endsection
