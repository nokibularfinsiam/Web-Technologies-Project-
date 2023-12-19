function validateAndSubmit()
{
    const trackingKey = document.getElementById('tracking_key').value;
    const estimatedDeliveryTime = document.getElementById('EDT').value;
    const deliveryStatus = document.getElementById('delivery_status').value;

    if (trackingKey == "" || estimatedDeliveryTime == "" || deliveryStatus == "") {
        alert("Please fill in all the fields.");
    } else {
        document.getElementById('updateDeliveryForm').submit();
    }
}
