<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Booking Data</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        /* Removed width: 100% from th and td to let columns auto-adjust */
        table, th, td {
            border: 1px solid #000;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>
<h2>Booking Data Report</h2>
<table>
    <thead>
        <tr>
            <th>Booking ID</th>
            <th>Customer Name</th>
            <th>Email</th>
            <th>Booking Date</th>
            <th>People Count</th>
            <th>Place</th>
            <th>Tour Code</th>
        </tr>
    </thead>
    <tbody>
        @foreach($bookings as $booking)
        <tr>
            <td>{{ $booking->id }}</td>
            <td>{{ $booking->name }}</td>
            <td>{{ $booking->email }}</td>
            <td>{{ $booking->date }}</td>
            <td>{{ $booking->members }}</td>
            <td>{{ $booking->place }}</td>
            <td>{{ $booking->TourCode }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>