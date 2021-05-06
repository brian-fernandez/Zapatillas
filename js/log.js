(function(){
    $(document).ready(function(){
        $('.alt-form').click(function(){
            $('.form-content').animate({
                height:"toggle",
                opacity:'toggle'
            },600);
        });
        
        let formregistro=document.getElementsByName('contraseña');
        for(let i = 0; i < formregistro.length; i++)
        {
            formregistro[i].addEventListener('blur',function(){
                if(this.value.length>=1){
                    this.nextElementSibling.classList.add('active');
                    this.nextElementSibling.classList.remove('error');
                }
                else if(this.value.length=" "){
                    this.nextElementSibling.classList.add('error');
                    this.nextElementSibling.classList.remove('active');
                }
                else{
                    this.nextElementSibling.classList.remove('active');
                }
            })
        }
        let formregistro3=document.getElementsByName('ci');
        for(let i = 0; i < formregistro3.length; i++)
        {
            formregistro3[i].addEventListener('blur',function(){
                if(this.value.length>=1){
                    this.nextElementSibling.classList.add('active');
                    this.nextElementSibling.classList.remove('error');
                }
                else if(this.value.length=" "){
                    this.nextElementSibling.classList.add('error');
                    this.nextElementSibling.classList.remove('active');
                }
                else{
                    this.nextElementSibling.classList.remove('active');
                }
            })
        }
        let formregistro2=document.getElementsByName('correo');
        for(let i = 0; i < formregistro2.length; i++)
        {
            formregistro2[i].addEventListener('blur',function(){
                if(this.value.length>=1){
                    this.nextElementSibling.classList.add('active');
                    this.nextElementSibling.classList.remove('error');
                }
                else if(this.value.length=" "){
                    this.nextElementSibling.classList.add('error');
                    this.nextElementSibling.classList.remove('active');
                }
                else{
                    this.nextElementSibling.classList.remove('active');
                }
            })
        }
        let formregistro4=document.getElementsByName('nombre');
        for(let i = 0; i < formregistro4.length; i++)
        {
            formregistro4[i].addEventListener('blur',function(){
                if(this.value.length>=1){
                    this.nextElementSibling.classList.add('active');
                    this.nextElementSibling.classList.remove('error');
                }
                else if(this.value.length=" "){
                    this.nextElementSibling.classList.add('error');
                    this.nextElementSibling.classList.remove('active');
                }
                else{
                    this.nextElementSibling.classList.remove('active');
                }
            })
        }
        let formregistro5=document.getElementsByName('apellido');
        for(let i = 0; i < formregistro5.length; i++)
        {
            formregistro5[i].addEventListener('blur',function(){
                if(this.value.length>=1){
                    this.nextElementSibling.classList.add('active');
                    this.nextElementSibling.classList.remove('error');
                }
                else if(this.value.length=" "){
                    this.nextElementSibling.classList.add('error');
                    this.nextElementSibling.classList.remove('active');
                }
                else{
                    this.nextElementSibling.classList.remove('active');
                }
            })
        }
        let formregistro6=document.getElementsByName('confirmar');
        for(let i = 0; i < formregistro6.length; i++)
        {
            formregistro6[i].addEventListener('blur',function(){
                if(this.value.length>=1){
                    this.nextElementSibling.classList.add('active');
                    this.nextElementSibling.classList.remove('error');
                }
                else if(this.value.length=" "){
                    this.nextElementSibling.classList.add('error');
                    this.nextElementSibling.classList.remove('active');
                }
                else{
                    this.nextElementSibling.classList.remove('active');
                }
            })
        }
        let formregistro7=document.getElementsByName('i-correo');
        for(let i = 0; i < formregistro7.length; i++)
        {
            formregistro7[i].addEventListener('blur',function(){
                if(this.value.length>=1){
                    this.nextElementSibling.classList.add('active');
                    this.nextElementSibling.classList.remove('error');
                }
                else if(this.value.length=" "){
                    this.nextElementSibling.classList.add('error');
                    this.nextElementSibling.classList.remove('active');
                }
                else{
                    this.nextElementSibling.classList.remove('active');
                }
            })
        }
        let formregistro8=document.getElementsByName('i-contraseña');
        for(let i = 0; i < formregistro8.length; i++)
        {
            formregistro8[i].addEventListener('blur',function(){
                if(this.value.length>=1){
                    this.nextElementSibling.classList.add('active');
                    this.nextElementSibling.classList.remove('error');
                }
                else if(this.value.length=" "){
                    this.nextElementSibling.classList.add('error');
                    this.nextElementSibling.classList.remove('active');
                }
                else{
                    this.nextElementSibling.classList.remove('active');
                }
            })
        }
    })
})()