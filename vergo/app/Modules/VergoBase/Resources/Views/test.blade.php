{!! Form::open(['method'=>"POST",'role'=>'form']) !!}
{!! Form::text('id',$model->id,['class'=>"hidden"]) !!}
{!! Form::text('name',$model->name) !!}
{!! Form::file('file_cover',$model->cover) !!}
{!! Form::text('position',$model->position) !!}
{!! Form::text('href',$model->href) !!}
{!! Form::submit('Submit') !!}
{!! Form::close() !!}