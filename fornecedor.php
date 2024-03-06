
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOS TRAUMAS</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- BS ICONS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
        </script>
</head>

<body class="bodyInicio">

  <!--Nav Bar-->

  
      <div style="margin-left:25%;padding:1px 16px;height:100%;">
  <form action="create.php" method="post">
    <br>
    <h3>CADASTRO DE FORNECEDOR</h3>

    <div class="col-12">
      <label for="inputnome" class="form-label">Nome</label>
      <input type="text" class="form-control" id="idfornecedor" name="nome">
    </div>

    <div  class="col-12">
      <label for="inputendereco" class="form-label">Endereço</label>
      <input type="text" class="form-control" id="idfornecedor" name="endereco">
    </div>

    <div class="col-md-12">
      <label for="inputEmail4" class="form-label">Telefone</label>
      <input type="text" class="form-control" id="idfornecedor" name="telefone">
    </div>
    
    <div class="col-md-12">
      <label for="inputEmail4" class="form-label">E-mail</label>
      <input type="email" class="form-control" id="idfornecedor" name="email">
    </div>
    
    <div class="col-md-12">
      <label for="inputSite" class="form-label">Site</label>
      <input type="text" class="form-control" id="inputSite" name="site">
    </div>
    <br>
    <div>
      <input  type="submit" name="submit" value="Salvar">
    </div>
  </form>
</div>


</body>



