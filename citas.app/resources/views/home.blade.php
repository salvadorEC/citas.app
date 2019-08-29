@extends('layouts.app')


@section('content')


  @role('recepcion')
  @can('ver_doctores')
    <!-- Objeto7070: Elegir Doctor-->
    <selectformdoctor-component></selectformdoctor-component>
    <!-- Objeto7070: Elegir Doctor-->
  @endcan
  @endrole

@endsection
