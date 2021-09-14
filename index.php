<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   <title>Teste API Marvel - DEXTRA - Personagens =D</title>
   <link rel="stylesheet" href="style.css">
</head>
<body >
   <script src="script.js"></script>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

   <div class="jumbotron">
      <div class="container">
         <h1 class="header-main-title">Buscar por </h1>
         <button type="button" onclick="porPersonagem()" class="btn btn-danger">Personagens</button>
         <button type="button" onclick="porId()" class="btn btn-danger">Personagem por ID</button>
         <button type="button" onclick="porComic()" class="btn btn-danger">Quadrinho</button>
         <button type="button" onclick="porSerie()" class="btn btn-danger">Séries</button>
         <button type="button" onclick="porEvento()" class="btn btn-danger">Eventos</button>
         <button type="button" onclick="porHistoria()" class="btn btn-danger">Histórias</button>
      </div>
   </div>

   <!-- BUSCA POR PERSONAGEM -->
   <div class="jumbotron" id="porpersonagem" name="porpersonagem" style="display: none">
      <div class="container" >
         <h1 class="header-main-title">Buscar personagem</h1>
            <form id="formBuscaPersonagem">
               <div class="form-group">
                  <div class="row col-md-12">
                     <label for="name" style="color:#FFFFFF">Nome</label>
                     <input type="text"
                            name="name"
                            id="name"
                            class="form-control"
                            placeholder="Informe o nome de personagem ou uma parte dele">
                  </div>
                  <div class="row col-md-12">
                     <label for="comics" style="color:#FFFFFF">N° quadrinhos</label>
                     <input type="text"
                            name="comics"
                            id="comics"
                            class="form-control"
                            placeholder="Informe o n° do quadrinho">
                  </div>
                  <div class="row col-md-12">
                     <label for="series" style="color:#FFFFFF">Série</label>
                     <input type="text"
                            name="series"
                            id="series"
                            class="form-control"
                            placeholder="Informe a série">
                  </div>
                  <div class="row col-md-12">
                     <label for="series" style="color:#FFFFFF">Evento</label>
                     <input type="text"
                            name="events"
                            id="events"
                            class="form-control"
                            placeholder="Informe o evento">
                  </div>
                  <div class="row col-md-12">
                     <label for="series" style="color:#FFFFFF">História</label>
                     <input type="text"
                            name="stories"
                            id="stories"
                            class="form-control"
                            placeholder="Informe a história">
                  </div>

               </div>
               <div class="col-md-12 text-center">
                  <button type="button" onclick="buscarPersonagemNome()" id="botaoSearchPersonagem"
                          value="Pesquisar" class="btn btn-success mb-2 float-center">
                     Pesquisar personagens
                  </button>
                  <i class="fa fa-search"></i>
               </div>
            </form>
    </div>
  </div>
