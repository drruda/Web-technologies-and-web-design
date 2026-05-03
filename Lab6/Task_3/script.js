let products = [
    { code: "001", name: "Ноутбук", price: 25000, count: 2 },
    { code: "002", name: "Мишка", price: 600, count: 5 },
    { code: "003", name: "Клавіатура", price: 1200, count: 3 },
    { code: "004", name: "Монітор", price: 7500, count: 2 },
    { code: "005", name: "Навушники", price: 2200, count: 4 }
];
let totalAll = 0;

document.write("<table>");
document.write("<thead><tr><th>Код</th><th>Найменування</th><th>Ціна</th><th>Кількість</th><th>Сума</th></tr></thead>");
document.write("<tbody>");

for (let i = 0; i < products.length; i++) {
    let item = products[i];
    let itemSum = item.price * item.count; //сума за товар
    totalAll += itemSum;//додаємо до загальної суми

    document.write("<tr>");
    document.write("<td>" + item.code + "</td>");
    document.write("<td>" + item.name + "</td>");
    document.write("<td>" + item.price + " грн</td>");
    document.write("<td>" + item.count + "</td>");
    document.write("<td>" + itemSum + " грн</td>");
    document.write("</tr>");
}
document.write("</tbody>");

//Рядок Всього
document.write("<tfoot><tr>");
document.write("<td colspan='4' class='total-label'>Всього до сплати:</td>");
document.write("<td class='total-amount'>" + totalAll + " грн</td>");
document.write("</tr></tfoot>");

document.write("</table>");