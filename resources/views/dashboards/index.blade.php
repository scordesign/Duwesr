@extends('layouts.app')

@section('template_title')
    Dashboard
@endsection

@section('content')
@if (Auth::user()->rol=='admin')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Dashboard') }}
                            </span>

                             <div class="card-header">
                               Dashboard Ventas Duwest Colombia
                              </div>
                        </div>
                    </div>
                    </br></br>
                    <iframe title="PowerBiD" style="margin-left:0%;"width="100%" height="5800" src="https://app.powerbi.com/view?r=eyJrIjoiNTk4NDU4ZmUtZDZjZC00ODc3LWJiYWItOGQ3ZDZmNGFlNmNiIiwidCI6ImIwNTk2NjVlLWY4MzMtNDE3OC1iMjE1LWI1ODc5ZTJiOGI0OSJ9" frameborder="0" allowFullScreen="true"></iframe>
                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        @else
    <div class="container">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card">

                <div class="card-header">{{ __('no autorizado') }}</div>
        <center>
        <br><h3>Usuario no autorizado pongase en contacto con el administrador para obtener la autorizacion a este modulo </h3>
        <br><a href="{{ url('/') }}"><button style="width:100%;" type="button" class="btn btn-secondary">Inicio</button></a><br>
        </center>
        </div>
        </div>   
    </div>
        </div>
    </div>
    @endif
@endsection
