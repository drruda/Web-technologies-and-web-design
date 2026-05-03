let tryAgain = true;
while (tryAgain) {
    let number = prompt("Введіть п'ятирозрядне число: ");

    if (number != null && number.length === 5 && !isNaN(number)) {
        let palindrome = number.split('').reverse().join('');

        if (number === palindrome) {
            alert("Задане число є паліндромом");
            tryAgain = confirm("Спробувати ще раз?");
        }
        else {
            alert("Задане число НЕ є паліндромом");
            tryAgain = confirm("Спробувати ще раз?");
        }
    }
    else {
        alert("Помилка. Перевірте введені дані");
        tryAgain = confirm("Спробувати ще раз?");
    }
}

