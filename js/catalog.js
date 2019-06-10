// alert("Product");

class Product{
    constructor(name, price, photo, id){
        this.name = name;
        this.price = price;
        this.photo = photo;
        this.id = id;
    }
    show(){
        alert(`${this.name} ${this.price} ${this.photo}`);
    }
    render(parentEl){
        let productItem = document.createElement("a");
        productItem.href = `/product.php?id=${this.id}`;
        productItem.classList.add("catalog-product-item");
        productItem.innerHTML = `
        <img src='${this.photo}'/>
        <h2> ${this.name}</h2>
        <p> ${this.price}  </p>
        `;

        parentEl.insertAdjacentElement("afterend", productItem);

    }
}



//отрисовывает products через render
//инкапсулирует методы презагрузки
// осуществляет загрузку каталога через ajax


class Catalog{
    constructor(){
        this.el = document.querySelector(".catalog");
        this.product = [];
    }
    addProducts(productsArray){
        productsArray.forEach((product)=>{
            this.product.push(product);
        });
    }

render(){
    let catalogProductsBox = this.el.querySelector('.catalog-products');
    this.products.forEach((product)=>{
        product.render(catalogProductsBox);
    });
}

preloadOn(){
    this.el.classList.add('preload');
    //это класс будет работать на изменении opacity
}

preloadOff(){
    this.el.classList.remove('preload');
}


paginationRender(paginationConfig){
    let paginationEl = this.el.querySelector(".catalog-pagination");
    paginationEl.innerHTML = '';

    for( let i = 1; i <= paginationConfig.countPage; i++){
        let div = document.createElement("div");
        div.classList.add("catalog-pagination-item");
        
        if ( i == paginationConfig.nowPage){
            div.classList.add("active");
        }
        div.innerHTML = i;
        div.setAttribute('data-page-id', i);

        let that = this;

        div.addEventListener('click', function(){
            let pageNum = this.getAttribute('data-page-id');

            that.load(pageNum);
        });

        paginationEl.appendChild(div);
    }
}




load(page = 1){
    this.preloadOn();

//здесь будет реализована загрузка данных
let xhr = new XMLHttpRequest();
xhr.open("GET", `/shop/handlers/catalog.hand.php?page=${page}`);
xhr.send();

    xhr.addEventListener('load', ()=>{
        alert(xhr.responseText);
        let data = JSON.parse(xhr.responseText);
        this.paginationRender(data.pagination);

        this.products = [];
        data.products.forEach((productItem) => {
            this.products.push(new Product(productItem.name, productItem.price,
                productItem.img_src, productItem.id));
        })

        this.render();
        this.preloadOff;

    });
}
}

let catalog = new Catalog();
catalog.load();


