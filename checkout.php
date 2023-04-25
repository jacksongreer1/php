<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Complete your purchase</title>
</head>
<body>

    <header>
        <h1 class="logo">Shopping</h1>
        <ul class="menu-container">
            <li class="menu-item">Home</li>
            <li class="menu-item">Collections</li>
            <li class="menu-item">Products</li>
            <li class="menu-item red">For Sale</li>
        </ul>
       
    </header>

    <div class="progress-checkout-container">
        <div class="progress-step-container">
            <div class="step-check"></div>
            <span class="step-title">Shipping</span>
        </div>
        <div class="progress-step-container">
            <div class="step-check"></div>
            <span class="step-title">Payment</span>
        </div>
        <div class="progress-step-container">
            <div class="step-check"></div>
            <span class="step-title">Review</span>
        </div>
    </div>
    
    <div class="form-container">
        <h2 class="form-title">Payment Details</h2>
        <form action="" class="checkout-form">
            <div class="input-line">
                <label for="name">Name on card</label>
                <input type="text" name="name" id="name" placeholder="Your name and surname">
            </div>
            <div class="input-line">
                <label for="name">Card number</label>
                <input type="text" name="name" id="name" placeholder="1111-2222-3333-4444">
            </div>
            <div class="input-container">
                <div class="input-line">
                    <label for="name">Expiring Date</label>
                    <input type="text" name="name" id="name" placeholder="09-21">
                </div>
                <div class="input-line">
                    <label for="name">CVC</label>
                    <input type="text" name="name" id="name" placeholder="***">
                </div>
            </div>
            <input type="button" value="Complete purchase">
        </form>
    </div>

</body>
</html>