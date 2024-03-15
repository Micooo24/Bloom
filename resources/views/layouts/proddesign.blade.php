
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BLOOM</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
    <style>
        /* General styles */
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f7fafc;
        }
        
        .menu-container {
            padding-top: 120px; /* Adjust padding-top to account for fixed buttons */
            max-height: calc(100vh - 120px);
            overflow-y: auto;
            scroll-padding-top: 100px; /* Offset to account for fixed buttons */
            background-color: #fff;
            margin-left: 14px;
            padding-left: 20px;
            padding-right: 20px;
        }

        .menu-section {
            padding: 20px;
            margin-top: 20px;
            border-top: 1px solid #ccc;
        }

        /* Container styles */
        .container {
        display: flex;
        margin-top: 20px;
        gap: 10px; /* Adjust the value as needed */
        flex-wrap: wrap;  
        justify-content: space-around;
        }


        /* Product card styles */
        .product-card {
            flex: 0 0 calc(20% - 20px); /* Set the width of each card to 25% with 20px margin */
            margin: 10px; /* Add margin around each card */
            padding: 10px;
            background-color: #fff;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.5);
            border-radius: 8px;
            transition: transform 0.3s ease;
            text-align: center; /* Center align content */
        }

        .product-card:hover {
            transform: scale(1.05);
        }

        .product-image {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 8px;
            margin: 0 auto 16px; /* Center the image horizontally and add margin at the bottom */
        }

        /* Quantity selector container */
        .product-quantity {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 10px; /* Add space below the quantity selector */
            
        }

        /* Minus and Plus buttons */
        .product-quantity-btn {
            display: inline-block;
            padding: 15px;
            cursor: pointer;
            background-color: #f7f7f7;
            border: none;
            outline: none;
            margin-top: 15px; 
            margin-bottom: 10px;
        }

        /* Quantity input */
        .qty {
            width: 30px;
            text-align: center;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin: 0 5px;
            padding: 16px 18px;
        }

        /* Add to Cart button */
        .add-to-cart-btn {
            display: inline-block;
            padding: 20px 18px;
            margin-top: 20px; 
            margin-bottom: 20px; /* Add more space below the button */
            background-color: #004236;
            color: #fff;
            border: none;
            border-radius: 2px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-transform: uppercase;
            text-decoration: none;
        }

        .add-to-cart-btn:hover {
            background-color: #00241a;
        }

        /* Responsive styles */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                align-items: center;  
                justify-content: space-around;
                margin-top: 20px;
            }

            .service {
                justify-content: space-around;
                margin-top: 20px;
                width: 30%;
                margin-top: 20px;
                transition: transform 0.3s ease;
                background-color: #fff;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5);
                border-radius: 8px;
                margin-bottom: 16px;
                padding: 10px;
            }
        }

    </style>

</head>



<body>
<div class="menu-container">
        @yield('content')
    </div>