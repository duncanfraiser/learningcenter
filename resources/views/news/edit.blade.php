@extends('layouts.template')
@section('content')      
  <div class="col-md-11 pagedata" style=" background-color: #d9534f;">
      <h3>Upload News Page Content</h3>
        {{Form::model($news, ['method' => 'PATCH','action' => ['NewsController@update',$news->id],'files' => true])}}
          <div class="form-group">

          {{ Form::label('title', 'Daily News Title:')}}<br/>
          {{Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter Daily News Title'])}}
          {{ Form::label('body', 'Daily News Body:')}}<br/>
          {{Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Enter Daily News Body'])}}<br/>       
          {{ Form::label('picture', 'Upload News Image:')}}  
          {{ Form::label('picture', 'Current News Image: '.$news->img)}}<br/>
          {{ Form::label('picture', 'Upload News Image:')}}
          {{ Form::file('picture')}}
          </div>
          <div class="form-group" style="float: right">       
          {{Form::submit('Update News', ['class' => 'btn-primary formbtn'])}}
          </div>
      {{Form::close()}}
       <a style="float: right" href="{{ URL::previous() }}"><BUTTON class="btn-default formbtn">Cancel</BUTTON></a>
  </div>  
@stop
@section('scripts')
  @include('_includes.froala.froala-js')
  @include('_includes.froala.froala-options')
@stop