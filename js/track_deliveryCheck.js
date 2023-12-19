function trackDelivery()
{
    let trackingKey = document.getElementById('tracking_key').value;

    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById('deliveryResult').innerHTML = xhr.responseText;
        }
    };
    xhr.open("POST", "../controller/track_deliveryCheck.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("tracking_key=" + trackingKey);
}
