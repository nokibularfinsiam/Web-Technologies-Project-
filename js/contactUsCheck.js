function searchStore1()
{
    let selectedLocation = document.getElementById('storeLocator').value;

    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function ()
    {
        if (xhr.readyState == 4 && xhr.status == 200)
        {
            document.getElementById('contactResult').innerHTML = xhr.responseText;
        }
    };
    xhr.open("POST", "../controller/contactUsCheck.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("storeLocator=" + selectedLocation);
}
