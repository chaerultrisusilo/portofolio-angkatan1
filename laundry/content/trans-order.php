<?php
$query = mysqli_query($koneksi, "SELECT trans_order.*, customers.customers_name FROM trans_order LEFT JOIN customers ON customers.id = trans_order.id_customers WHERE deleted_at = 0 ORDER BY trans_order.id Desc");
$row = mysqli_fetch_all($query, MYSQLI_ASSOC);

if (isset($_GET['delate'])) {
    $id = $_GET['delate'];
    $delete = mysqli_query($koneksi, "UPDATE trans_order SET deleted_at = 1 WHERE id = '$id'");
    header("location:?page=trans-order&notif=success");
}
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Data User</h3>
            </div>
            <div class="card-body">
                <div align="right" class="mb-3 mt-3">
                    <a href="?page=add-trans-order" class="btn btn-primary">Create Data Order</a>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Trans Code</th>
                            <th>Customer Name</th>
                            <th>Statusl</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($row as $rows) : ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $rows['trans_code'] ?></td>
                                <td><?php echo $rows['customer_name'] ?></td>
                                <td><?php echo $rows['status'] ?></td>
                                <td>
                                    <a href="?page=add-service&detail=<?php echo $rows['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="?page=service&delate=<?php echo $rows['id'] ?>"
                                        onclick="return confirm('Are you sure??')" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>