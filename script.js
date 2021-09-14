function porPersonagem(){
   //funcao que controla busca por personagem botao
   document.getElementById('porpersonagem').style.display = "block";
   document.getElementById('porid').style.display         = "none";
   document.getElementById('porcomic').style.display      = "none";
   document.getElementById('porserie').style.display      = "none";
   document.getElementById('porevento').style.display     = "none";
   document.getElementById('porhistoria').style.display   = "none";

   document.getElementById("viewPersonagem").innerHTML           = '';
   document.getElementById("viewPersonagensSerie").innerHTML     = '';
   document.getElementById("viewPersonagensQuadrinho").innerHTML = '';
   document.getElementById("viewPersonagensEventos").innerHTML   = '';
   document.getElementById("viewPersonagensStory").innerHTML     = '';
}

function porId(){
   //funcao que controla busca por id personagem botao
   document.getElementById('porpersonagem').style.display = "none";
   document.getElementById('porid').style.display         = "block";
   document.getElementById('porcomic').style.display      = "none";
   document.getElementById('porserie').style.display      = "none";
   document.getElementById('porevento').style.display     = "none";
   document.getElementById('porhistoria').style.display   = "none";

   document.getElementById("viewPersonagem").innerHTML           = '';
   document.getElementById("viewPersonagensSerie").innerHTML     = '';
   document.getElementById("viewPersonagensQuadrinho").innerHTML = '';
   document.getElementById("viewPersonagensEventos").innerHTML   = '';
   document.getElementById("viewPersonagensStory").innerHTML     = '';
}

function porComic(){
   //funcao que controla busca por quadrinhos botao
   document.getElementById('porpersonagem').style.display = "none";
   document.getElementById('porid').style.display         = "none";
   document.getElementById('porcomic').style.display      = "block";
   document.getElementById('porserie').style.display      = "none";
   document.getElementById('porevento').style.display     = "none";

   document.getElementById("viewPersonagem").innerHTML          = '';
   document.getElementById("viewPersonagensSerie").innerHTML     = '';
   document.getElementById("viewPersonagensQuadrinho").innerHTML = '';
   document.getElementById("viewPersonagensEventos").innerHTML   = '';
   document.getElementById("viewPersonagensStory").innerHTML     = '';
}

function porSerie(){
   //funcao que controla busca por serie botao
   document.getElementById('porpersonagem').style.display = "none";
   document.getElementById('porid').style.display         = "none";
   document.getElementById('porcomic').style.display      = "none";
   document.getElementById('porserie').style.display      = "block";
   document.getElementById('porevento').style.display     = "none";
   document.getElementById('porhistoria').style.display   = "none";

   document.getElementById("viewPersonagem").innerHTML           = '';
   document.getElementById("viewPersonagensSerie").innerHTML     = '';
   document.getElementById("viewPersonagensQuadrinho").innerHTML = '';
   document.getElementById("viewPersonagensEventos").innerHTML   = '';
   document.getElementById("viewPersonagensStory").innerHTML     = '';
}

function porEvento(){
   //funcao que controla busca por evento botao
   document.getElementById('porpersonagem').style.display = "none";
   document.getElementById('porid').style.display         = "none";
   document.getElementById('porcomic').style.display      = "none";
   document.getElementById('porserie').style.display      = "none";
   document.getElementById('porevento').style.display     = "block";
   document.getElementById('porhistoria').style.display   = "none";

   document.getElementById("viewPersonagem").innerHTML          = '';
   document.getElementById("viewPersonagensSerie").innerHTML     = '';
   document.getElementById("viewPersonagensQuadrinho").innerHTML = '';
   document.getElementById("viewPersonagensEventos").innerHTML   = '';
   document.getElementById("viewPersonagensStory").innerHTML     = '';
}

function porHistoria(){
   //funcao que controla busca por historia botao
   document.getElementById('porpersonagem').style.display = "none";
   document.getElementById('porid').style.display         = "none";
   document.getElementById('porcomic').style.display      = "none";
   document.getElementById('porserie').style.display      = "none";
   document.getElementById('porevento').style.display     = "none";
   document.getElementById('porhistoria').style.display   = "block";

   document.getElementById("viewPersonagem").innerHTML           = '';
   document.getElementById("viewPersonagensSerie").innerHTML     = '';
   document.getElementById("viewPersonagensQuadrinho").innerHTML = '';
   document.getElementById("viewPersonagensEventos").innerHTML   = '';
   document.getElementById("viewPersonagensStory").innerHTML     = '';
}

