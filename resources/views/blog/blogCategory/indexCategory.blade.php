@extends('layouts.appblog')

@section('title', '| All Categories')

@section('blogcontent')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1>Categories</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $key => $category)
                        <tr>
                            <th>{{ $category->id }}</th>
                            <td>{{ $category->name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-3">
            <div class="well">
                <h2>New Category</h2>
                {!! Form::open(['route' => 'categories.store', 'method' => 'POST']) !!}
                <div class="form-group">
                    {{Form::label('name', 'Name:')}}
                    {{Form::text('name', '', ['class' => 'form-control'])}}
                </div>
                <div class="form-group">
                    {{Form::submit('Create New Category', ['class' => 'btn btn-primary btn-block'])}}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
