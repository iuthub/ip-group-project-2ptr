@extends('layouts.app')

@section('content')
     <div class="row">
     <div class="col-md-6">
    <h1>Create Sale</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype'=>'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>

       <div class="form-group">

        {{Form::select('category', array('Clothing' => 'Clothing',
        'Food' => 'Food', 'Technology'=> 'Technology', 'Other' => 'Other'), 'C')}}

        {{Form::select('amount', array('10' => '10%',
                '20' => '20%', '30'=> '30%', '40' => '40%'), '10')}}

       </div>

         <div class="form-group">
                    {{Form::label('body', 'Body')}}
                    {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Type something about'])}}
         </div>

         <div class="form-group">
                {{Form::file('cover_image')}}
         </div>

          {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
    </div></div>

@endsection