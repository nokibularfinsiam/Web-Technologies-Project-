function ajax()
{
    let search = document.getElementById('search').value;
    if(search=='')
    {
        document.getElementById('output').innerHTML = '*Please fil up this field';
    }
    else{
        let xhttp = new XMLHttpRequest();
        //document.getElementById('h2').innerHTML = search;
        xhttp.open('POST', '../view/admin_orderhistory.php', true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.onreadystatechange = function(){

            if(this.readyState == 4 && this.status == 200){
                document.getElementById('sr').innerHTML = this.responseText;
            }
        }

        xhttp.send('search='+search);
    }
    
}