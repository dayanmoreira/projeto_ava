@extends('backend.layouts.master')
@section('title','DonutsYoume || Brand Edit')
@section('main-content')

<div class="card">
    <h5 class="card-header">Editar marca</h5>
    <div class="card-body">
      <form method="post" action="{{route('brand.update',$brand->id)}}">
        @csrf
        @method('PATCH')
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Título <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="title" placeholder="Insira o título"  value="{{$brand->title}}" class="form-control">
        @error('title')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        <div class="form-group">
          <label for="status" class="col-form-label">Status <span class="text-danger">*</span></label>
          <select name="status" class="form-control">
            <option value="active" {{(($brand->status=='active') ? 'selected' : '')}}>Ativo</option>
            <option value="inactive" {{(($brand->status=='inactive') ? 'selected' : '')}}>Inativo</option>
          </select>
          @error('status')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="form-group mb-3">
           <button class="btn btn-success" type="submit">Atualizar</button>
        </div>
      </form>
    </div>
</div>

@endsection

@push('styles')
<link rel="stylesheet" href="{{asset('backend/summernote/summernote.min.css')}}">
@endpush
@push('scripts')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script src="{{asset('backend/summernote/summernote.min.js')}}"></script>
<script>
    $('#lfm').filemanager('image');

    $(document).ready(function() {
    $('#description').summernote({
      placeholder: "Escreva uma descrição curta.....",
        tabsize: 2,
        height: 150
    });
    });
</script>
@endpush
