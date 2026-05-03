class Product{
    constructor(name, category, amount, image){
        this.name = name;
        this.category = category;
        this.amount = amount;
        this.image = image;
    }
}

class Grocery extends Product {
    constructor(name, amount, image) {
        super(name, "grocery", amount, image);
    }
}

class Shoe extends Product {
    constructor(name, amount, image) {
        super(name, "shoe", amount, image);
    }
}

function productFactory(entity) {
    if (entity.category === "grocery") {
        return new Grocery(entity.name, entity.amount, entity.image);
    }

    if (entity.category === "shoe") {
        return new Shoe(entity.name, entity.amount, entity.image);
    }

    console.error("Unknown category: " + entity.category);
    return null;
}

class Basket {
    products = [];

    add(product) {
        const currentTime = new Date().toLocaleTimeString(); // отримуємо поточний час у форматі ГГ:ХХ:СС
        product.time = currentTime; // додаємо властивість часу до об'єкта продукту
        this.products.push(product); // додаємо продукт до масиву

        const emptyMsg = document.getElementById("empty-cart-msg");
        if (emptyMsg) {
            emptyMsg.remove(); // повністю видаляємо елемент зі сторінки
        }

        const container = document.getElementById("basket-container");
        const item = document.createElement("div");

        item.textContent = `${product.name} - додано о ${product.time}`;
        container.appendChild(item);
    }
}

class Store {
    products = [];
    constructor() {
        this.basket = new Basket();
    }

    fillStoreWithProducts(jsonData) {
        // Створюємо масив об'єктів за допомогою фабрики
        this.products = jsonData.map(item => {
            const productObj = productFactory(item);
            
            productObj.amount = item.amount;
            productObj.image = item.image;

            return productObj;
        });

        this.renderStore();
    }

    // Виводить список товарів текстом, щоб можна було натиснути кнопку
    renderStore() {
    const list = document.getElementById('products-list');
    list.innerHTML = ''; 

    this.products.forEach(product => {
        const div = document.createElement('div');
        div.className = 'product-card'; // додаємо клас для стилів
        
        // Перевіряємо чи є товар, щоб вимкнути кнопку
        const isOutOfStock = product.amount <= 0;

        div.innerHTML = `
            <img src="${product.image || 'https://via.placeholder.com/150'}" alt="${product.name}">
            <span>${product.name}</span>
            <p>Залишилось: ${product.amount}</p>
            <button 
                onclick="myStore.addToBasket('${product.name}')" 
                ${isOutOfStock ? 'disabled' : ''}>
                ${isOutOfStock ? 'Немає' : 'Додати'}
            </button>
        `;
        
        list.appendChild(div);
    });
}

    // Метод для додавання товару в кошик за його назвою
    addToBasket(productName) {
        const product = this.products.find(p => p.name === productName);

        if (product && product.amount > 0) {
            product.amount--;
            this.basket.add(product);
            this.renderStore();
        }
        else {
            alert("Вибачте, товар закінчився!");
        }
    }
}


const myStore = new Store();

// Завантаження даних з файлу products.json
fetch('products.json')
    .then(response => response.json())
    .then(data => {
        myStore.fillStoreWithProducts(data);
    })
    .catch(error => console.error('Помилка завантаження JSON:', error));