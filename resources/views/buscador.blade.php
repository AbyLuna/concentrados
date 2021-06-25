<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<center>
    <div class="jumbotron">
        <div class="text-center ">
            <img src="/img/siop5.png" width="auto" height="auto">
        </div>
        <h2> <strong> Secretaría de Infraestructura y Obras Públicas </strong></h2>
    </div>
    <br><br><br>
    <form method=get action="{{ route('contratos.index') }}" value={{ '$texto' }}>
        <input  type=text name=texto>
        <input class= "btn btn-md btn-succes" type="submit">

        </td>
        </tr>
    </form>

@yield('contratos')
</center>