//login/cadastro
var fundocadastrous = document.querySelector('.fundocd');
var fundologinusuario = document.querySelector('.fundolg');




//functions

function cadastrarusuario(){
    fundologinusuario.style.display = 'none';
    fundocadastrous.style.display = 'block';
}
function voltarlogin(){
    fundologinusuario.style.display = 'block';
    fundocadastrous.style.display = 'none';
}


//pagina inicial
// variaveis
var fundocdcl = document.getElementById('cadastrocl1');
var fundocdcl1 = document.getElementById('funcocdcl1');

var fundocdcl2 = document.getElementById('fundoms');
var cecaoms = document.getElementById('secaoms');
var formmsed = document.getElementById('formularioed');
var btntracarconta = document.querySelector(".btnsairconta");


// functions

function abrircadastrocs(){ 
    fundocdcl.style.display= 'block';

}
function voltarin(){ 
    fundocdcl.style.display= 'none';
    fundocdcl1.style.display= 'none';
    fundocdcl2.style.display= 'none';
    cecaoms.style.display= 'flex';
}
function cdclp2(){
    fundocdcl.style.display= 'none';
    fundocdcl1.style.display= 'block';
}
function cdclvtp1(){
    fundocdcl.style.display= 'block';
    fundocdcl1.style.display= 'none';
}

function abrirms(){
    formmsed.style.display= 'none'
    fundocdcl2.style.display= 'block';
}
function abrirmsed(){
    cecaoms.style.display= 'none';
    formmsed.style.display= 'flex';
}
function mudarconta(){
    btntracarconta.style.display= 'block'
}
function tirarmudarconta(){
    btntracarconta.style.display= 'none'
}