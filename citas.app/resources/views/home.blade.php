@extends('layouts.app')


@section('content')


  @role('recepcion|doctor')
  @can('ver_doctores')
    <!-- Objeto7070: Elegir Doctor-->
    <selectformdoctor-component></selectformdoctor-component>
    <!-- Objeto7070: Elegir Doctor-->
  @endcan
  @can('proximas_citas')
    <proximascitas-component></proximascitas-component>
  @endcan
  @can('gestion_citas')
    <gestioncitas-component></proximascitas-component>
  @endcan
  @endrole

@endsection
