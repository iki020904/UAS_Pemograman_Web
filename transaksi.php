<?php
// Define the WhatsApp link
$whatsappLink = "https://wa.me/6281310715967?text=Selamat%20Pagi%20Saya%20Ingin%20Memesan%20";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bayar Melalui WhatsApp</title>
    <style>
        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            background-color: #4CAF50; /* Green background */
            color: white; /* White text */
            border-radius: 5px;
            transition: background-color 0.3s;
            border: none;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #45a049; /* Darker green background on hover */
        }

        .bayar {
            background-color: #007BFF; /* Blue background */
        }

        .bayar:hover {
            background-color: #0056b3; /* Darker blue background on hover */
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Bayar Melalui WhatsApp</h2>
        <a class="btn bayar" href="<?php echo $whatsappLink; ?>">Bayar</a>
    </div>
</body>
</html>
