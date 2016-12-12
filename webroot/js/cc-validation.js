$(document).ready(function () {
    
    $(document).on('change', '.cc-container #card-number', function() {
        $ccInput = $(this);
        ccNumber = $ccInput.val().toString();
        $cardImg = $('.credit-cart-type');
        switch(true) {
            case ccNumber.charAt(0) == 4:
                $cardImg.html("<img src='/img/visa.png' alt='visa'/>");
                if(visa(ccNumber)) {
                    $ccInput.css('border', '1px solid green');
                } else {
                    $ccInput.css('border', '1px solid red');

                }
            break;
            case /^37|34/.test(ccNumber):
                $cardImg.html("<img src='/img/amex.png' alt='American Express'/>");
                if(amex(ccNumber)) {
                    $ccInput.css('border', '1px solid green');
                } else {
                    $ccInput.css('border', '1px solid red');
                }
            break;
            case /^5(?:[1-5])/.test(ccNumber):
                $cardImg.html("<img src='/img/master-card.png' alt='Master Card'/>");
                if(masterCard(ccNumber)) {
                    $ccInput.css('border', '1px solid green');
                } else {
                    $ccInput.css('border', '1px solid red');
                }
            break;
            case /^6011|65/.test(ccNumber):
                $cardImg.html("<img src='/img/discover-card.png' alt='Discover Card'/>");
                if(discover(ccNumber)) {
                    $ccInput.css('border', '1px solid green');
                } else {
                    $ccInput.css('border', '1px solid red');
                }
            break;
            case /^3(?:0[0-5])|^36|^38/.test(ccNumber):
                $cardImg.html("<img src='/img/dinners-card.png' alt='Dinners Club Card'/>");
                if(dinersClub(ccNumber)) {
                    $ccInput.css('border', '1px solid green');
                } else {
                    $ccInput.css('border', '1px solid red');
                }
            break;
            case /^35/.test(ccNumber):
                $cardImg.html("<img src='/img/jcb-card.png' alt='JCB Card'/>");
                if(jcb(ccNumber)) {
                    $ccInput.css('border', '1px solid green');
                } else {
                    $ccInput.css('border', '1px solid red');
                }
            break;
            default:
                $ccInput.css('border', 'blue');
                $cardImg.html("");
            break;

        }
    });

    function visa(cardNumber) 
    {
        if(cardNumber.length == 13 || cardNumber.length == 16) {
            return true;
        }
        return false;
    }

    function amex(cardNumber)
    {
        if(cardNumber.length == 15) {
            return true;
        }
        return false;
    }

    function masterCard(cardNumber) 
    {
        if(cardNumber.length == 16) {
            return true;
        }
        return false;
    }

    function discover(cardNumber) 
    {
        if(cardNumber.length == 16) {
            return true;
        }
        return false;
    }

    function dinersClub(cardNumber) 
    {
        console.log(cardNumber.length);
        if (cardNumber.length == 14) {
            return true;
        } 
        return false;
    }

    function jcb(cardNumber)
    {
        if(cardNumber.length == 16) {
            return true;
        }
        return false;
    }
});