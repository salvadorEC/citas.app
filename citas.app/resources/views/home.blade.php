@extends('layouts.app')


@section('content')


  @role('recepcion|doctor')
  @can('ver_doctores')
    <!-- Objeto7070: Elegir Doctor-->
    <selectformdoctor-component></selectformdoctor-component>
    <!-- Objeto7070: Elegir Doctor-->
  @endcan
  @can('ver_calendario')
    <calendario-component></calendario-component>
  @endcan
  @endrole

@endsection
