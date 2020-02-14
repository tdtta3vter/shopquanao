
(function () {
    'use strict';

    $(document).foundation();

    $(document).ready(function () {

        //SWITCH PAGES
        switch ($("body").data("page-id")){
            case 'home':
                ACMESTORE.homeslider.initCarousel();
                ACMESTORE.homeslider.homePageProducts();
                break;
            case 'product':
                ACMESTORE.product.details();
                break;
            case 'products':
            case 'categories':
                ACMESTORE.products.display();
                break;
            case 'cart':
                ACMESTORE.product.cart();
                break;
            case 'adminProduct':
                ACMESTORE.admin.changeEvent();
                ACMESTORE.admin.delete();
                break;
            case 'adminDashboard':
                ACMESTORE.admin.dashboard();
                break;
            case 'adminCategories':
                ACMESTORE.admin.update();
                ACMESTORE.admin.delete();
                ACMESTORE.admin.create();
                break;
            default:
                //do nothing
        }
    })

})();