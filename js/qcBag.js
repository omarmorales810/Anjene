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
                    
                });
            }
        }
        incrementQty(initiliazeCountResult);

        
    } 
    mainF();
}