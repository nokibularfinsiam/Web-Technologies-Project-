function ajax()
{
    let aboutus = document.getElementById('aboutustext').value;
    
    if (aboutus === '') {
        document.getElementById('h1').innerHTML = '*Please fil up this field';
        console.log(aboutus);
    }
    else{
        let xhttp = new XMLHttpRequest();
       
        xhttp.open('POST', '../view/admin_aboutus.php', true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.onreadystatechange = function(){

            if(this.readyState == 4 && this.status == 200){
                document.getElementById('h2').innerHTML = this.responseText;
                console.log(this.responseText);

            }
        }
        

       
        xhttp.send('aboutustext='+aboutus);
    }
}