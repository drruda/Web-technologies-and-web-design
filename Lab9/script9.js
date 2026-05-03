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
        super(name, "Grocery", amount, image);
    }
}

class Shoe extends Product {
    constructor(name, amount, image) {
        super(name, "Shoe", amount, image);
    }
}

function productFactory(entity) {
    if (entity.category === "Grocery") {
        return new Grocery(entity.name, entity.amount, entity.image);
    }

    if (entity.category === "Shoe") {
        return new Shoe(entity.name, entity.amount, entity.image);
    }

    console.error("Unknown category: " + entity.category);
    return null;
}