//monta filtros e url
function buscarPersonagemId() {

   if($("#characterId").val() != null &&  $("#characterId").val() != ''){
      var url = "./character/characterId.php?characterId=" + $("#characterId").val();
      conectarPersonagens(url);
   }else{
      alert('Informe um personagem!');
   }
}

function buscarPersonagemNome() {
   if($("#name").val()    == null && $("#name").val()    == '' &&
      $("#comics").val()  == null && $("#comics").val()  == '' &&
      $("#events").val()  == null && $("#events").val()  == '' &&
      $("#stories").val() == null && $("#stories").val() == '' &&
      $("#series").val()  == null && $("#series").val()  == ''){
      alert('Informe algo para continuar');
   }else{

      const name        = document.getElementById("name").value;
      const comic       = document.getElementById("comics").value;
      const serie       = document.getElementById("series").value;
      const eventx      = document.getElementById("events").value;
      const storie      = document.getElementById("stories").value;

      var url = "./character/characters.php?nameStartsWith=" + name+"&comics="+comic+"&series="+serie+"&events="+eventx+"&stories"+storie
      conectarPersonagens(url);
   }
}

function buscarPersonagemIdQuadrinho() {

   if($("#characterIdQ").val() == null || $("#characterIdQ").val() == ''){
      alert('Informe ao menos o ID do personagem para continuar');
   }else{
      const characterId     = document.getElementById("characterIdQ").value;
      const titleStartsWith = document.getElementById("titleComic").value;
      const format          = document.getElementById("format").value;
      const formatType      = document.getElementById("formatType").value;
      const startYear       = document.getElementById("startYear").value;
      const diamondCode     = document.getElementById("diamondCode").value;
      const digitalId       = document.getElementById("digitalId").value;
      const serie           = document.getElementById("serieC").value;
      const dateRange       = document.getElementById("dateRange").value;


      var url = "./character/comics.php?"+
                                             "characterId=" + characterId+
                                             "&titleStartsWith="+titleStartsWith+
                                             "&startYear="+startYear+
                                             "&format="+format+
                                             "&formatType="+formatType+
                                             "&diamondCode="+diamondCode+
                                             "&digitalId="+digitalId+
                                             "&series="+serie+
                                             "&dateRange="+dateRange;
      conectarPersonagensQuadrinho(url);
   }
}

function buscarPersonagemIdSerie() {

   if($("#characterIdS").val() == null || $("#characterIdS").val() == ''){
      alert('Informe ao menos o ID do personagem para continuar');
   }else{
      const characterId     = document.getElementById("characterIdS").value;
      const titleStartsWith = document.getElementById("titleComic").value;
      const startYear       = document.getElementById("startYearS").value;
      const comic           = document.getElementById("comicSerie").value;
      const seriesType      = document.getElementById("seriesType").value;


      var url = "./character/series.php?"+
                                             "characterId=" + characterId+
                                             "&titleStartsWith="+titleStartsWith+
                                             "&startYear="+startYear+
                                             "&seriesType="+seriesType+
                                             "&comics="+comic;
      conectarPersonagensSerie(url);
   }
}

function buscarPersonagemIdEvento() {

   if($("#characterIdE").val() == null || $("#characterIdE").val() == ''){
      alert('Informe ao menos o ID do personagem para continuar');
   }else{
      const characterId     = document.getElementById("characterIdE").value;
      const nameStartsWith  = document.getElementById("titleEvento").value;
      const comic           = document.getElementById("comicEvento").value;

      var url = "./character/events.php?"+
                                          "characterId=" + characterId+
                                          "&nameStartsWith="+nameStartsWith+
                                          "&comics="+comic;
      conectarPersonagensEventos(url);
   }
}

function buscarPersonagemIdStory() {

   if($("#characterIdH").val() == null || $("#characterIdH").val() == ''){
      alert('Informe ao menos o ID do personagem para continuar');
   }else{
      const characterId     = document.getElementById("characterIdH").value;
      const modifiedSince   = document.getElementById("modifiedSince").value;

      var url = "./character/stories.php?"+
                                          "characterId=" + characterId+
                                          "&modifiedSince="+modifiedSince;
      conectarPersonagensStory(url);
   }
}

//renderiza na tela as informações conforme tipo de busca

