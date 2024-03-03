<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcel Tracking</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .parcel {
            margin-bottom: 20px;
        }
        .parcel h3 {
            margin-bottom: 10px;
        }
        .status {
            font-weight: bold;
        }
    </style>
    <script>
        function trackParcel(orderId) {
            // Here you can perform the tracking operation using AJAX
            // For example, you can make a POST request to a PHP script that handles the tracking operation
            // You can use the orderId parameter to identify the parcel to be tracked
            var status = 'Delivered'; // Example status, replace with actual status from server
            var message = '';

            if (status === 'Delivered') {
                message = 'Your parcel has been delivered successfully.';
            } else {
                message = 'Your parcel is not delivered yet.';
            }

            alert(message);
        }
    </script>
</head>
<body>

<div class="container">
    <h2>Parcel Tracking</h2>
    <div class="parcel">
        <h3>Order ID: 1</h3>
        <p>Status: <span class="status" id="status-1">Not Delivered</span></p>
        <button onclick="trackParcel(1)">Track Parcel</button>
    </div>
    <div class="parcel">
        <h3>Order ID: 2</h3>
        <p>Status: <span class="status" id="status-2">Not Delivered</span></p>
        <button onclick="trackParcel(2)">Track Parcel</button>
    </div>
    <!-- Add more parcels here -->
</div>

</body>
</html>
