@extends('backend.layouts.master')
@section('main-content')
<div class="card">
  <h5 class="card-header">Mensagem</h5>
  <div class="card-body">
    @if($message)
        @if($message->photo)
        <img src="{{$message->photo}}" class="rounded-circle " style="margin-left:44%;">
        @else
        <img src="{{asset('backend/img/avatar.png')}}" class="rounded-circle " style="margin-left:44%;">
        @endif
        <div class="py-4">De: <br>
           Nome :{{$message->name}}<br>
           Email :{{$message->email}}<br>
           Telefone :{{$message->phone}}
        </div>
        <hr/>
  <h5 class="text-center" style="text-decoration:underline"><strong>Assunto :</strong> {{$message->subject}}</h5>
        <p class="py-5">{{$message->message}}</p>

    @endif

  </div>
</div>
@endsection
