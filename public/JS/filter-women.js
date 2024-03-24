const shop = '/data/productsw.json';
const display = document.querySelector(".listProduct");
const input = document.querySelector("#search-input");


const getData = async () => {
    const res = await fetch(shop);
    const data = await res.json();
    return data

}


const displayProduct = async () => {
    //search
    let query = input.value;
    console.log("Query", query);
    //just display
    const payload = await getData();

    let dataDisplay = payload.filter((eventData) => {
        //search
        if (query === "") {
            return eventData
        } else if (eventData.name.toLowerCase().includes(query.toLowerCase())) {
            return eventData
        }

    }).map((product) => {
        const { name, price, image } = product;

        return `
        <div class="item">
        <img src="${image}" alt="nikevapour">
        <h2>${name}</h2>
        <div class="price">${price}</div>
        <button class="addCart">Add to Cart</button>
    </div>

        `
    }).join("");

    display.innerHTML = dataDisplay;
}
displayProduct();


input.addEventListener("input", () => {
    displayProduct();
})