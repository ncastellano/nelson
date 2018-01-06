@extends('template_n.main')

@section('title', 'Asignaturas')

@section('content')

  
   
<div clas="row"> 

	<div class="col-sm-3">
		<div class="form-group">
		<h4>Seleccione Asignatura</h4>
		<select id="asignaturas" class="form-control">	
			 @foreach($asignaturas as $asignatura)
	      	<option value="{{ $asignatura->id }}">	{{ $asignatura->descripcion }}</option>
	      
	 	   @endforeach
	    </select> 
	     </div>
	</div>
	<div class="col-sm-3">
		



	</div>     

      
</div>
@endsection
