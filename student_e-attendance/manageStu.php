<html>
<head>
<title>Student Details</title>
<script>
function deleteRow(button) {
    var row = button.parentNode.parentNode;
    row.style.display = 'none'; // Hide the row from the table

    // You can also use AJAX to send a request to your server to delete the corresponding data from the database.
}
let editedRow = null;

function editRow(button) {
    // Get the row to edit
    const row = button.parentNode.parentNode;
    editedRow = row;

    // Populate the form with the row's data
    document.getElementById('editStudentId').value = row.cells[0].textContent;
    document.getElementById('editName').value = row.cells[1].textContent;
    document.getElementById('editIC').value = row.cells[2].textContent;
    document.getElementById('editPhone').value = row.cells[3].textContent;
    document.getElementById('editEmail').value = row.cells[4].textContent;
    document.getElementById('editQRCode').value = row.cells[5].textContent;

    // Display the edit form
    document.getElementById('editForm').style.display = 'block';
}

function saveRow() {
    // Get the edited values
    const studentId = document.getElementById('editStudentId').value;
    const name = document.getElementById('editName').value;
    const ic = document.getElementById('editIC').value;
    const phone = document.getElementById('editPhone').value;
    const email = document.getElementById('editEmail').value;
    const qrcode = document.getElementById('editQRCode').value;

    // Update the table with the edited values
    editedRow.cells[0].textContent = studentId;
    editedRow.cells[1].textContent = name;
    editedRow.cells[2].textContent = ic;
    editedRow.cells[3].textContent = phone;
    editedRow.cells[4].textContent = email;
    editedRow.cells[5].textContent = qrcode;

    // Hide the edit form
    document.getElementById('editForm').style.display = 'none';
}
// add student

function showAddForm() {
    document.getElementById('addForm').style.display = 'block';
}

function hideAddForm() {
    document.getElementById('addForm').style.display = 'none';
}

function addStudent() {
    // Get the values from the form
    const studentId = document.getElementById('studentId').value;
    const name = document.getElementById('name').value;
    const ic = document.getElementById('ic').value;
    const phone = document.getElementById('phone').value;
    const email = document.getElementById('email').value;
    const qrcode = document.getElementById('qrcode').value;

    // Create a new row in the table
    const table = document.querySelector('table');
    const newRow = table.insertRow(table.rows.length);

    // Insert cells with the new data
    const cell1 = newRow.insertCell(0);
    cell1.innerHTML = studentId;
    const cell2 = newRow.insertCell(1);
    cell2.innerHTML = name;
    const cell3 = newRow.insertCell(2);
    cell3.innerHTML = ic;
    const cell4 = newRow.insertCell(3);
    cell4.innerHTML = phone;
    const cell5 = newRow.insertCell(4);
    cell5.innerHTML = email;
    const cell6 = newRow.insertCell(5);
    cell6.innerHTML = `<a href="${qrcode}">QR Code Link</a>`;

    // Clear the form
    document.querySelector('form').reset();

    // Hide the add form
    hideAddForm();
}

</script>
    <style>
    table {
        margin: 0 auto;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 80%;

    }

    th, td {
        border-radius: 8px;
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }

    th {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #f5f5f5;
    }
    
    .button-container {
        display: flex;
        white-space: nowrap;
        justify-content: center;
        align-items: center;
        position: absolute;
        bottom: 10px;
        left: 50%;
        transform: translateX(-50%);
        }

    button {
        transition: background-color 0.3s ease;
        border-radius: 17px;
        text-decoration:none;
        margin-right: 5px;         
        font-size: 18px;
        background-color: #f5f5f5;
        padding: 15px 50px;
        border: none;
        outline: none;
            
    }
    button:hover{
        background-color: white;
    }

    
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Student ID</th>
            <th>Name</th>
            <th>IC Number</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>QR Code</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
        <tr>
            <td>DDWD2021/060353</td>
            <td>John Doe</td>
            <td>030603-01-1234</td>
            <td>0124279112</td>
            <td>johndoe@example.com</td>
            <td><a href="qrcode-link">QR Code Link</a></td>
            <td><button onclick="deleteRow(this)">Delete</button></td>
            <td><button onclick="editRow(this)">Edit</button></td>
        </tr>
        <tr>
            <td>DDWD2021/030401</td>
            <td>Jane Smith</td>
            <td>040234-01-1234</td>
            <td>0157848939</td>
            <td>janesmith@example.com</td>
            <td><a href="qrcode-link">QR Code Link</a></td>
            <td><button onclick="deleteRow(this)">Delete</button></td>
            <td><button onclick="editRow(this)">Edit</button></td>
        </tr>

    </table>
    <div id="editForm" style="display: none;">
        <input type="text" id="editStudentId" placeholder="Student ID">
        <input type="text" id="editName" placeholder="Name">
        <input type="text" id="editIC" placeholder="IC Number">
        <input type="text" id="editPhone" placeholder="Phone Number">
        <input type="text" id="editEmail" placeholder="Email">
        <input type="text" id="editQRCode" placeholder="QR Code Link">
        <button onclick="saveRow()">Save</button>
    </div>

    <div class="button-container">
    <button onclick="showAddForm()">Add New Student</button>
    </div>
    <div id="addForm" style="display: none;">
    <form>
        <label for="studentId">Student ID:</label>
        <input type="text" id="studentId" required>
        <br>
        <label for="name">Name:</label>
        <input type="text" id="name" required>
        <br>
        <label for="ic">IC Number:</label>
        <input type="text" id="ic" required>
        <br>
        <label for="phone">Phone Number:</label>
        <input type="text" id="phone" required>
        <br>
        <label for="email">Email:</label>
        <input type="text" id="email" required>
        <br>
        <label for="qrcode">QR Code Link:</label>
        <input type="text" id="qrcode" required>
        <br>
        <button type="button" onclick="addStudent()">Add Student</button>
    </form>
</div>

</div>
</html>