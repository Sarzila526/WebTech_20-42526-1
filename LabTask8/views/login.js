function validateLogin(form)
{
    const username = form.username.value;
    const password = form.password.value;

    let login_info = 
    {
        "username": username,
        "password": password
    }

    let xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../controllers/loginCheck.php');
    xhttp.onreadystatechange = function() { if (xhr.readyState === 4 && xhr.status === 200) { console.log(xhr.responseText); } }
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); 
    xhttp.send(new URLSearchParams(login_info).toString());
}