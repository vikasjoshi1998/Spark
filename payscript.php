<?php
$apiKey= "rzp_test_JNumzf3r8mQWCK";
?>
<script src="http://code.jquery.com/jquery-3.5.0.js"></script>
<form action="" method="POST">
    <script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $apiKey; ?>"
    data-amount="<?php echo $ POST['amount'] * 100;?>"
    data-currency="INR"
    data-id="<?php echo 'OID'.rand(10,100).'END';?>"
    data-buttontext="Pay with Razorpay"
    data-name="Traidev Solutions"
    data-description="Training & Development!"
    data-image="https://traidev.com/img/web-design-development.png"
    data-prefill.name="<?php echo $_POST['name'];?>"
    data-prefill.email="<?php echo $_POST['email'];?>"
    data-prefill.contact="<?php echo $_POST['mobile'];?>"
    data-theme.color="#F37254"
    ></script>
    <input type="hidden" custom="Hiddem Element" name="hidden">
</form>