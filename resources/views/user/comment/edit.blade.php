@extends('user.layouts.master')

@section('title','Comment Edit')

@section('main-content')
<div class="card">
  <h5 class="card-header">Editar Comentário</h5>
  <div class="card-body">
    <form action="{{route('user.post-comment.update',$comment->id)}}" method="POST">
      @csrf
      @method('PATCH')
      <div class="form-group">
        <label for="name">Por:</label>
        <input type="text" disabled class="form-control" value="{{$comment->user_info->name}}">
      </div>
      <div class="form-group">
        <label for="comment">Comentário</label>
      <textarea name="comment" id="" cols="20" rows="10" class="form-control">{{$comment->comment}}</textarea>
      </div>
      <div class="form-group">
        <label for="status">status :</label>
        <select name="status" id="" class="form-control">
          <option value="">--Selecione Status--</option>
          <option value="active" {{(($comment->status=='active')? 'selected' : '')}}>Ativo</option>
          <option value="inactive" {{(($comment->status=='inactive')? 'selected' : '')}}>Inativo</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
  </div>
</div>
@endsection

@push('styles')
<style>
    .order-info,.shipping-info{
        background:#ECECEC;
        padding:20px;
    }
    .order-info h4,.shipping-info h4{
        text-decoration: underline;
    }
</style>
@endpush
