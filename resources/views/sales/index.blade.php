<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sales Page - POS Transaction</title>
</head>
<body style="margin: 0; padding: 0; height: 100vh; display: flex; 
            justify-content: center; align-items: center; background: #f0f0f0;">

    <!-- Kotak putih -->
    <div style="width: 60%; height: 80vh; background: white; 
                padding: 40px; text-align: center; 
                border: 1px solid black; display: flex; 
                flex-direction: column; position: relative;">

        <!-- Judul di atas -->
        <div style="position: absolute; top: 30px; left: 50%; transform: translateX(-50%);">
            <h1 style="font-size: 32px;">POS Transaction</h1>
            <p style="font-size: 20px; margin-top: 5px;">Process your sales transactions here</p>
        </div>

        <!-- Form transaksi -->
        <div style="flex-grow: 1; display: flex; flex-direction: column; justify-content: center; margin-top: 80px;">
            <label style="font-size: 18px; text-align: left; margin-bottom: 5px;">Product Name:</label>
            <input type="text" style="width: 80%; padding: 10px; margin-bottom: 10px;">

            <label style="font-size: 18px; text-align: left; margin-bottom: 5px;">Quantity:</label>
            <input type="number" style="width: 80%; padding: 10px; margin-bottom: 10px;">

            <label style="font-size: 18px; text-align: left; margin-bottom: 5px;">Total Price:</label>
            <input type="text" style="width: 80%; padding: 10px; margin-bottom: 10px;" readonly>

            <button style="width: 50%; padding: 10px; background: #007bff; color: white; font-size: 18px; 
                           border: none; cursor: pointer; margin-top: 20px;">Process Transaction</button>
        </div>

    </div>

</body>
</html>
