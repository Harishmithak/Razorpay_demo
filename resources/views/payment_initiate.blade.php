{{-- <!DOCTYPE html>
<html>
<head>
    <title>Razorpay Payment</title>
    <!-- Include Razorpay JS library -->
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</head>
<body>
    <h1>Razorpay Payment</h1>

    <form action="/payment_initiate" method="POST">
        @csrf
        <input type="text" name="amount">
        <button type="submit">Pay Now</button>
    </form>


</body>
</html> --}}

{{-- payment_initiate.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment Form</title>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</head>
<body>
    <form action="{{url('/payment_initiate_request')}}" method="POST"> 
      
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" class="form-control">
        
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" class="form-control">
        
        <label for="contactNumber">Contact Number:</label>
        <input type="text" id="contactNumber" name="contactNumber" class="form-control">
        
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" class="form-control">  
        <label for="amount">Amount:</label>
        <input type="text" id="amount" name="amount" class="form-control">
        <button type="submit" class="btn btn-primary">Submit</button>
        @csrf
    </form>
</body>
</html>
