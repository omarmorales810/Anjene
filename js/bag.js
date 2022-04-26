if (document.readyState == "loading"){
    document.addEventListener('DOMContentLoaded', ready);
} else {
    ready()
} 

function ready() {
    // Removing the Item in the Bag
    const removeItem = document.getElementsByClassName('item-remove-btn');
    for (i = 0; i < removeItem.length; i++){
        let removeBtn = removeItem[i];
        removeBtn.addEventListener('click', removeBagItem)
    }
}

const updateCartTotal = () => {
    let itemContainer = document.getElementsByClassName('bag-page-table')[0];
    let itemRows = document.getElementsByClassName('bag-page-table-item');
    let total = 0;

    for (i = 0; i < itemRows.length; i++){
        let itemRow = itemRows[i];
        let itemPrice = itemRow.getElementsByClassName('bag-page-item-price')[0];
        let quantityInput = itemRow.getElementsByClassName('quantity-input')[0];
        let price = parseFloat(itemPrice.innerText.replace('₱',''));
        let qty = quantityInput.value;
        total = total + (price * qty);
    }
    document.getElementsByClassName('total-item-price')[0].innerText = `₱${total}`;
    console.log(total);
};

const removeBagItem = (e) => {
    let buttonClicked = e.target;
    buttonClicked.parentElement.parentElement.parentElement.remove();
    updateCartTotal();
}
