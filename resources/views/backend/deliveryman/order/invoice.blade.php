@extends('backend.master_deliveryman')

@section('content')
@php $status=['Pending','Accepted','Processing','Completed','Return'] @endphp
@section('content')
<main class="content px-3 py-4">
    <div class="container-fluid">
        <div class="mb-3">
                <div class="row">
                   <div class="col-12">
                    <button type="button" class="btn btn-info no-print" onclick="window.print()"> Print</button>
                    <div class="container">
                        <div class="invoice-header">
                          <h2> Invoice</h2>
                        </div>
                      
                        <div class="invoice-details">
                          <table>
                            <tr>
                              <td><strong>Invoice Number:</strong> {{str_pad($order->id,5,'0',STR_PAD_LEFT)}}</td>
                              <td><strong>Order Date:</strong> <?= $order->pickup_date?></td>
                              <td><strong>Delivery Date:</strong> <?= $order->delivery_date?></td>
                            </tr>
                            <tr>
                              <td>
                                <strong>Customer:</strong><br>
                                 <?= $order->customer?->name ?><br>
                                 <?= $order->customer?->email ?>
                                </td>
                              <td>
                                <strong>Pickup Address:</strong><br>
                                
                                <?= $order->pickupLocation?->name ?><br>
                                <?= $order->pickup_address ?>
                              </td>
                              <td><strong>Delivery Address:</strong><br>
                                <?= $order->deliveryLocation?->name ?><br>
                                 <?= $order->delivery_address ?>
                                </td>
                            </tr>
                          </table>
                        </div>
                      
                        <div class="invoice-items">
                          <table>
                            <thead>
                              <tr>
                                <th>Parcel type</th>
                                <th>Weight</th>
                                <th>Product Price</th>
                                <th>Delivery Price</th>
                               
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td><?= $order->docType?->name ?></td>
                                <td><?= $order->weight ?>KG</td>
                                <td><?= number_format($order->price) ?>BDT</td>
                                <td><?= number_format($order->delivery_cost_base + $order->delivery_cost_weight + $order->urgent_cost)  ?>BDT</td>
                              </tr>
                              
                              <tr>
                                <td colspan="3" class="invoice-total"><strong>Total:</strong> <?= number_format($order->price + $order->delivery_cost_base + $order->delivery_cost_weight + $order->urgent_cost) ?>BDT</td>
                                <td></td>
                                <td></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection