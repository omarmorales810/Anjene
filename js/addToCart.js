const addToBag = document.getElementsByClassName('add-to-cart-link');
    for (let i = 0; i < addToBag.length; i++){
        let addBagBtn = addToBag[i];
        addBagBtn.addEventListener('click', addToBagItem);
    }

    function addToBagItem (e) {
        let buttonClicked = e.target;
        let bagItemWrapper = buttonClicked.parentElement.parentElement.parentElement.parentElement;
        var title = bagItemWrapper.getElementsByClassName('page-product-name')[0].innerText;
        let price = bagItemWrapper.getElementsByClassName('page-product-price')[0].innerText;
        let imgSrc = bagItemWrapper.getElementsByClassName('page-product-img-url')[0].src;
        console.log(title, price, imgSrc);

        addItemToBag(title, price, imgSrc);
        
    
    }

    function addItemToBag(title, price, imgSrc) {
        let itemRows = document.createElement('div');
        itemRows.innerText = 'product ito';
        let bagListItems = document.getElementsByClassName('bag-page-table')[0];
        bagListItems.append(itemRows);
    }
    