<!-- FIM BUSCA POR PERSONAGEM -->
<!-- BUSCA POR ID -->
   <div class="jumbotron"  style="display: none" id="porid">
      <div class="container">
         <h1 class="header-main-title">Buscar personagem por ID</h1>
         <form id="formBuscaPersonagemId">
            <div class="form-group">
               <input required type="text"
                      name="characterId"
                      id="characterId"
                      class="form-control"
                      placeholder="Informe o ID do personagem Ex: 1009652 ">
            </div>
            <div class="col-md-12 text-center">
               <button type="button" onclick="buscarPersonagemId()" id="botaoSearch"
                       value="Pesquisar" class="btn btn-success mb-2 float-center">
                  Pesquisar por ID
               </button>
               <i class="fa fa-search"></i>
            </div>
         </form>
    </div>
  </div>
  <div class="container" id="contentContainer">
    <div class="d-flex align-items-center" id="spinnerChar"></div>
    <section id="viewPersonagem"></section>
  </div>

  <!-- FIM BUSCA POR ID -->
  <!-- FIM BUSCA POR COMIC -->
  <div class="jumbotron"  style="display: none" id="porcomic">
     <div class="container">
        <h1 class="header-main-title">Buscar quadrinhos por personagem</h1>
        <form id="formBuscaPersonagemQuadrinho">
           <div class="form-group">
              <label for="characterId" style="color:#FFFFFF">#ID:</label>
              <input required type="text"
                     name="characterIdQ"
                     id="characterIdQ"
                     class="form-control"
                     placeholder="Informe o ID do personagem Ex: 1009652 ">
              <label for="titleComic" style="color:#FFFFFF">Título do quadrinho</label>
              <input type="text"
                     name="titleComic"
                     id="titleComic"
                     class="form-control"
                     placeholder="Informe o título do quadrinho ou uma parte dele ">
               <label for="format" style="color:#FFFFFF">Formato</label>
               <select name="select" id="format" class="form-control">
                  <option value="" selected>--SELECIONE--</option>
                  <option value="comic">Comic</option>
                  <option value="magazine">Magazine</option>
                  <option value="tradepaperback">Trade paperback</option>
                  <option value="hardcover">Hardcover</option>
                  <option value="digest">Digest</option>
                  <option value="graphicnovel">Graphic novel</option>
                  <option value="digitalcomic">Digital comic</option>
                  <option value="infinite comic">Infinite comic</option>
               </select>
               <label for="formatType" style="color:#FFFFFF">Tipo Formato</label>
               <select name="select" id="formatType" class="form-control">
                  <option value="" selected>--SELECIONE--</option>
                  <option value="comic">Comic</option>
                  <option value="collection">Collection</option>
               </select>
               <label for="startYear" style="color:#FFFFFF">Ano de início</label>
               <input type="text"
                      name="startYear"
                      id="startYear"
                      class="form-control"
                      placeholder="Informe o ano de início">
               <label for="diamondCode" style="color:#FFFFFF">Código Diamante</label>
               <input type="text"
                      name="diamondCode"
                      id="diamondCode"
                      class="form-control"
                      placeholder="Informe o código diamante">
               <label for="digitalId" style="color:#FFFFFF">Código digital do quadrinho</label>
               <input type="text"
                      name="digitalId"
                      id="digitalId"
                      class="form-control"
                      placeholder="Informe o código digital">
               <label for="serieC" style="color:#FFFFFF">Série</label>
               <input type="text"
                      name="serieC"
                      id="serieC"
                      class="form-control"
                      placeholder="Informe a série">
               <label for="dateRange" style="color:#FFFFFF">Data</label>
               <input type="text"
                      name="dateRange"
                      id="dateRange"
                      class="form-control"
                      placeholder="Informe a data no formato (data inicial,data final). EX: 2021-09-14,2021-10-14">

            </div>
            <div class="col-md-12 text-center">
               <button type="button" onclick="buscarPersonagemIdQuadrinho()" id="botaoSearchQ"
                       value="Pesquisar" class="btn btn-success mb-2 float-center">
                    Pesquisar por quadrinho
               </button>
               <i class="fa fa-search"></i>
            </div>
        </form>
  </div>
</div>
<div class="container" id="contentContainerPersonagensQuadrinho">
  <div class="d-flex align-items-center" id="spinnerChar"></div>
  <section id="viewPersonagensQuadrinho"></section>
</div>
<!-- FIM BUSCA POR COMIC -->
<!-- FIM BUSCA POR SERIE -->
<div class="jumbotron"  style="display: none" id="porserie">
   <div class="container">
     <h1 class="header-main-title">Buscar séries por personagem</h1>
     <form id="formBuscaPersonagemSerie">
         <div class="form-group">
           <label for="characterIdS" style="color:#FFFFFF">#ID:</label>
           <input required type="text"
                   name="characterIdS"
                   id="characterIdS"
                   class="form-control"
                   placeholder="Informe o ID do personagem Ex: 1009652 ">
           <label for="titleSerie" style="color:#FFFFFF">Título da serie</label>
           <input type="text"
                   name="titleSerie"
                   id="titleSerie"
                   class="form-control"
                   placeholder="Informe o título da série ou uma parte dele ">

            <label for="startYearS" style="color:#FFFFFF">Ano de início</label>
            <input type="text"
                    name="startYearS"
                    id="startYearS"
                    class="form-control"
                    placeholder="Informe o ano de início">
            <label for="comicSerie" style="color:#FFFFFF">Código quadrinho</label>
            <input type="text"
                    name="comicSerie"
                    id="comicSerie"
                    class="form-control"
                    placeholder="Informe o código do quadrinho">
            <label for="seriesType" style="color:#FFFFFF">Tipo de série</label>
            <select name="select" id="seriesType" class="form-control">
                 <option value="" selected>--SELECIONE--</option>
                 <option value="collection">Collection</option>
                 <option value="one shot">One shot</option>
                 <option value="limited">Limited</option>
                 <option value="ongoing">Ongoing</option>
            </select>

          </div>
          <div class="col-md-12 text-center">
             <button type="button" onclick="buscarPersonagemIdSerie()" id="botaoSearchS"
                     value="Pesquisar" class="btn btn-success mb-2 float-center">
                  Pesquisar por série
             </button>
             <i class="fa fa-search"></i>
          </div>
     </form>
