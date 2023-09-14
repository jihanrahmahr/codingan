<?php
include "header.php";
$query = mysqli_query($conn, "SELECT * from nilai_kekeruhan");
?>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tour Guide</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="icon" type="image/png" href="assets/turbiditymeter.png" />
    <link rel="stylesheet" href="/css/style.css"  />
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</head>

<div class="container card-container">
    <h5 class="mt-3 text-center">Data Turbidinity</h5>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>No</th>
                <th>Waktu</th>
                <th>Nilai Kekeruhan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            while ($data = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $data['waktu']; ?></td>
                    <td><?php echo $data['kekeruhan']; ?></td>
                    
                </tr>
            <?php
                $no++;
            }
            ?>
        </tbody>
    </table>
</div>
</body>
<script src="assets/js/bootstrap.min.js"></script>

