if (document.readyState == "loading"){
    document.addEventListener('DOMContentLoaded', ready);
} else {
    alert("ready na")
    ready()
} 

function ready() {
    alert("hi");
    // Removing the Item in the Bag
    const removeItem = document.getElementsByClassName('item-remove-btn');
    for (i = 0; i < removeItem.length; i++){
        let removeBtn = removeItem[i];
        removeBtn.addEventListener('click', removeBagItem)
    }

    //Adding Item to Bag
    console.log('hoy');
    const addToBag = document.getElementsByClassName('add-to-cart-link');
    for (let i = 0; i < addToBag.length; i++){
        let addBagBtn = addToBag[i];
        addBagBtn.addEventListener('click', addToBagItem);
    }
    console.log("inside ready add");
}

const updateCartTotal = () => {
    let itemContainer = document.getElementsByClassName('bag-page-table')[0];
    let itemRows = document.getElementsByClassName('bag-page-table-item');
    let total = 0;

    for (i = 0; i < itemRows.length; i++){
        let itemRow = itemRows[i];
        let itemPrice = itemRow.getElementsByClassName('bag-page-item-price')[0];
        console.log(itemPrice);
        let quantityInput = itemRow.getElementsByClassName('quantity-input')[0];
        let itemQuantityPrice = itemRow.getElementsByClassName('item-total-price')[0];
        let price = parseFloat(itemPrice.innerText.replace('₱',''));
        let qty = quantityInput.value;
        
        
        total = total + (price * qty);
    }

    total = Math.round(total * 100) / 100;
    document.getElementsByClassName('total-item-price')[0].innerText = `Total ₱${total}`;
    console.log(total);
};



function removeBagItem (e) {
    let buttonClicked = e.target;
    buttonClicked.parentElement.parentElement.parentElement.remove();
    updateCartTotal();
}

function addToBagItem (e) {
    let buttonClicked = e.target;
    alert("buton clicked");

}
