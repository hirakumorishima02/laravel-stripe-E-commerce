@extends('layouts.app')
@section('content')

@if (count($errors) > 0)
<div class="row">
    <div class='col s10 m10 l5 offset-s1 offset-m1 offset-l3'>
    <div class="card-panel red lighten-2">
        <h5>Please correct the following errors!</h5>
        <ul>
            <!--エラーの表示-->
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    </div>
</div>
@endif

<!--novalidate属性が存在すると、フォームの入力内容の検証を無効にする。-->
{!! Form::open(array('route' => 'contact_store', 
  'class' => 'form', 'novalidate' => 'novalidate')) !!}

<div class="row">
    <div class='col s10 m10 l5 offset-s1 offset-m1 offset-l3'>
    <h4>Contact Us!</h4>
    </div>
    <div class='col s10 m10 l5 offset-s1 offset-m1 offset-l3'>
        {!! Form::label('Your Name') !!}
        {!! Form::text('name', null, 
            array('required', 
                  'class'=>'form-control')) !!}
    </div>
    <div class='col s10 m10 l5 offset-s1 offset-m1 offset-l3'>
    {!! Form::label('Your E-mail Address') !!}
    {!! Form::text('email', null, 
        array('required', 
              'class'=>'form-control')) !!}
    </div>
    <div class='col s10 m10 l5 offset-s1 offset-m1 offset-l3'>
    {!! Form::label('Your Message') !!}
    {!! Form::textarea('message', null, 
        array('required', 
              'class'=>'form-control materialize-textarea', )) !!}
    </div>
    <div class='col s10 m10 l5 offset-s1 offset-m1 offset-l3'>
    {!! Form::submit('Send', 
      array('class'=>'btn btn-primary')) !!}
    </div>
</div>
{!! Form::close() !!}

@endsection