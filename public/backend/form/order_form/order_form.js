function calculateDeliveryCost() {
    const toLocation = document.getElementById("toLocation").value;
    let parcelWeight;
    
    if (document.getElementById("parcelWeight").value === "<=1") {
        parcelWeight = 1;
    } else if (document.getElementById("parcelWeight").value === "custom") {
        parcelWeight = parseFloat(document.getElementById("customWeight").value);
    } else {
        parcelWeight = parseFloat(document.getElementById("parcelWeight").value);
    }
    
    let deliveryCost = 0;

    if (toLocation === "Chittagong") {
        if (parcelWeight <= 1) {
            deliveryCost = 60;
        } else if (parcelWeight > 1 && parcelWeight <= 10) {
            deliveryCost = 60 + (parcelWeight - 1) * 20;
        }
    } else {
        if (parcelWeight <= 1) {
            deliveryCost = 120;
        } else if (parcelWeight > 1 && parcelWeight <= 10) {
            deliveryCost = 120 + (parcelWeight - 1) * 20;
        }
    }

    document.getElementById("totalCost").innerText = deliveryCost + " Tk";
}
function toggleCustomWeight() {
    const parcelWeightSelect = document.getElementById("parcelWeight");
    const customWeightInput = document.getElementById("customWeight");
    if (parcelWeightSelect.value === "custom") {
        customWeightInput.style.display = "inline-block";
    } else {
        customWeightInput.style.display = "none";
    }
}

