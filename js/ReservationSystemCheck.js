function nameValidation(name) {
    for (let i = 0; i < name.length; i++) {
        const char = name[i];

        if (!rqLetter(char)) {
            return false;
        }
    }
    return true;
}

function rqLetter(char) {
    return (char >= 'A' && char <= 'Z') || (char >= 'a' && char <= 'z') || char === ' ';
}

function phoneNumberValidation(phone) {
    const validFormat = ['013', '014', '015', '016', '017', '018', '019'];
    const position = phone.substring(0, 3);

    if (!validFormat.includes(position)) {
        return false;
    }

    if (!isNaN(phone) && phone.length === 11) {
        return true;
    }
}

function vldf(){
let name = document.getElementById('name').value;
let number = document.getElementById('number').value;
let date = document.getElementById('date').value;
let time = document.getElementById('time').value;
let guests = document.getElementById('guests').value;

if (name === "" || number === "" || date === "" || time === "" || guests === "") {
    document.getElementById('print').innerHTML="Fill all the sections!";
    return false;
} else if (!nameValidation(name)) {
        document.getElementById('print').innerHTML="Invalid Name. Use only letters!";
    } 
    else if (!phoneNumberValidation(number)) {
            document.getElementById('print').innerHTML="Invalid phone number. Must be 11 digits!";
        } else {
           // const status = bookTable(name, number, date, time, guests);
            let xhttp = new XMLHttpRequest();
            xhttp.open('POST', '../Controller/ReservationSystemCheck.php', true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.onreadystatechange = function(){
        
                if(this.readyState == 4 && this.status == 200){
        
                    document.getElementById('print').innerHTML = this.responseText;
                    console.log(this.responseText);
                }
            }
             let params = 'name=' + name + '&number=' + number + '&date=' + date + '&time=' + time + '&guests=' + guests;
        
            xhttp.send(params);

            }
}
