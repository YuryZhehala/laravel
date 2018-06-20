@extends('layouts.base')
@section('scripts')
@parent
<script src="{{asset('/ckeditor/ckeditor.js')}}"></script>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form enctype="multipart/form-data" method="post" action="{{asset('home')}}">
{!!csrf_field()!!}
    <div class="form-group">
      <label for="disabledTextInput">ФИО</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
    </div>
    <div class="form-group">
      <label for="disabledTextInput">Nickname</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
    </div>
    <div class="form-group">
      <label for="disabledTextInput">Контактный телефон</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
    </div>
    <div class="form-group">
      <label for="disabledTextInput">О себе</label>
      <textarea class="form-control ckeditor" name="body" id="editor1"></textarea>
    </div>
    
    <div class="form-group">
      <label for="disabledSelect">Страна</label>
      <select id="disabledSelect"  class="form-control">
        <option>Страна</option>
      </select>
    </div>
    <div class="form-group">
      <label for="disabledSelect">Город</label>
      <select id="disabledSelect" name="city" class="form-control">
        <option>Город</option>
      </select>
    </div>
    <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" name="picture1" id="exampleInputFile">
    <p class="help-block">Example block-level help text here.</p>
  </div>
    <div class="checkbox">
      <label>
        <input type="checkbox"> Can't check this
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
