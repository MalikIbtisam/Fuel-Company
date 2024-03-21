<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fuel Quote History</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body class="history-body">
    <?php include 'header.php'; ?>  
    <div class="container">
        <h2>Fuel Quote History</h2>
        <table id="quoteHistoryTable">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Gallons Requested</th>
                    <th>Delivery Address</th>
                    <th>Delivery Date</th>
                    <th>Suggested Price</th>
                    <th>Total Amount Due</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var dummyData = [
                { date: '2024-01-01', gallons: 100, address: '123 Maple Street', deliveryDate: '2024-01-15', price: '$200.00', total: '$232.00' },
            ];

            var tbody = document.querySelector('#quoteHistoryTable tbody');
            dummyData.forEach(function (entry) {
                var tr = document.createElement('tr');
                tr.innerHTML = '<td>' + entry.date + '</td>' +
                    '<td>' + entry.gallons + '</td>' +
                    '<td>' + entry.address + '</td>' +
                    '<td>' + entry.deliveryDate + '</td>' +
                    '<td>' + entry.price + '</td>' +
                    '<td>' + entry.total + '</td>';
                tbody.appendChild(tr);
            });
        });
    </script>

</body>
</html>