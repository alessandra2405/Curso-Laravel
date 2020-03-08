@if ($errors->any())  <!--errors se compila directamente es una variable de laravel-->
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert"aria-hidden="true"></button>
        <h4><i class="icon fa fa-ban"></i>El formulario contiene errores</h4>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>  
@endif
