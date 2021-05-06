function popupToggle() {
    let popup = document.getElementById('popup');
    popup.classList.toggle('acti')
}

function popupToggle2(id , nombre , marca , precio, stock, cantidad) {
    if(id!=null)
    {
        //mandar datos al pop up

        //id
        let idPro= document.getElementById('idProductoPop').value= id;
        //nombre
        document.getElementById('nombreProductoPop').value= nombre;
        //marca
        document.getElementById('marcaProductoPop').value= marca;
        //preccio
        document.getElementById('precioProductoPop').value=precio;
        //stock
        if(stock==1)
        {
            document.getElementById('stockProductoPop').style.backgroundColor= 'green';
            document.getElementById('stockProductoPop').value="SI";
            
            
        }
        else
        {
            document.getElementById('stockProductoPop').style.background= 'red';
            document.getElementById('stockProductoPop').value="NO";
        }
        //cantidad
        document.getElementById('cantidadProductoPop').value= cantidad;
        document.getElementById('cantidadProductoPoplb').value= cantidad;
        //radio
        document.getElementById('radioAceptar').checked=false;    
        
    }
    let popup = document.getElementById('popup2');
    popup.classList.toggle('acti');
}

function cambiar(){
    let bt=document.getElementById('stockProductoPop');
    let cantidad=document.getElementById('cantidadProductoPoplb').value;
    if(bt.style.backgroundColor=='green')
    {
        bt.style.background= 'red';
        bt.value="NO";
        document.getElementById('st').value= '0';
        document.getElementById('cantidadProductoPop').value= 0;
        document.getElementById('ca').value= 0;        
        document.getElementById('cantidadProductoPop').disabled= true;

    }
    else{
        document.getElementById('ca').value= cantidad;        
        document.getElementById('cantidadProductoPop').disabled= false;
        bt.style.backgroundColor= 'green';
        bt.value="SI";
        document.getElementById('st').value= '1';
        document.getElementById('cantidadProductoPop').value= cantidad;
    }

}