</div>
</div>
<div class="container" id="contentContainerPersonagensSerie">
<div class="d-flex align-items-center" id="spinnerChar"></div>
<section id="viewPersonagensSerie"></section>
</div>
<!-- FIM BUSCA POR SERIE -->

<!-- FIM BUSCA POR EVENTO -->
<div class="jumbotron"  style="display: none" id="porevento">
   <div class="container">
     <h1 class="header-main-title">Buscar eventos por personagem</h1>
     <form id="formBuscaPersonagemEvento">
         <div class="form-group">
           <label for="characterIdE" style="color:#FFFFFF">#ID:</label>
           <input required type="text"
                   name="characterIdE"
                   id="characterIdE"
                   class="form-control"
                   placeholder="Informe o ID do personagem Ex: 1009652 ">
           <label for="titleEvento" style="color:#FFFFFF">Nome do evento</label>
           <input type="text"
                   name="titleEvento"
                   id="titleEvento"
                   class="form-control"
                   placeholder="Informe o nome do evento ou uma parte dele ">
            <label for="comicEvento" style="color:#FFFFFF">Código quadrinho</label>
            <input type="text"
                    name="comicEvento"
                    id="comicEvento"
                    class="form-control"
                    placeholder="Informe o código do quadrinho">

          </div>
          <div class="col-md-12 text-center">
             <button type="button" onclick="buscarPersonagemIdEvento()" id="botaoSearchE"
                     value="Pesquisar" class="btn btn-success mb-2 float-center">
                  Pesquisar por evento
             </button>
             <i class="fa fa-search"></i>
          </div>
     </form>
</div>
</div>
<div class="container" id="contentContainerPersonagensEventos">
<div class="d-flex align-items-center" id="spinnerChar"></div>
<section id="viewPersonagensEventos"></section>
</div>
<!-- FIM BUSCA POR EVENTO -->
<!-- FIM BUSCA POR STORY -->
<div class="jumbotron"  style="display: none" id="porhistoria">
   <div class="container">
      <h1 class="header-main-title">Buscar personagem por história</h1>
      <form id="formBuscaPersonagemHistoria">
         <div class="form-group">
           <label for="characterIdH" style="color:#FFFFFF">#Id:</label>
            <input required type="text"
                   name="characterIdH"
                   id="characterIdH"
                   class="form-control"
                   placeholder="Informe o ID do personagem Ex: 1009652 ">
         </div>
         <div class="form-group">
           <label for="modifiedSince" style="color:#FFFFFF">Modificado desde</label>
            <input required type="text"
                   name="modifiedSince"
                   id="modifiedSince"
                   class="form-control"
                   placeholder="Informe a data Ex: 2021-09-14">
         </div>
         <div class="col-md-12 text-center">
            <button type="button" onclick="buscarPersonagemIdStory()" id="botaoSearchH"
                    value="Pesquisar" class="btn btn-success mb-2 float-center">
               Pesquisar por história
            </button>
            <i class="fa fa-search"></i>
         </div>
      </form>
</div>
</div>
<div class="container" id="contentContainerPersonagensStory">
<div class="d-flex align-items-center" id="spinnerChar"></div>
<section id="viewPersonagensStory"></section>
</div>
<!-- FIM BUSCA POR STORY -->
</body>
</html>
