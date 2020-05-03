@extends('layouts.app')

@section('content')
 <div class="row">
     <div class="col-md-6">
    <h1>Edit Post</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype'=>'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>

        <div class="form-group">

                {{Form::select('category', array('Clothing' => 'Clothing',
                'Food' => 'Food', 'Technology'=> 'Technology', 'Other' => 'Other'), $post->category)}}

                {{Form::select('amount', array('10' => '10%',
                        '20' => '20%', '30'=> '30%', '40' => '40%'), $post->amount)}}

               </div>


         <div class="form-group">
                    {{Form::label('body', 'Body')}}
                    {{Form::textarea('body', $post->body, ['class' => 'form-control', 'placeholder' => 'Type something about'])}}
         </div>
          <div class="form-group">
                         {{Form::file('cover_image')}}
          </div>
            {{Form::hidden('_method', 'PUT')}}
          {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
    </div></div>

@endsection