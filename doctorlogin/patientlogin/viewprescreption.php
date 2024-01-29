<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Prescriptions</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .container {
            width: 80%;
            margin: 20px auto;
        }

        h1 {
            background-color: #3498db;
            color: #fff;
            padding: 20px;
            margin: 0;
            font-size: 32px;
            text-align: center;
        }

        .action-buttons {
            display: flex;
            flex-direction: row; /* Display buttons horizontally */
            justify-content: space-around;
            align-items: center;
            margin-top: 20px;
        }

        .button-container {
            text-align: center;
        }

        .action-button {
            background-color: #2ecc71;
            color: #fff;
            border: none;
            padding: 15px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-bottom: 10px; /* Added margin to separate buttons */
        }

        .action-button:hover {
            background-color: #27ae60;
        }

        .button-text {
            font-size: 14px;
            margin-top: 5px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>View Prescriptions</h1>

    <div class="action-buttons">
        <div class="button-container">
            <button onclick="openPDF1()" class="action-button">Prescription 1</button>
            <p class="button-text">Dr. Satish Salunkhe (Headache)</p>
        </div>

        <div class="button-container">
            <button onclick="openPDF2()" class="action-button">Prescription 2</button>
            <p class="button-text">Dr. Suraj Shirsath (Headache)</p>
        </div>

        <div class="button-container">
            <button onclick="openPDF3()" class="action-button">Prescription 3</button>
            <p class="button-text">Dr. Nilesh Mhaskar (Headache)</p>
        </div>

        <div class="button-container">
            <button onclick="openPDF4()" class="action-button">Prescription 4</button>
            <p class="button-text">Dr. Surendra Patil (Headache)</p>
        </div>

        <div class="button-container">
            <button onclick="openPDF5()" class="action-button">Prescription 5</button>
            <p class="button-text">Dr. Chudaman Patil (Headache)</p>
        </div>
    </div>
</div>

<script>
    function openPDF1() {
        window.open('prescription/prescription1.pdf', '_blank');
    }

    function openPDF2() {
        window.open('prescription/prescription2.pdf', '_blank');
    }

    function openPDF3() {
        window.open('prescription/prescription3.pdf', '_blank');
    }

    function openPDF4() {
        window.open('prescription/prescription4.pdf', '_blank');
    }

    function openPDF5() {
        window.open('prescription/prescription5.pdf', '_blank');
    }
</script>

</body>
</html>
