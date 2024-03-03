<!DOCTYPE html>
<html>
<head>
    <title>Parcel Delivery Form</title>
    <style>
        .container {
            width: 50%;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-group {
            margin-bottom: 1rem;
        }
        label {
            display: block;
            margin-bottom: 0.5rem;
        }
        select, input[type="text"], input[type="number"] {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
    <script>
        function calculateDeliveryCost() {
            var parcelWeight = document.getElementById('parcel-weight').value;
            var dropLocation = document.getElementById('drop-location').value;
            var parcelType = document.getElementById('parcel-type').value;

            // Calculate delivery cost
            var deliveryCost;
            if (parcelWeight <= 1) {
                deliveryCost = 60;
            } else {
                deliveryCost = 60 + (parcelWeight - 1) * 20;
            }

            // If drop location is outside the district, double the delivery cost
            if (dropLocation !== 'same-district') {
                deliveryCost = 120 + (parcelWeight - 1) * 20;
            }

            // Display the delivery cost
            document.getElementById('delivery-cost').innerText = 'Delivery cost: ' + deliveryCost + ' Tk';

            // Display a note if the parcel type is 'package'
            if (parcelType === 'package') {
                document.getElementById('note').innerText = 'Note: Handle with care';
            } else {
                document.getElementById('note').innerText = '';
            }
        }
    </script>
</head>
<body>

<div class="container">
    <form action="submit_order.php" method="post" onsubmit="calculateDeliveryCost();">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="parcel-type">Parcel Type:</label>
            <select id="parcel-type" name="parcel-type" required>
                <option value="document">Document</option>
                <option value="package">Package</option>
            </select>
        </div>
        <div class="form-group">
            <label for="parcel-weight">Parcel Weight (kg):</label>
            <input type="number" id="parcel-weight" name="parcel-weight" min="0.1" step="0.1" required>
        </div>
        <div class="form-group">
            <label for="drop-location">Drop Location:</label>
            <select id="drop-location" name="drop-location" required>
                <option value="same-district">Same District</option>
                <option value="different-district">Different District</option>
            </select>
        </div>
        <input type="submit" value="Submit Order">
        <div id="delivery-cost"></div>
        <div id="note"></div>
    </form>
</div>

</body>
</html>

