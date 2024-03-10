@extends('backend.master_customer')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card formi">
                <div class="card-header">Order details</div>
                <div class="card-body">
                    <form id="orderForm">
                        <label for="fromLocation">From Location:</label>
                        <input type="text" id="fromLocation" value="Chittagong" disabled><br><br>

                        <label for="toLocation">To Location:</label>
                        <select id="toLocation">
                            <option value="Dhaka">Dhaka</option>
                            <option value="Sylhet">Sylhet</option>
                            <option value="Khulna">Khulna</option>
                        </select><br><br>

                        <label for="parcelType">Parcel Type:</label>
                        <input type="text" id="parcelType"><br><br>

                        <label for="note">Note:</label>
                        <textarea id="note" rows="4" cols="50"></textarea><br><br>

                        <label for="parcelWeight">Parcel Weight:</label>
                        <select id="parcelWeight" onchange="toggleCustomWeight()">
                            <option value="<=1"><= 1 kg</option>
                            <option value="custom">Custom</option>
                        </select>
                        <input type="text" id="customWeight" placeholder="Enter weight in kg" style="display: none;"><br><br>

                        <span class="note">For weights above 1 kg, there will be an additional cost of 20 Tk per additional kg.</span><br><br>

                        <button type="button" onclick="calculateDeliveryCost()">Calculate Delivery Cost</button><br><br>

                        <label for="totalCost">Total Delivery Cost:</label>
                        <span id="totalCost"></span><br><br>

                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection