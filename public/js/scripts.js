
//cria-se um array com as fotos do banner.
var img = ['img/banner/01.jpg', 'img/banner/02.jpg', 'img/banner/03.jpg'];
//carrega previamente os botões de comando do banner.
var BtnFirst = document.querySelector("#btn-1");
var BtnSecond = document.querySelector("#btn-2")
var BtnThird = document.querySelector("#btn-3");
//cria-se um array com os botões carregados.
var btn = [BtnFirst, BtnSecond, BtnThird];
//seta a posição inicial do banner em 0.
var bannerPosition = 0;
//carrega o elemento de imagem do banner.
var banner = document.querySelector("#img");
//Seta o background do primeiro botão de controle em branco, mantendo os outros transparentes.
btn[0].style.backgroundColor = "white";
//atribui falso a váriavel clique.
var clique = false;

//Função para contar a posição do banner.
function counter (){
    //Toda vez que for chamado, a função deverá adicionar um valor a mais à posição.
    bannerPosition += 1;
    //Caso o valor seja maior de três setar em 02.
    if (bannerPosition >= 3){
        bannerPosition = 0;
    }
    //Chamar a função de mudança do banner passando a posição atual.
    change(bannerPosition)
}

//Função que captura os cliques manuais nos controles do banner.
function manualClique(value){
    //atribui true para a variavel clique
    clique = true;
    //atribui a posição do banner para a solicitada pelo usuário.
    bannerPosition = parseInt(value);
    //chamar a função change para mudar o banner.
    change(bannerPosition);
    //paralizar a troca automática do banner.
    window.clearInterval(timer);
    //reinicializar a contagem para troca automática do banner.
    timer = setInterval(counter,4000);
}

//Função Change para mudar o banner, recebe a posição por parâmetro.
function change(position){
    //atribui ao elemento banner a src da imagem atual.
    banner.src = img[position]
    //limpar a cor de todos elementos de controle.
    for (let i = 0; i < btn.length; i++){
        btn[i].style.backgroundColor = "lightblue";
    }
    //Atribuir a cor branco no elemento de controle atual.
    btn[position].style.backgroundColor = "white";
}

//Captura o texto digitado pelo usuário
const text = document.querySelector("#text");
//Captura o contador de carácteres digitado pelo usuário
const caracteres = document.querySelector("#caracteres");
//Adiciona o evento keypress no texto digitado. Esse evento será disparado toda vez que uma tecla for pressionada

text.addEventListener("keyup", (e)=>{
    //Conta os carácteres digitados pelo usuário
    caracteres.innerHTML = (500 - (text.value.length)) + " Caracteres restantes";
});

//Inicializa o intervalo para troca automática do banner a cada 4 segundos.
var timer = setInterval(counter,4000);

// JQUERY MASKS
$(document).ready(function (){
    //Atribui uma mascara ao elemento de telefone.
    $("#inputTel").mask("(00) 0000-00009");
    //Utiliza-se o keypress dentro do input para iniciar um evento.
    $("#inputTel").keypress(function (event){
        //Caso o número de elementos seja maior ou igual a catorze isso significa que é um número de 9 dígitos.
        if ($(this).val().length >= 14){
            $("#inputTel").mask("(00) 00000-0009");
        //Caso contrário apenas manter o padrão.
        }else{
            $("#inputTel").mask("(00) 0000-00009");
        }
    })
})

