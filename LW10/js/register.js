function checkData() {
    var firstname = document.getElementById('login').value;
    var password = document.getElementById('pass').value;
    var e_mail = document.getElementById('mail').value;

    if (firstname == '') {
        alert('Enter your name,please!');
        return false;
    } else {
        if (password == '') {
            alert('Enter password!');
            return false;
        } else if (password.length < 7) {
            alert('Пароль не может быть меньше 7-ти символов!');
            return false;
        }
        if (e_mail == '') {
            alert('Enter your email address');
            return false;
        }
    }
    alert('Регистрация завершена');
}