function conectarPersonagens(url) {
   document.getElementById("spinnerChar").innerHTML = "";
   const request = new XMLHttpRequest();

   request.open("GET", url, true);
   request.setRequestHeader("X-Requested-With", "XMLHttpRequest");
   request.onloadstart = function() {
                     document.getElementById("spinnerChar").innerHTML = '<strong id="spinnerText" class="text-primary">Carregando...</strong>' +
                                                                        '<div class="text-primary spinner-border ml-auto" role="status" ' +
                                                                        'aria-hidden="true" id="spinner"></div>';
   }

   request.onload = function() {
      if (this.status == 200) {

         const results = JSON.parse(this.responseText);

         if (results["code"] != 200 || results["data"].count === 0) {
            document.getElementById("viewPersonagem").innerHTML ='<h2 id="tituloPersonagem"><span style="font-weight:bold;">Sem Resultados</span></h2>';
            document.getElementById("spinnerChar").innerHTML = "";

         }else if (results == undefined || results.length == 0) {
            document.getElementById("viewPersonagem").innerHTML ='<h2 id="tituloPersonagem">Ocorreu um erro, tente novamente.</h2>';
            document.getElementById("spinnerChar").innerHTML = "";

         } else {
            const retorno = results["data"].results;

            var html = "";
            for(var i in retorno){
               html +=
                  '<h2 id="tituloPersonagem">Personagem</h2>' +
                     '<div class="card flex-md-row mb-4 box-shadow h-md-250" id="characterCard">' +
                     '<div id="characterImage">' +
                     '<img class="card-img-right flex-auto d-md-block img-fluid"' +
                     ' alt="Picture of ' +
                     retorno[i].name +
                     '" src="' +
                     retorno[i].thumbnail["path"] +
                     "." +
                     retorno[i].thumbnail["extension"] +
                     '">' +
                     "</div>" +
                     '<div class="card-body d-flex flex-column align-items-start">' +
                     '<h3 class="mb-0 text-dark" id="characterName"> #ID:'+retorno[i].id +" Name: "+
                     retorno[i].name +
                     " </h3>" +
                     '<p class="card-text mb-3" id="characterDescription">';

               if (retorno[i].description !== "") {
                  html += retorno.description;
               }

               html +=
                "</p>" +
                '<p class="text-muted mb-3" id="comicsAvailable">' +
                "Comics: " +
                retorno[i].comics.available +
                " | " +
                "Series: " +
                retorno[i].series.available +
                " | " +
                "Stories: " +
                retorno[i].stories.available +
                " | " +
                "Events: " +
                retorno[i].events.available +
                "</p>" +
                '<p class="mb-1 text-muted" id="characterInfoAttribution">' +
                results["attributionText"] +
                "</p>" +
                "</div>" +
                "</div>";
            }
           document.getElementById("viewPersonagem").innerHTML = html;

         }

      } else {
         document.getElementById("viewPersonagem").innerHTML = '<h2 id="tituloPersonagem">Nenhum resultado encontrado</h2>';
      }
   }
   request.onloadend = function() {
      document.getElementById("spinnerChar").innerHTML = "";
   }
   request.send()
}

