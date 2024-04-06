<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>School System</title>
<style>
 body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-image: url('bg8.jpeg');
    background-color: #A5DD9B;
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
    color: #fff;
}

.splash-screen {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #A5DD9B;
    display: flex;
    justify-content: center;
    align-items: center;
    animation: fadeOut 2s forwards;
    z-index: 1000;
}

@keyframes fadeOut {
    to {
        opacity: 0;
        visibility: hidden;
    }
}

.container {
    position: relative;
    max-width: 800px;
    margin: 20px auto;
    padding: 40px;
    border-radius: 10px;
    background-image: url('b.jpg');
    background-size: cover;
    background-position: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}
.website-icon3 {
        position: absolute;
        top: 10px;
        left: 10px;
        width: 150px; /* Size doubled */
    }

h1 {
    text-align: center;
    color: #fff;
    margin-bottom: 20px;
}

.logo {
    display: block;
    margin: 0 auto 20px auto;
    width: 150px;
}   /* Adjust as necessary */
 
    form {
        margin-top: 20px;
    }
    input[type="text"], input[type="number"], input[type="password"] {
        width: 100%;
        padding: 12px;
        margin: 10px 0;
        border: 1px solid #555; /* Darker Grey */
        border-radius: 5px;
        box-sizing: border-box;
        background-color: #444; /* Dark Grey */
        color: #fff; /* White */
    }
    button {
        color: #9B4444; /* White */
        padding: 12px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin: 10px 0;
        transition: background-color 0.3s ease;
        width: 48%; /* Reduce button width */
    }
    button:hover {
        opacity: 1;
    }
    .hidden {
        display: none;
    }

    /* Style for the form-group to adjust input and button width and centering */
    .form-group {
        width: 50%; /* Reduce width to half */
        margin: 0 auto; /* Center horizontally */
        display: flex;
        flex-direction: column; /* Align children vertically */
    }
    .transaction-item {
        padding: 10px;
        margin-bottom: 10px;
        border-radius: 5px;
        background-color: #333333; /* Consistent with input background for harmony */
        color: #ffffff; /* Maintained white text for readability */
    }
    .add-money {
        background-color: #4caf50; /* Vibrant green for positive actions like adding money */
    }
    .purchase {
        background-color: #f44336; /* Bright red for purchases for a clear distinction */
    }
    .balance {
        padding: 10px;
        border-radius: 5px;
        background-color: #3f51b5; /* Deep purple for balance section for visibility */
        color: #ffffff; /* White text for readability */
        margin-bottom: 20px;
    }
    .balance span {
        font-weight: bold;
    }
    .back-to-money {
        margin-top: 20px;
        text-align: center;
    }
    .add-money-options button {
        margin: 0 10px;
    }
    .student-info {
        text-align: right;
        margin-bottom: 20px;
        color: #ff1111; /* Cyan for student info for consistency with headings */
        font
    }
    .student-info span {
        margin-left: 10px;
        display: block; /* Ensuring each piece of info is on its own line */
    }
    .highlight {
        background-color: yellow; /* This color is commonly used for highlighting */
    }
    .analyse-container {
        padding: 20px;
        border-radius: 10px;
        background-color: #37474f; /* Darker grey for analysis sections, improving contrast */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
    .analyse-section {
        display: flex;
        justify-content: space-between;
    }
    .analyse-section h2, .analyse-section h3 {
        color: #ffffff; /* White text for headings within analysis for better readability */
    }
    .analyse-item {
        padding: 10px;
        margin-bottom: 10px;
        border-radius: 5px;
        background-color: #333333; /* Matching the transaction items for consistency */
        color: #ffffff; /* White text for readability */
    }
    .analyse-item span {
        font-weight: bold;
    }
@keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    @keyframes scaleUp {
        from { transform: scale(0.98); }
        to { transform: scale(1); }
    }

    /* Applying fadeIn to body and container for a gentle load effect */
    body, .container {
        animation: fadeIn 1s ease-out;
    }

    button:hover, input[type="text"]:focus, input[type="number"]:focus, input[type="password"]:focus {
        animation: scaleUp 0.3s ease forwards;
    }

    /* Additional styles for hover and focus states */
    button:hover {
        opacity: 0.9;
    }

    input:focus {
        border-color: #555; /* Darker Grey */
        background-color: #555; /* Slightly lighter to indicate focus */
    }

    /* Add this CSS for button alignment */
    .button-group {
        display: flex;
        justify-content: space-between; /* Spread buttons evenly */
        margin-top: 10px; /* Adjust margin */
    }

    .center-aligned {
        justify-content: center; /* Center align buttons in this group */
    }
</style>
</head>
<body>
    <div class="splash-screen">
        <img src="icon3.jpeg" alt="Website Logo" style="width: 200px;">
    </div>
    
    <div class="container" id="loginContainer">
        <img src="icon3.jpeg" alt="Website Icon3" class="website-icon3">
        <h1>Parent Login</h1>
        <img src="logo2.avif" alt="College Logo" class="logo">
        <form id="loginForm">
            <div class="form-group">
                <input type="text" id="username" placeholder="Username">
                <input type="password" id="password" placeholder="Password">
                <button type="button" onclick="login()">Login</button>
            </div>
        </form>
    </div>

<div class="container hidden" id="parentPortal">
    <img src="icon3.jpeg" alt="Website Icon3" class="website-icon3">
    <div class="student-info">
        <span><b>DATA-DASH</b></span>
        <span>12-CS-2025</span>
    </div>
    <div class="analyse-container">
        <h2>Weekly and Monthly Expenditure</h2>
        <div class="analyse-section">
            <h3>Weekly Expenditure</h3>
            <div class="analyse-item">
                <span>School Fee: $10000</span>
            </div>
            <div class="analyse-item">
                <span>Canteen: $405</span>
            </div>
            <div class="analyse-item">
                <span>Xerox: $35</span>
            </div>
            <div class="analyse-item">
                <span>Cafeteria: $132</span>
            </div>
            <div class="analyse-item">
                Total: $10572
            </div>
        </div>
        <div class="analyse-section">
            <h3>Monthly Expenditure</h3>
            <div class="analyse-item">
                <span>School Fee: $10000</span>
            </div>
            <div class="analyse-item">
                <span>Canteen: $1902</span>
            </div>
            <div class="analyse-item">
                <span>Xerox: $104</span>
            </div>
            <div class="analyse-item">
                <span>Cafeteria: $512</span>
            </div>
            <div class="analyse-item">
                Total: $11618
            </div>
        </div>
    </div>
    <div class="button-group">
        <button onclick="showAddMoneyPage()">Add Money</button>
        <button onclick="showTransactions()">Transactions</button>
    </div>
    <div class="button-group">
        <button onclick="checkBalance()">Check Balance</button>
        <button onclick="showLimitPage()">Set Limits</button>
    </div>
    <div class="button-group center-aligned">
        <button onclick="logout()">Logout</button>
    </div>
</div>

<div class="container hidden" id="addMoneyPage">
    <img src="icon3.jpeg" alt="Website Icon3" class="website-icon3">
    <h1>Add Money</h1>
    <form id="addMoneyForm" action="add_money.php" method="POST" onsubmit="submitAddMoney(event)">
    <input type="number" id="moneyAmount" placeholder="Enter Amount" required>
    <select id="paymentMethod" required>
        <option value="" disabled selected>Select Payment Method</option>
        <option value="UPI">UPI</option>
        <option value="Credit Card">Credit Card</option>
        <option value="Debit Card">Debit Card</option>
    </select>
    <input type="text" id="upiId" placeholder="Enter UPI ID">
    <button type="submit">Submit</button>
</form>
    <div class="back-to-money">
        <button onclick="backToParentPortal()">Back to Home</button>
    </div>
</div>

<div class="container hidden" id="limitPage">
    <img src="icon3.jpeg" alt="Website Icon3" class="website-icon3">
    <h1>Set Limits</h1>
    <form id="limitForm" onsubmit="submitLimits(event)">
        <div>
            <label for="canteen">Canteen:</label>
            <input type="number" id="canteen" name="canteen" min="0" required>
        </div>
        <div>
            <label for="xerox">Xerox:</label>
            <input type="number" id="xerox" name="xerox" min="0" required>
        </div>
        <div>
            <label for="cafeteria">Cafeteria:</label>
            <input type="number" id="cafeteria" name="cafeteria" min="0" required>
        </div>
        <div>
            <label for="stationary">Stationary:</label>
            <input type="number" id="stationary" name="stationary" min="0" required>
        </div>
        <button type="submit">Submit</button>
    </form>
    <div class="back-to-money">
        <button onclick="backToParentPortal()">Back to Home</button>
    </div>
</div>

<div class="container hidden" id="analysisPage">
    <h1>Analysis</h1>
    <div class="analyse-container">
        <h2>Weekly and Monthly Expenditure</h2>
        <div class="analyse-section">
            <h3>Weekly Expenditure</h3>
            <div class="analyse-item">
                <span>School Fee: $10000</span>
            </div>
            <div class="analyse-item">
                <span>Canteen: $405</span>
            </div>
            <div class="analyse-item">
                <span>Xerox: $35</span>
            </div>
            <div class="analyse-item">
                <span>Cafeteria: $132</span>
            </div>
            <div class="analyse-item">
                Total: $10572
            </div>
        </div>
        <div class="analyse-section">
            <h3>Monthly Expenditure</h3>
            <div class="analyse-item">
                <span>School Fee: $10000</span>
            </div>
            <div class="analyse-item">
                <span>Canteen: $1902</span>
            </div>
            <div class="analyse-item">
                <span>Xerox: $104</span>
            </div>
            <div class="analyse-item">
                <span>Cafeteria: $512</span>
            </div>
            <div class="analyse-item">
                Total: $11618
            </div>
        </div>
    </div>
    <div class="back-to-money">
        <button onclick="backToParentPortal()">Back to Home</button>
    </div>
</div>

<div class="container hidden" id="monitoring">
    <img src="icon3.jpeg" alt="Website icon3" class="website-icon3">
    <h1>Transactions</h1>
    <ul id="transactionHistory">
        <li class="transaction-item add-money">Transaction 1: Add Money - $1000</li>
        <li class="transaction-item purchase">Transaction 2: Purchase - $90 (Canteen)</li>
        <li class="transaction-item add-money">Transaction 3: Add Money - $30</li>
        <li class="transaction-item purchase">Transaction 4: Purchase - $50 (Cafeteria)</li>
        <li class="transaction-item add-money">Transaction 5: Add Money - $10</li>
        <li class="transaction-item purchase">Transaction 6: Purchase - $5 (Canteen)</li>
        <li class="transaction-item add-money">Transaction 7: Add Money - $25</li>
        <li class="transaction-item purchase">Transaction 8: Purchase - $20 (Xerox)</li>
        <li class="transaction-item add-money">Transaction 9: Add Money - $40</li>
        <li class="transaction-item purchase">Transaction 10: Purchase - $120 (Canteen)</li>
        <li class="transaction-item add-money">Transaction 11: Add Money - $15</li>
        <li class="transaction-item purchase">Transaction 12: Purchase - $30 (Cafeteria)</li>
    
        <li class="transaction-item purchase">Transaction 18: Purchase - $45 (Canteen)</li>
        <li class="transaction-item add-money">Transaction 19: Add Money - $20</li>
        <li class="transaction-item purchase">Transaction 20: Purchase - $50 (Cafeteria)</li>
    </ul>
    <div class="balance">
        Child's Current Balance: <span>$2543</span>
    </div>
    <div class="back-to-money">
        <button onclick="backToParentPortal()">Back to Home</button>
    </div>
</div>

<script>
    let currentUser = null;
    window.addEventListener('load', () => {
    setTimeout(() => {
        document.querySelector('.splash-screen').style.display = 'none';
    }, 3000);
});


function login() {
    // Get the username and password from the input fields
    let usernameInput = document.getElementById('username').value;
    let passwordInput = document.getElementById('password').value;

    // Check if the entered username and password match the allowed credentials
    if (usernameInput === 'user1' && passwordInput === 'pass1') {
        console.log("Logged in successfully");
        showParentPortal(); // If credentials are correct, show the parent portal
    } else {
        alert("Invalid username or password"); // If credentials are incorrect, show an error message
    }
}

    function logout() {
        console.log("Logged out successfully");
        hideAllContainers();
        document.getElementById('loginContainer').classList.remove('hidden');
    }

    function showParentPortal() {
        hideAllContainers();
        document.getElementById('parentPortal').classList.remove('hidden');
    }


    function showAddMoneyPage() {
        hideAllContainers();
        document.getElementById('addMoneyPage').classList.remove('hidden');
    }

    function showLimitPage() {
        hideAllContainers();
        document.getElementById('limitPage').classList.remove('hidden');
    }

    function showTransactions() {
        hideAllContainers();
        document.getElementById('monitoring').classList.remove('hidden');
    }

    function hideAllContainers() {
        let containers = document.getElementsByClassName('container');
        for (let container of containers) {
            container.classList.add('hidden');
        }
    }

    function backToParentPortal() {
        hideAllContainers();
        document.getElementById('parentPortal').classList.remove('hidden');
    }

    function submitAddMoney(event) {
    event.preventDefault();
    let amount = document.getElementById('moneyAmount').value;
    let paymentMethod = document.getElementById('paymentMethod').value;
    let upiId = document.getElementById('upiId').value;

    // Validate if a payment method is selected
    if (!paymentMethod) {
        alert("Please select a payment method");
        return;
    }

    // If payment method is UPI, require UPI ID
    if (paymentMethod === 'UPI' && !upiId) {
        alert("Please enter UPI ID");
        return;
    }

    let xhr = new XMLHttpRequest();
    xhr.open('POST', 'add_money.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function() {
        if (this.status === 200) {
            console.log('Transaction successful');
            alert('Transaction successful!');
            backToParentPortal();
        } else {
            console.log('Error: ' + this.status);
        }
    };

    let formData = new URLSearchParams();
    formData.append('moneyAmount', amount);
    formData.append('paymentMethod', paymentMethod);
    if (upiId) {
        formData.append('upiId', upiId);
    }

    xhr.send(formData);
}


    function submitLimits(event) {
        event.preventDefault();
        // Placeholder function for submitting limits form
        console.log("Limits form submitted");
        alert("Limits set successfully!"); // Show success message
        backToParentPortal();
    }

    function checkBalance() {
        // Placeholder function for checking balance
        // You can implement logic to calculate balance here
        alert("Child's current balance: $2543"); // Demo balance
    }
</script>
</body>
</html>