<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RENIEC-PORTAL DE CONSULTAS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <center>
        <br>
        <h3>CONSULTAS DE RUC</h3>   
        <div class="btn-group">
            <input type="text" id="documento" class="form-control">
            <button id="buscar" class="btn btn-primary" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                </svg>
            </button>
        </div>


        <br><br>
        <div class="form">

            <div class="col-sm-5"></div>
            <div class="col-sm-2">
                <input type="text" class="form-label-margin-top" size="45" id="nombre" disabled >
            </div>
            <div class="col-sm-5"></div>

            <div class="col-sm-5"></div>
            <div class="col-sm-2">
                <input type="text" class="form-label-margin-top" size="45" id="estado" disabled>
            </div>
            <div class="col-sm-5"></div>

            <div class="col-sm-5"></div>
            <div class="col-sm-2">
                <input type="text" class="form-label-margin-top" size="45" id="direc" disabled>
            </div>
            <div class="col-sm-5"></div>

            <div class="col-sm-5"></div>
            <div class="col-sm-2">
                <input type="text" class="form-label-margin-top" size="45" id="tipo_doc" disabled>
            </div>
            <div class="col-sm-5"></div>

            <div class="col-sm-5"></div>
            <div class="col-sm-2">
                <input type="text" class="form-label-margin-top" size="45" id="depa" disabled>
            </div>
            <div class="col-sm-5"></div>

            <div class="col-sm-5"></div>
            <div class="col-sm-2">
                <input type="text" class="form-label-margin-top" size="45" id="nom_via" disabled>
            </div>
            <div class="col-sm-5"></div>

            <div class="col-sm-5"></div>
            <div class="col-sm-2">
                <input type="text" class="form-label-margin-top" size="45" id="cod_zona" disabled>
            </div>
            <div class="col-sm-5"></div>

            <div class="col-sm-5"></div>
            <div class="col-sm-2">
                <input type="text" class="form-label-margin-top" size="45" id="num" disabled>
            </div>
            <div class="col-sm-5"></div>

        </div>


</body>
</center>

<script>
    $('#buscar').click(function() {
        ruc = $('#documento').val();
        $.ajax({
            url: "consultas/consultarRuc.php",
            type: "post",
            data: "ruc=" + ruc,
            dataType: "json",
            success: function(r) {
                if (r.numeroDocumento == ruc) {
                    $('#nombre').val(r.nombre);
                    $('#tipo_doc').val(r.tipoDocumento);
                    //('#num_doc').val(r.numeroDocumento);
                    $('#estado').val(r.estado);
                    $('#condicion').val(r.condicion);
                    $('#direc').val(r.direccion);
                    $('#ubi').val(r.ubigeo);
                    $('#tipo_via').val(r.viaTipo);
                    $('#nom_via').val(r.viaNombre);
                    $('#cod_zona').val(r.zonaCodigo);
                    $('#num').val(r.numero);
                    $('#lote').val(r.lote);
                    $('#kill').val(r.kilometro);
                    $('#dist').val(r.distrito);
                    $('#prov').val(r.provincia);
                    $('#depa').val(r.departamento);
                } else {
                    alert('error');
                }
            }
        });
    });
</script>

</html>