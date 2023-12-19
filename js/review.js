function ajax()
{
    let reviewFor = document.getElementById('reviewfor').value;
    let reviewText = document.getElementById('reviewtext').value;
    let ratings = document.getElementById('ratings').value;

    
    if (reviewFor === '' || reviewText === '' || ratings === '') {
        document.getElementById('h1').innerHTML = 'null value detected.Please fil up all the fields';
        //alert('Please fill out all fields before submitting the form.');
        
    }
    else{
        let xhttp = new XMLHttpRequest();
       
        xhttp.open('POST', '../view/review.php', true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.onreadystatechange = function(){

            if(this.readyState == 4 && this.status == 200){
                document.getElementById('fullform').innerHTML = this.responseText;

            }
        }
        let params = 'reviewfor=' + reviewFor + '&reviewtext=' + reviewText + '&ratings=' + ratings;

        //console.log(params);
        xhttp.send(params);
    }
    
}
