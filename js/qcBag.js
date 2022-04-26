if (document.readyState == "loading"){
    document.addEventListener('DOMContentLoaded', ready);
} else {
    ready()
}
    
function ready(){
    const initiliazeCount = () => {
        const countItems = [];
        const itemsWrapper = document.getElementById('bag-page-table');
        let itemsWrapperLength =  itemsWrapper.children.length;
        for (i= 0; i < itemsWrapperLength; i++){
            countItems.push(1);
        };
        return countItems;
    }

    
    const mainF = () => {
        const increment = document.getElementsByClassName("quantity-btn-increment");
        const decrement = document.getElementsByClassName("quantity-btn-decrement");
        const initiliazeCountResult = initiliazeCount();

        const decrementQty = (count) => {
            
            for (let i = 0; i < decrement.length; i++){
                let quantityInput = document.getElementsByClassName("quantity-input")[i];
                quantityInput.value = count[i];
                let decBtn = decrement[i];

                decBtn.addEventListener('click', () => {
                    if (count[i] > 1) {
                        count[i]--;
                        quantityInput.value = count[i];
                        updatePriceTotal();
                    } else {
                        quantityInput.value = 1;
                    }
                });
            } 
        }
        decrementQty(initiliazeCountResult);

        const incrementQty = (count) => {

            for (let i=0; i < increment.length; i++){
                let quantityInput = document.getElementsByClassName("quantity-input")[i];
                quantityInput.value = count[i];
                let incBtn = increment[i];

                incBtn.addEventListener('click', () => {
                    count[i]++;
                    quantityInput.value = count[i];
                    updatePriceTotal();
                    
                });
            }
        }
        incrementQty(initiliazeCountResult);

        
    } 
    mainF();

    function updatePriceTotal () {
        
        let itemContainer = document.getElementsByClassName('bag-page-table')[0];
        let itemRows = document.getElementsByClassName('bag-page-table-item');
        let total = 0;
    
        for (i = 0; i < itemRows.length; i++){
            let itemRow = itemRows[i];
            let itemPrice = itemRow.getElementsByClassName('bag-page-item-price')[0];
            let quantityInput = itemRow.getElementsByClassName('quantity-input')[0];
            let itemQuantityPrice = itemRow.getElementsByClassName('item-total-price')[0];
            let price = parseFloat(itemPrice.innerText.replace('₱',''));
            let qty = quantityInput.value;
            itemQuantityPrice.innerText =  `₱${parseFloat(price * qty)}`;
            
            total = total + (price * qty);
        }
    
        document.getElementsByClassName('total-item-price')[0].innerText = `Total ₱${total}`;
    };

    function qtyChanged () {
        let quantityInput = document.getElementsByClassName("quantity-input");
        for (let i=0; i < quantityInput.length; i++){
            let qty = quantityInput[i];
            qty.addEventListener('change', (e) => {
                qty.value = parseInt(e.target.value);
                console.log(typeof(qty.value));
                if (isNaN(qty.value) || qty.value <= 0) {
                    qty.value = 1;
                } else{
                    console.log('valid');
                }
                updatePriceTotal();
            })

        }
    }
    qtyChanged();
}