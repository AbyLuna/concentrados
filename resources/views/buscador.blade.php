<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<div class="fixed-top">
        <a class="nav-link" href="{{ url('/home') }}">
            <img src="/img/menu7.png" width="25" height="auto" />
        </a>
</div> 


        
<center>
    <div class="jumbotron">
        <div class="text-center ">
            <img src="/img/siop5.png" width="300" height="auto"> 
        </div>   
    <strong>  <h3 style="color:#410106";>  Secretaría de Infraestructura y Obras Públicas  </strong> </h3>
    </div>
    <br><br>
    
    <div class="container">
        <form method=get action="{{ route('contratos.index') }}" value={{ '$texto' }}>
        <div class="input-group">
            <input type="text" class="form-control" name=texto  placeholder="No. de contrato o descripción">
            <input class= "btn btn-md btn-secondary" type="submit" >
        </div> <br>
        <strong>  <h6 style="color:#787879";> Busqueda por contrato o descripción  </strong> </h6>
        <br>
   </form>
</div>
@yield('contratos')
</center>