function conectarPersonagensSerie(url) {
   document.getElementById("spinnerChar").innerHTML = "";
   const request = new XMLHttpRequest();

   request.open("GET", url, true);
   request.setRequestHeader("X-Requested-With", "XMLHttpRequest");
   request.onloadstart = function() {
                     document.getElementById("spinnerChar").innerHTML = '<strong id="spinnerText" class="text-primary">Carregando...</strong>' +
                                                                        '<div class="text-primary spinner-border ml-auto" role="status" ' +
                                                                        'aria-hidden="true" id="spinner"></div>';
   }

   request.onload = function() {
      if (this.status == 200) {

         const results = JSON.parse(this.responseText);

         if (results["code"] != 200 || results["data"].count === 0) {
            document.getElementById("viewPersonagensSerie").innerHTML ='<h2 id="tituloPersonagem"><span style="font-weight:bold;">Sem Resultados</span></h2>';
            document.getElementById("spinnerChar").innerHTML = "";

         }else if (results == undefined || results.length == 0) {
            document.getElementById("viewPersonagemSerie").innerHTML ='<h2 id="tituloPersonagem">Ocorreu um erro, tente novamente.</h2>';
            document.getElementById("spinnerChar").innerHTML = "";

         } else {
            const retorno = results["data"].results;

            var html = "";
            for(var i in retorno){
               html +=
                     '<div class="card flex-md-row mb-4 box-shadow h-md-250" id="characterCard">' +
                     '<div id="characterImage">' +
                     '<img class="card-img-right flex-auto d-md-block img-fluid"' +
                     ' alt="Picture of ' +
                     retorno[i].title +
                     '" src="' +
                     retorno[i].thumbnail["path"] +
                     "." +
                     retorno[i].thumbnail["extension"] +
                     '">' +
                     "</div>" +
                     '<div class="card-body d-flex flex-column align-items-start">' +
                     '<h3 class="mb-0 text-dark" id="characterTitle"> #ID:'+retorno[i].id +" Título: "+
                     retorno[i].title +
                     " </h3>" +
                     '<p class="card-text mb-3" id="characterSerie">Ano:'+retorno[i].startYear+'</div></div>';

            }
           document.getElementById("viewPersonagensSerie").innerHTML = html;

         }

      } else {
         document.getElementById("viewPersonagensSerie").innerHTML = '<h2 id="tituloPersonagem">Nenhum resultado encontrado</h2>';
      }
   }
   request.onloadend = function() {
      document.getElementById("spinnerChar").innerHTML = "";
   }
   request.send()
}
function conectarPersonagensQuadrinho(url) {
   document.getElementById("spinnerChar").innerHTML = "";
   const request = new XMLHttpRequest();

   request.open("GET", url, true);
   request.setRequestHeader("X-Requested-With", "XMLHttpRequest");
   request.onloadstart = function() {
                     document.getElementById("spinnerChar").innerHTML = '<strong id="spinnerText" class="text-primary">Carregando...</strong>' +
                                                                        '<div class="text-primary spinner-border ml-auto" role="status" ' +
                                                                        'aria-hidden="true" id="spinner"></div>';
   }

   request.onload = function() {
      if (this.status == 200) {

         const results = JSON.parse(this.responseText);

         if (results["code"] != 200 || results["data"].count === 0) {
            document.getElementById("viewPersonagensQuadrinho").innerHTML ='<h2 id="tituloPersonagem"><span style="font-weight:bold;">Sem Resultados</span></h2>';
            document.getElementById("spinnerChar").innerHTML = "";

         }else if (results == undefined || results.length == 0) {
            document.getElementById("viewPersonagemQuadrinho").innerHTML ='<h2 id="tituloPersonagem">Ocorreu um erro, tente novamente.</h2>';
            document.getElementById("spinnerChar").innerHTML = "";

         } else {
            const retorno = results["data"].results;

            var html = "";
            for(var i in retorno){
               html +=
                     '<div class="card flex-md-row mb-4 box-shadow h-md-250" id="characterCard">' +
                     '<div id="characterImage">' +
                     '<img class="card-img-right flex-auto d-md-block img-fluid"' +
                     ' alt="Picture of ' +
                     retorno[i].title +
                     '" src="' +
                     retorno[i].thumbnail["path"] +
                     "." +
                     retorno[i].thumbnail["extension"] +
                     '">' +
                     "</div>" +
                     '<div class="card-body d-flex flex-column align-items-start">' +
                     '<h3 class="mb-0 text-dark" id="characterTitle"> #ID:'+retorno[i].id +" Título: "+
                     retorno[i].title +
                     " </h3>" +
                     '<p class="card-text mb-3" id="characterComic"></div></div>';

            }
           document.getElementById("viewPersonagensQuadrinho").innerHTML = html;

         }

      } else {
         document.getElementById("viewPersonagensQuadrinho").innerHTML = '<h2 id="tituloPersonagem">Nenhum resultado encontrado</h2>';
      }
   }
   request.onloadend = function() {
      document.getElementById("spinnerChar").innerHTML = "";
   }
   request.send()
}

