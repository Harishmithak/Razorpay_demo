<button id="rzp-button1">Pay</button>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    var options = {
        "key": "{{$response['razorpayId']}}",
        "amount": "{{$response['amount']}}",
        "currency": "{{$response['currency']}}",
        "name": "Acme Corp",
        "description": "Test Transaction",
        "image": "https://example.com/your_logo",
        "order_id": "{{$response['orderId']}}",
        "handler": function(response) {
            document.getElementById("rzp_paymentid").value=response.razorpay_payment_id;
            document.getElementById("rzp_orderid").value=response.razorpay_order_id;
            document.getElementById("rzp_signature").value=response.razorpay_signature;
            // alert(response.razorpay_payment_id);
            // alert(response.razorpay_order_id);
            // alert(response.razorpay_signature);
            document.getElementById('rzp-paymentresponse').click();
        },

        "prefill": {

            "name": "{{$response['name']}}",
            "email": "{{$response['email']}}",
            "contact": "{{$response['contactNumber']}}"
        },
        "notes": {

            "address": "{{$response['address']}}"
        },
        "theme": {
            "color": "#F37254"
        }
    }
//         window.onload = function() {
//     document.getElementById('rzp-button1').click();
// };
        var rzp1 = new Razorpay(options);

document.getElementById('rzp-button1').onclick = function(e) {
    rzp1.open();
    e.preventDefault();
}

// window.onload = function() {
//     document.getElementById('rzp-button1').click();
// };

    

</script>
<form action="{{url('/payment-complete')}}" method="POST" hidden>
  
    <input type="text" class="form-control" id="rzp_paymentid" name="rzp_paymentid"> 
    <input type="text" class="form-control" id="rzp_orderid" name="rzp_orderid"> 
    <input type="text" class="form-control" id="rzp_signature" name="rzp_signature">
  <button type="submit" id="rzp-paymentresponse" class="btn btn-primary">Submit</button> 
  @csrf
</form>