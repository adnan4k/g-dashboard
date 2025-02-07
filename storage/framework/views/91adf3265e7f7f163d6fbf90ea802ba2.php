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
            padding: 8px;
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
        <?php $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($booking->id); ?></td>
            <td><?php echo e($booking->name); ?></td>
            <td><?php echo e($booking->email); ?></td>
            <td><?php echo e($booking->date); ?></td>
            <td><?php echo e($booking->members); ?></td>
            <td><?php echo e($booking->place); ?></td>
            <td><?php echo e($booking->TourCode); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
</body>
</html><?php /**PATH C:\Users\Administrator\Desktop\apps\t-dashboard\resources\views/pdf/bookings.blade.php ENDPATH**/ ?>