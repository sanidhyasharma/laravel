@extends('layout')
@section('content')


<form action="/task/edit/{{$task->id}}" method="POST" role="form" style="display: inline-block;margin-left: 250px; width: 600px ;margin-top: 100px">

{{csrf_field()}}

{{method_field("put")}}

	<legend>Editing {{$task->task}}</legend>

	<div class="form-group">
            		
       <label for="title">Title</label>
       <input type="text" name="task" class="form-control" id="" placeholder="Input Field" value="{{$task->task}}">


	</div>

	<div class="form-group">
            		
       <label for="description">Description</label>
       <textarea name="description" type="text" class="form-control" id="" > {{$task->description}}</textarea>


	</div>
	<button type="submit" class="btn btn-primary">Submit</button>

	

</form>





@endsection