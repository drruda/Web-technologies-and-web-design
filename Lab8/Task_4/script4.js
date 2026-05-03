function validateForm() {
    let form = document.forms['form'];
    let isValid = true;

    // Очищення старих помилок
    const spans = document.querySelectorAll('.error');
    spans.forEach(s => s.innerHTML = '');

    // Перевірка Прізвища та Імені
    if (form['surname'].value.trim() === "") {
        document.getElementById('surnamef').innerHTML = "Введіть прізвище";
        isValid = false;
    }
    if (form['name'].value.trim() === "") {
        document.getElementById('namef').innerHTML = "Введіть ім'я";
        isValid = false;
    }

    // Email
    let email = form['email'].value;
    if (email.indexOf("@") < 1 || email.lastIndexOf(".") < email.indexOf("@") + 2) {
        document.getElementById('emailf').innerHTML = "Некоректний email";
        isValid = false;
    }

    // Номер телефону (10 цифр)
    let phone = form['phone'].value;
    if (phone.length !== 10 || isNaN(phone)) {
        document.getElementById('phonef').innerHTML = "Має бути 10 цифр";
        isValid = false;
    }

    // Тип житла
    if (!form['house_type'].value) {
        document.getElementById('typef').innerHTML = "Оберіть тип житла";
        isValid = false;
    }

    // Кількість кімнат
    if (form['rooms'].value === "0") {
        document.getElementById('roomsf').innerHTML = "Оберіть кількість кімнат";
        isValid = false;
    }

    return isValid; // Якщо хоч одна умова false, то форма не відправиться
}

// Повзунок для ціни
function updatePrice(val) {
    document.getElementById('priceValue').innerHTML = val;
}