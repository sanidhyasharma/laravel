

@extends('layout')

@section('content')
        
@foreach($tasks as $task)



	<div class="panel panel-primary" style="border-width: 2px">
		<div class="panel-heading" style="border-width: 2px">

			<h3 class="panel-title   "> {{$task->task}} </h3>
			
            <a class="btn btn-default btn-xs" href="{{route('task.edit',$task->id)}}" style="margin-left: 1020px; position: absolute;  " >Edit</a>

            <form action="{{route('task.destroy',$task->id)}}" method="post">
            	
             {{csrf_field()}}
             {{method_field('delete')}}
             <input type="submit" value="delete" class="btn btn-default btn-xs " style="margin-left: 1070px;position: absolute; ">

            </form>
            
		</div>
		<div class="panel-body">
			
{{$task->description}}
		</div>


	</div>



@endforeach
@endsection


