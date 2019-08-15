@extends('app')

@section('content')

<h1>Contact WeDewLawns</h1>

@if (count($errors) > 0)
    <div class="alert alert-danger">
        Please correct the following errors:<br />
        <ul>
            <!--エラーの表示-->
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!--novalidate属性が存在すると、フォームの入力内容の検証を無効にする。-->
{!! Form::open(array('route' => 'contact_store', 
  'class' => 'form', 'novalidate' => 'novalidate')) !!}

<div class="form-group">
    {!! Form::label('Your Name') !!}
    {!! Form::text('name', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your name')) !!}
</div>

<div class="form-group">
    {!! Form::label('Your E-mail Address') !!}
    {!! Form::text('email', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your e-mail address')) !!}
</div>

<div class="form-group">
    {!! Form::label('Your Message') !!}
    {!! Form::textarea('message', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your message')) !!}
</div>

<div class="form-group">
    {!! Form::submit('Contact Us!', 
      array('class'=>'btn btn-primary')) !!}
</div>
{!! Form::close() !!}

@endsection