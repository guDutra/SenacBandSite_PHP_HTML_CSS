 var checkBox = document.querySelectorAll('#check');
 var botao = document.querySelector("#botaoResposta");
 var menu = document.querySelector("#menuLinks")
 for(var i = 0; i < checkBox.length; i++){
checkBox[i].addEventListener("change", function(event){
   

    if(checkBox[i].  != 1) {
        console.log('cheguei');
    }
   


    
    
});  

 }
/*
var chkbox = document.querySelector("#check");

chkbox.addEventListener("change", function(event){
    if(chkbox.ariaChecked) {
        console.log("opa")
        alert("clicado")
    }
})


chkbox.click(function(){
   if( $(this).is(":checked") ){
    botao.classList.remove("#botaoResposta");
   }


   chkbox.trigger("click")*/