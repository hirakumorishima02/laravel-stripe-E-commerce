@extends('layouts.app')
@section('content')
<h1>Admin Page</h1>
  {!! Form::open([
    'route' => 'admin.store',
    'class' => 'form',

  ]) !!}
<div class="form-group">
    <label for="name">Product Name</label><br>
    <input type='text' name='name' id='name'>
</div>
<div class="form-group">
    <label for="description">Description</label><br>
    <textarea name='description' id='description'></textarea>
</div>
<div class="form-group">
    <label for="sku">SKU</label>
    <input type='text' name='sku' id='sku'>
    <label for="price">Price</label>
    <input type='text' name='price' id='price'>
    <label for="is_downloadble">Downloadble</label>
    <input type='checkbox' name='is_downloadble' id='is_downloadble'>
</div>
<div class="center-block form-actions">
  <button type="submit" class="submit-button btn btn-primary btn-lg">
    Add Product
  </button>
</div>
  {!! Form::close() !!}
@endsection