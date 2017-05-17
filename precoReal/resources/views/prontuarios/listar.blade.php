@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <a href="{{ URL::to('prontuarios/addprontuario') }}" class="btn btn-default pull-right">Criar Novo Prontuario</a>
                <div class="panel-heading">Lista de pacientes</div>
                <div class="panel-body">
<table class="table">
               <th>Nº</th>
                <th>Nome do Paciente</th>
                <tbody>
                    @foreach($prontuarios as $prontuario)
                    <tr>
                        <td>{{$prontuario->id}}</td>
                        <td>{{$prontuario->NomeDoPaciente}}</td>
                        <td class="teste" >
                            <button class="btn btn-default centralizado">Excljuir</button>
                            <a href="{{ URL::to('prontuarios/mostrar/'.$prontuario->id) }}" class="btn btn-default centralizado">Abrir Prontuario</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="row">
                <div class="col-xs-1">
                    
                </div>
                <div class="col-xs-11">                
                    {!! Form::open(['url'=>'prontuarios/salvar'])  !!}
                    {!! Form::label('nome','Nome do paciente')  !!}
                    {!! Form::input('text','NomeDoPaciente','',['class'=>'form-control','','placeholder'=>'nome do paciente aqui','autofocus'=>'autofocus'])  !!}
                    {!! Form::submit('Salvar',['class'=>'btn btn-primary']) !!}
                    {!! Form::close()  !!}                 
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
