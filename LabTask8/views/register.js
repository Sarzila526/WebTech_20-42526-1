function validateRegistration(form)
{
    const name = form.name.value;
    const email = form.email.value;
    const username = form.username.value;
    const password = form.password.value;
    const address = form.address.value;
    const phoneNo = form.phoneNo.value;
    const gender = form.gender.value;
    const birthdate = form.birthdate.value;

    let register_info = 
    {
        "name": name,
        "email": email,
        "username": username,
        "password": password,
        "address": address,
        "phoneNo": phoneNo,
        "gender": gender,
        "date_of_birth": birthdate,
    }

    let xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../controllers/regCheck.php');
    xhttp.onreadystatechange = function() { if (xhr.readyState === 4 && xhr.status === 200) { console.log(xhr.responseText); } }
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); 
    xhttp.send(new URLSearchParams(register_info).toString());
}