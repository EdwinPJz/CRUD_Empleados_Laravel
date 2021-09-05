<!-- Required meta tags -->
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS v5.0.2 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- Font Awesome 5-->
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<div class="container">
        <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
            <br><h1>EMPLEADOS</h1>
            <br>
            <br>
        </nav><br>
</div>
<div class="container">
    <table class="table table-striped table-inverse table-responsive">
        <thead class="thead-inverse">
            <tr>
                <th>ID</th>
                <th>Código</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Dirección</th>
                <th>Telefono</th>
                <th>Puesto</th>
                <th>Fecha Nacimiento</th>
                <th>Actions</th>
            </tr>
        </thead>
            <tbody>
                @foreach($empleados as $empleado)
                <tr>
                    <td>{{$empleado->id}}</td>
                    <td>{{$empleado->codigo}}</td>
                    <td>{{$empleado->nombres}}</td>
                    <td>{{$empleado->apellidos}}</td>
                    <td>{{$empleado->direccion}}</td>
                    <td>{{$empleado->telefono}}</td>
                    <td>{{$empleado->id_puesto}}</td>
                    <td>{{$empleado->fecha_nacimiento}}</td>
                    <td>
                        <div class="container">
                        <a class="btn btn-secondary" href="{{ url('/empleado/'.$empleado->id.'/edit') }}">
                            <i class="fas fa-marker"></i> 
                        </a>
                        </div>
                        <form action="{{ url('/empleado/'.$empleado->id) }}" method="post">
                        @csrf
                        {{ method_field('DELETE') }}
                        <input type="submit" onclick="return confirm('¿Quiéres eliminar el registro?')" class="btn btn-danger" value="Delete">
                        
                        <!--
                        <span class="btn btn-danger">
                            <i class="far fa-trash-alt"></i><input type="submit" class="far fa-trash-alt" value="."/>
                        </span>
                            
                            <input type="reset" onclick="return confirm('¿Quiéres eliminar el registro?')" class="btn btn-danger">
                                <i class="far fa-trash-alt"></i>
                            </input>
                        
                            <!---->
                            <div class="container">
                            
                            </div>
                            
                        </form>
                    </td>
                </tr>
                @endforeach 
            </tbody>
    </table>
    
</div>

