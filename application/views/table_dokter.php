<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Dokter</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <style>
        thead{
            background-color:#74b9ff;
            color: white;
        }
        .badge{
            background-color:#74b9ff;
            color: white;
        }
        .page-item.active .page-link {
            background-color: lightgrey !important;
            border: 1px solid black;
        }
        .page-link {
            color: black !important;
        }
    </style>
</head>
<body>
    <div class="container mt-5 mb-3">
        <div class="col">
            <h3 class="text-center">Daftar Dokter</h3>

            <table class="table mt-5 table-striped table-hover datadokter" style="width: 100%">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">NAMA</th>
                        <th class="text-center" scope="col">SPESIALIS</th>
                        <th class="text-center" scope="col">WAKTU</th>
                        <th class="text-center" scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($dokter as $dok) : ?>
                    <tr>
                        <td class="text-center"><?php echo $dok['nama'] ?></td>
                        <td class="text-center"><?php echo $dok['spesialis'] ?></td>
                        <td class="text-center">
                            <?php echo $dok['waktu'] ?>
                        </td>
                        <td class="text-center">
                            <a href="<?= site_url(); ?>/user/prebooking/<?= $dok['id'] ?>" class="badge  float-center" onclick="">BOOK</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                </tfoot>
            </table>
    


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.datadokter').DataTable({
                ordering: false
            })
        });
    </script>
</body>
</html>