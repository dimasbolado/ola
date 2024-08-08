<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
 
  <div class="khabsjnasdk">
    <div>
      <img class="alhdjansda" src="img/logoTop.png" alt="Logo">
    </div>
    <div>
      <p class="kandklsalds">Parceiros:</p>
      <img class="lajdjadsad" src="img/logoOperadoras.png" alt="Logos de operadoras">
    </div>
    <p class="aldlksajdlk">Aproveite, promoção por tempo limitado.</p>
    <input id="celular" class="kjbdsknfkds" type="tel" placeholder="DDD + N° de Telefone"><br>
    <button class="dshfjsnlf">Recarregar Agora</button>
  </div>

  <div class="hkasdkjasd"><br><br><br>
    <div class="lasndlkmsad">
      <br>
      <p id="preco" class="kajsbdkjsand">R$15</p>
      <p class="jadbjnsad">+1GB</p>
      <p class="sandjnasdlk">de bônus de internet</p>
      <p class="kajsdjknsd">(Válido por 7 dias)</p>
    </div>
    <div class="lasndlkmsad-2">
      <br>
      <p class="kajsbdkjsand">R$20</p>
      <p class="jadbjnsad">+2GB</p>
      <p class="sandjnasdlk">de bônus de internet</p>
      <p class="kajsdjknsd">(Válido por 7 dias)</p>
      <button class="kjadkja" data-bs-toggle="modal" data-bs-target="#recarregarModal">Recarregar</button>
    </div>
    <div class="lasndlkmsad-3">
      <br>
      <p class="kajsbdkjsand">R$35</p>
      <p class="jadbjnsad">+4GB</p>
      <p class="sandjnasdlk">de bônus de internet</p>
      <p class="kajsdjknsd">(Válido por 7 dias)</p>
      <button class="kjadkja" data-bs-toggle="modal" data-bs-target="#recarregarModal">Recarregar</button>
    </div>
    <div class="lasndlkmsad-4">
      <br>
      <p class="kajsbdkjsand">R$50</p>
      <p class="jadbjnsad">+8GB</p>
      <p class="sandjnasdlk">de bônus de internet</p>
      <p class="kajsdjknsd">(Válido por 7 dias)</p>
      <button class="kjadkja" data-bs-toggle="modal" data-bs-target="#recarregarModal">Recarregar</button>
    </div>
    <div class="ljandjlkmasd">
      <p class="ihabdnsad">Promoção válida somente para pagamento via PIX.</p>
      <img class="iyagsdiusja" src="img/logopix.png" alt="Logo PIX">
    </div>
    <div class="ajhdjadmlkasd">
      <img class="sadjnasjdn" src="img/logoscard.png" alt="Logos de cartões">
    </div>
    <div><img class="asdasdasd" src="img/verif.png" alt=""> <p class="asdasdgdfsg">Todos os direitos reservados <br> Recarga Instituição de Pagamento Ltda. CNPJ: 11.275.560/0001-75.</p>  
    <div><img class="oilsjfoiusf" src="img/logofinal.png" alt=""></div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="recarregarModal" tabindex="-1" aria-labelledby="recarregarModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="recarregarModalLabel">Confirmar Recarregamento</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Você tem certeza que deseja recarregar o valor selecionado?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary">Confirmar</button>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#celular').mask('(99)99999-9999');
    });
  </script>
</body>
</html>
