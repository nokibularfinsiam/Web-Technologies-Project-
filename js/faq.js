function ajax()
{
    let question = document.getElementById('question').value;
    let answer = document.getElementById('answer').value;
    

    
    if (question === '' || answer === '') {
        document.getElementById('h1').innerHTML = '*Please fil up all the fields';
      
        
    }
    else{
        let xhttp = new XMLHttpRequest();
       
        xhttp.open('POST', '../view/admin_faq.php', true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.onreadystatechange = function(){

            if(this.readyState == 4 && this.status == 200){
                document.getElementById('fullform').innerHTML = this.responseText;

            }
        }
        let params = 'question=' + question + '&answer=' + answer;

        
        xhttp.send(params);
    }
    
}

function ajax1()
{
    let faq_id = document.getElementById('faq_id').value;
    
    

    
    if (faq_id === '') {
        document.getElementById('h2').innerHTML = '*Please fil up all the field';
      
        
    }
    else{
        let xhttp = new XMLHttpRequest();
       
        xhttp.open('POST', '../view/admin_faq.php', true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.onreadystatechange = function(){

            if(this.readyState == 4 && this.status == 200){
                document.getElementById('fullform').innerHTML = this.responseText;

            }
        }
        

        
        xhttp.send('faq_id='+faq_id);
    }
    
}