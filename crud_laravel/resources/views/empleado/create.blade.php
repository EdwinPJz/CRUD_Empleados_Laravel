<!-- Required meta tags -->
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Awesome 5-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <div class="container">
        <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
            <br><h1>FORMULARIO EMPLEADOS</h1>
            <br>
            <br>
        </nav><br>
    </div>

<div class="container">
          <form class="d-flex" action="{{ url('/empleado') }}" method="post">
          @csrf
              <div class="col">
                  <div class="mb-3">
                      <label for="lbl_codigo" class="form-label"><b>Código</b></label>
                      <input type="text" name="codigo" id="codigo" class="form-control" placeholder="EOO1" Required>
                  </div>
                  <div class="mb-3">
                      <label for="lbl_nombres" class="form-label"><b>Nombres</b></label>
                      <input type="text" name="nombres" id="txt_nombres" class="form-control" placeholder="Nombres: Nombre1 Nombre2" Required>
                  </div>
                  <div class="mb-3">
                      <label for="lbl_apellidos" class="form-label"><b>Apellidos</b></label>
                      <input type="text" name="apellidos" id="txt_apellidos" class="form-control" placeholder="Nombres: Apellido1 Apellido2" Required>
                  </div>
                  <div class="mb-3">
                      <label for="lbl_direccion" class="form-label"><b>Dirección</b></label>
                      <input type="text" name="direccion" id="txt_direccion" class="form-control" placeholder="Dirección: Lugar #Casa Zona Avenida" Required>
                  </div>
                  <div class="mb-3">
                      <label for="lbl_telefono" class="form-label"><b>Teléfono</b></label>
                      <input type="number" name="telefono" id="txt_telefono" class="form-control" placeholder="0000 0000" Required>
                  </div>
                  <div class="mb-3">
                    <label for="" class="lbl_puesto"><b>Puesto</b></label>
                    <select class="form-select" name="id_puesto" id="drop_puesto">
                      <option value=0>---Puesto---</option>
                      <option value=1>Programador</option>
                      <option value=2>Analista</option>
                      
                    </select>
                  </div>
                  <div class="mb-3">
                      <label for="lbl_fn" class="form-label"><b>Fecha de Nacimiento</b></label>
                      <input type="date" name="fecha_nacimiento" id="txt_fn" class="form-control" placeholder="aaaa-mmm-ddd" Required>
                  </div>
                  <div class="mb-3">
                      <input type="submit" class="btn btn-primary" value="Agregar" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modelId">
                  </div>
                  <!-- Button trigger modal -->
                  
                  
                  <!-- Modal 
                  <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                          <div class="modal-content">
                                  <div class="modal-header">
                                          <h5 class="modal-title">Agregar Empleado</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                              <div class="modal-body">
                                  <div class="container-fluid">
                                      Empleado agregado con éxito...
                                  </div>
                              </div>
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  
                              </div>
                          </div>
                      </div>
                  </div>
                  -->
                  
              </div>
          </form>  
                  
        </div>