function conectarPersonagensEventos(url) {
   document.getElementById("spinnerChar").innerHTML = "";
   const request = new XMLHttpRequest();

   request.open("GET", url, true);
   request.setRequestHeader("X-Requested-With", "XMLHttpRequest");
   request.onloadstart = function() {
                     document.getElementById("spinnerChar").innerHTML = '<strong id="spinnerText" class="text-primary">Carregando...</strong>' +
                                                                        '<div class="text-primary spinner-border ml-auto" role="status" ' +
                                                                        'aria-hidden="true" id="spinner"></div>';
   }

   request.onload = function() {
      if (this.status == 200) {

         const results = JSON.parse(this.responseText);

         if (results["code"] != 200 || results["data"].count === 0) {
            document.getElementById("viewPersonagensEventos").innerHTML ='<h2 id="tituloPersonagem"><span style="font-weight:bold;">Sem Resultados</span></h2>';
            document.getElementById("spinnerChar").innerHTML = "";

         }else if (results == undefined || results.length == 0) {
            document.getElementById("viewPersonagensEventos").innerHTML ='<h2 id="tituloPersonagem">Ocorreu um erro, tente novamente.</h2>';
            document.getElementById("spinnerChar").innerHTML = "";

         } else {
            const retorno = results["data"].results;

            var html = "";
            for(var i in retorno){
               html +=
                     '<div class="card flex-md-row mb-4 box-shadow h-md-250" id="characterCard">' +
                     '<div id="characterImage">' +
                     '<img class="card-img-right flex-auto d-md-block img-fluid"' +
                     ' alt="Picture of ' +
                     retorno[i].title +
                     '" src="' +
                     retorno[i].thumbnail["path"] +
                     "." +
                     retorno[i].thumbnail["extension"] +
                     '">' +
                     "</div>" +
                     '<div class="card-body d-flex flex-column align-items-start">' +
                     '<h3 class="mb-0 text-dark" id="eventTitle"> #ID:'+retorno[i].id +" Título: "+
                     retorno[i].title +
                     " </h3>" +
                     '<p class="card-text mb-3" id="characterEvent"></div></div>';

            }
           document.getElementById("viewPersonagensEventos").innerHTML = html;

         }

      } else {
         document.getElementById("viewPersonagensEventos").innerHTML = '<h2 id="tituloPersonagem">Nenhum resultado encontrado</h2>';
      }
   }
   request.onloadend = function() {
      document.getElementById("spinnerChar").innerHTML = "";
   }
   request.send()
}

function adicionaZero(numero){
    if (numero <= 9)
        return "0" + numero;
    else
        return numero;
}


function conectarPersonagensStory(url) {
   document.getElementById("spinnerChar").innerHTML = "";
   const request = new XMLHttpRequest();

   request.open("GET", url, true);
   request.setRequestHeader("X-Requested-With", "XMLHttpRequest");
   request.onloadstart = function() {
                     document.getElementById("spinnerChar").innerHTML = '<strong id="spinnerText" class="text-primary">Carregando...</strong>' +
                                                                        '<div class="text-primary spinner-border ml-auto" role="status" ' +
                                                                        'aria-hidden="true" id="spinner"></div>';
   }

   request.onload = function() {
      if (this.status == 200) {

         const results = JSON.parse(this.responseText);

         if (results["code"] != 200 || results["data"].count === 0) {
            document.getElementById("viewPersonagensStory").innerHTML ='<h2 id="tituloPersonagem"><span style="font-weight:bold;">Sem Resultados</span></h2>';
            document.getElementById("spinnerChar").innerHTML = "";

         }else if (results == undefined || results.length == 0) {
            document.getElementById("viewPersonagensStory").innerHTML ='<h2 id="tituloPersonagem">Ocorreu um erro, tente novamente.</h2>';
            document.getElementById("spinnerChar").innerHTML = "";

         } else {
            const retorno = results["data"].results;

            var html = "";
            for(var i in retorno){

               let dataFormat = new Date(retorno[i].modified);
               let dataFormatada = (adicionaZero(dataFormat.getDate().toString()) + "/" + (adicionaZero(dataFormat.getMonth()+1).toString()) + "/" + dataFormat.getFullYear());

               html +=
                     '<div class="card flex-md-row mb-4 box-shadow h-md-250">' +
                     '<div>' +

                     '<div class="card-body d-flex flex-column align-items-start">' +
                     '<h3 class="mb-0 text-dark" id="storyTitle"> #ID:'+retorno[i].id +" Título: "+
                     retorno[i].title +
                     "</h3>" +
                     '<p class="card-text mb-3" id="characterStory"> Modificado em: '+dataFormatada+'</div></div></div>';

            }
           document.getElementById("viewPersonagensStory").innerHTML = html;

         }

      } else {
         document.getElementById("viewPersonagensStory").innerHTML = '<h2 id="tituloPersonagem">Nenhum resultado encontrado</h2>';
      }
   }
   request.onloadend = function() {
      document.getElementById("spinnerChar").innerHTML = "";
   }
   request.send()
}
