function ajax()
{
    let promotiontext = document.getElementById('addedPromotion').value;
    
    if (promotiontext === '') {
        document.getElementById('h1').innerHTML = '*Please fil up this field';
        
    }
    else{
        let xhttp = new XMLHttpRequest();
       
        xhttp.open('POST', '../view/addpromotion.php', true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.onreadystatechange = function(){

            if(this.readyState == 4 && this.status == 200){
                document.getElementById('h2').innerHTML = this.responseText;

            }
        }
        

       
        xhttp.send('addedPromotion='+promotiontext);
    }
}