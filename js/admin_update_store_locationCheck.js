function validateAndSendForm() {
    var selectedLocation = document.getElementById("storeLocator").value;
    var road_no = document.getElementById("road_no").value;
    var house_no = document.getElementById("house_no").value;
    var contact_no = document.getElementById("contact_no").value;

    if (selectedLocation == "" || road_no == "" || house_no == "" || contact_no == "") {
        alert("Please fill in all the fields.");
        return false;
    }

    var xhr = new XMLHttpRequest();
    var url = "../controller/admin_update_store_locationCheck.php";
    var params = "storeLocator=" + selectedLocation + "&road_no=" + road_no + "&house_no=" + house_no + "&contact_no=" + contact_no;

    xhr.open("POST", url, true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            alert(xhr.responseText);
        }
    }

    xhr.send(params);
    return false;
}
