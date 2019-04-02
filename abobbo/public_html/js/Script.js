//Mappa Google Maps
function initMap()
{
    var uluru = {lat:45.6633403,lng:12.2033215};
    var map = new google.maps.Map(document.getElementById('map'), 
    {
        zoom: 15,
        center: uluru
    });
    var marker = new google.maps.Marker(
    {
        position: uluru,
        map: map
    });
}
function validateMail(){
    
}
//Controllo email newsletter (Home)
function validateMail(){
    var email=document.getElementById("email").value;
    var re = /\S+@\S+\.\S+/;
    if(re.test(email)){
        document.getElementById("resultemail").innerHTML="Email inserita correttamente";
        document.getElementById("resultemail").style.color = "green";
    }
    else{
        document.getElementById("resultemail").innerHTML="Email non valida";
        document.getElementById("resultemail").style.color = "red";
        document.getElementById("invia").disabled = true;
    } 
    activeInvia();
}



function validatePassword(){
    var password=document.getElementById("password").value;
    var re = /.{4,}/;
    if(re.test(password)){
        document.getElementById("resultpassword").innerHTML="Password ok";
        document.getElementById("resultpassword").style.color = "green";
    }
    else{
        document.getElementById("resultpassword").innerHTML="Password inferiore a 4 caratteri";
        document.getElementById("resultpassword").style.color = "red";
        document.getElementById("invia").disabled = true;
    }
    
    activeInvia();
}
function validateUsername(){
    var username=document.getElementById("user").value;
    var re = /.{4,}/;
    if(re.test(username)){
        document.getElementById("resultusername").innerHTML="Username ok";
        document.getElementById("resultusername").style.color = "green";
    }
    else{
        document.getElementById("resultusername").innerHTML="Username inferiore ad 4 caratteri";
        document.getElementById("resultusername").style.color = "red";
        document.getElementById("invia").disabled = true;
    }    
    activeInvia();
}

function validateNome(){
    var nome=document.getElementById("nome").value;
    var re = /\S\s\S/;
    if(re.test(nome)){
        document.getElementById("resultnome").innerHTML="Nome e cognome ok";
        document.getElementById("resultnome").style.color = "green";
        
    }
    else{
        document.getElementById("resultnome").innerHTML="Inserisci sia nome che cognome separati da uno spazio";
        document.getElementById("resultnome").style.color = "red";
        document.getElementById("invia").disabled = true;
    }   
    activeInvia();
}

function validateComment(){
    var nome=document.getElementById("commento").value;
    var re = /^$|\s+/;
    if(re.test(nome)){
        document.getElementById("resultcomment").innerHTML="Impossibile inserire commento vuoto";
        document.getElementById("resultcomment").style.color = "red";
        document.getElementById("invia").disabled = true;
    }
    else{
        document.getElementById("resultcomment").innerHTML="&nbsp;";
        document.getElementById("resultcomment").style.color = "green";
        document.getElementById("invia").disabled = false;
    }   
}

function validateTitolo(){
    var nome=document.getElementById("titolo").value;
    var re = /^$|\s+/;
    if(re.test(nome)){
        document.getElementById("resulttitolo").innerHTML="Impossibile inserire titolo vuoto";
        document.getElementById("resulttitolo").style.color = "red";
        document.getElementById("invia").disabled = true;
    }
    else{        
        document.getElementById("resulttitolo").innerHTML="&nbsp;";
        document.getElementById("resulttitolo").style.color = "green";
    }   
    activeInvia();
}

function validateTesto(){
    var nome=document.getElementById("testo").value;
    var re = /^$|\s+/;
    if(re.test(nome)){
        document.getElementById("resulttesto").innerHTML="Impossibile inserire testo vuoto";
        document.getElementById("resulttesto").style.color = "red";
        document.getElementById("invia").disabled = true;
    }
    else{
        document.getElementById("resulttesto").innerHTML="&nbsp;";
        document.getElementById("resulttesto").style.color = "green";
    }   
    activeInvia();
}

function validateSearch(){
    var nome=document.getElementById("ricerca").value;
    var re = /^$|\s+/;
    if(re.test(nome)){
        document.getElementById("cerca").disabled = true;
    }
    else{
        document.getElementById("cerca").disabled = false;
    }   
}

function activeInvia(){
    if(document.getElementById("nomepagina").innerHTML=="Accedi"){
        if(document.getElementById("resultemail").style.color == "green"
      && document.getElementById("resultpassword").style.color == "green"){
            document.getElementById("invia").disabled = false;
        }
            
    }
    else if(document.getElementById("nomepagina").innerHTML=="Registrazione"){
    if(document.getElementById("resultemail").style.color == "green"
      && document.getElementById("resultpassword").style.color == "green"
      && document.getElementById("resultusername").style.color == "green"
      && document.getElementById("resultnome").style.color == "green"){
        document.getElementById("invia").disabled = false;
    }
    }
    else if(document.getElementById("nomepagina").innerHTML=="Iscriviti alla Newsletter"){
        if(document.getElementById("resultemail").style.color == "green"){
            document.getElementById("invia").disabled = false;
        }
    }
    else if(document.getElementById("nomepagina").innerHTML=="Inserisci articolo"){
        if(document.getElementById("resulttitolo").style.color == "green" &&
          document.getElementById("resulttesto").style.color == "green"){
            document.getElementById("invia").disabled = false;
        }
    }
}

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
        document.getElementById("goTop").style.display = "block";
    } else {
        document.getElementById("goTop").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

