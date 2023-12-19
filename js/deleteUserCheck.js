function deleteUser(username)
{
    if(confirm('Are you sure?'))
    {
        let xhr = new XMLHttpRequest();
        xhr.open('GET', '../controller/deleteUserCheck.php?username=' + encodeURIComponent(username), true);
        xhr.onload = function()
        {
            if (xhr.status == 200)
            {
                let response = JSON.parse(xhr.responseText);
                if(response.success)
                {
                    alert(response.message);
                    window.location.reload();
                }
                else
                {
                    alert(response.message);
                }
            }
            else
            {
                alert('An error occurred while processing your request.');
            }
        };
        xhr.send();
    }
    return false;
}