document.getElementById('track-form').addEventListener('submit', function(event) {
    event.preventDefault();
    var trackingNumber = document.getElementById('tracking-number').value.trim();
    var status = getStatus(trackingNumber);
    displayStatus(status);
});

function getStatus(trackingNumber) {
    // Simulate tracking status based on the tracking number
    if (trackingNumber === 'ABC123') {
        return 'In transit';
    } else if (trackingNumber === 'DEF456') {
        return 'Delivered';
    } else {
        return 'Not found'; // Default status if tracking number doesn't match
    }
}

function displayStatus(status) {
    var statusMessage = document.createElement('p');
    statusMessage.textContent = 'Status: ' + status;
    document.getElementById('tracking-results').innerHTML = ''; // Clear previous content
    document.getElementById('tracking-results').appendChild(statusMessage);
}