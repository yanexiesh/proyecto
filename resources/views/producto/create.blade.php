@extends('layouts.app')

@section('header')
    <style type="text/css">
        .addEstudent{
            text-align: center;
        }        
        label{
            width: 150px;
        }
        #exampleModalLongTitle{
            font-weight: bold;
            text-align: center;
        }
    </style>
@endsection

<!-- contenido interno del layouts -->
@section('content')
    <div class="container-fluid">
        <div class="wrap">
            <div class="row">
                <div class="col-md-6">
                    <h5>Agregar Producto</h5>
                    <p class="p-span">Ingrese la informacion del Producto</p>
                </div>
              
            </div>
            <!-- inicio de formulario -->
            <form action="{{ route('producto.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-row">
                    <!-- Lado izquierdo del formulario -->
                    <div class="form-group col-md-6 col-lg-6">
                        <div class="input-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control"  name="nombre" id="nombre" autocomplete="off" value="{{ old('nombre') }}" placeholder="Nombre" >
                        </div>
                        <div class="input-group">
                            <label for="descripcion">Descripcion</label>
                            <input type="text" class="form-control"  name="descripcion" id="descripcion" autocomplete="off" value="{{ old('descripcion') }}" placeholder="descripcion">
                            
                        </div>
                        <div class="input-group">
                            <label for="Slug">Slug</label>
                            <input type="text" class="form-control"  name="Slug" id="Slug" autocomplete="off" value="{{ old('Slug') }}" placeholder="Slug">
                            
                        </div>
                        <div class="input-group">
                            <label for="imagen">Imagen</label>
                            <input type="file" class="form-control"  name="imagen" id="imagen" autocomplete="off" value="{{ old('imagen') }}" onchange="previewImage(event, '#imgPreview')">
                            
                        </div>
                        <div class="input-group" >
                            <img id="imgPreview" style="display: none" src="" class="rounded float-left" alt="" width="200" height="200">
                        </div>

                                                        
                    </div>

                    <!-- lado derecho del formulario -->
                    <div class="form-group col-md-6 col-lg-6">
                        <div class="input-group">
                            <label for="precio">Precio</label>
                            <input type="text" class="form-control"  name="precio" id="precio" autocomplete="off" value="{{ old('precio') }}" placeholder="precio">

                           
                        </div> 
                        <div class="input-group">
                            <label for="shopping">Shoping cost</label>
                            <input type="text" class="form-control"  name="shopping" id="shopping" autocomplete="off" value="{{ old('shopping') }}" placeholder="shopping">

                           
                        </div> 
                        <div class="input-group">
                            <label for="categoria">Categoria id</label>
                            <select class="form-control select"   name="categoria" id="categoria" >
                                <option selected disabled>N/A</option>
                                <option value="0">Si</option>
                                <option value="1">No</option>                             
                            </select>
                           
                        </div>
                        <div class="input-group">
                            <label for="marca">Marca id</label>
                            <select class="form-control select"   name="marca" id="marca" >
                                <option selected disabled>N/A</option>
                                <option value="0">Si</option>
                                <option value="1">No</option>                             
                            </select>
                           
                        </div>
                        
                       
                        
                    </div>
                </div>
                <!-- botones de guardar y cancelar -->
                <div class="addEstudent">
                    <button class="btn btn-can">
                        <a href="{{ URL::previous() }}">Cancelar</a>
                    </button>
                    <button type="submit" class="btn btn-submit" value="enviar">
                        Guardar
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection



@section('scripts')
    <script>
        function previewImage(event, querySelector){

            //Recuperamos el input que desencadeno la acción
            const input = event.target;

            //Recuperamos la etiqueta img donde cargaremos la imagen
            $imgPreview = document.querySelector(querySelector);
            document.getElementById('imgPreview').style.removeProperty('display');
            // Verificamos si existe una imagen seleccionada
            if(!input.files.length) return

            //Recuperamos el archivo subido
            file = input.files[0];

            //Creamos la url
            objectURL = URL.createObjectURL(file);

            //Modificamos el atributo src de la etiqueta img
            $imgPreview.src = objectURL;
                        
        }
    </script>
@endsection