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
            countItems.push(0)
        };
        return countItems;
    }
    const mainF = () => {
        const increment = document.getElementsByClassName("quantity-btn-increment");
        const decrement = document.getElementsByClassName("quantity-btn-decrement");
        console.log(initiliazeCount());
        
    }  
    mainF();
}