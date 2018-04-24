<a href="/employee/add">
    <button type="button" class="btn btn-primary">
        <i class="fa fa-plus" aria-hidden="true"></i> Add new Employee
    </button>
</a>
<?php
    if (isset($_SESSION['Message'])) {
        echo $_SESSION['Message'];
        unset($_SESSION['Message']);
    }
?>

<div class="row">
    <div class="col-xs-12">

        <div class="box">
            <div class="box-header">
                <h3 class="box-title">All employees</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Employee Address</th>
                            <th>Age</th>
                            <th>Position</th>
                            <th>Salary</th>
                            <th>Tax (%)</th>
                            <th>Total Salary</th>
                            <th>Controller</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        foreach ($employee as $emp) {
                            ?>
                            <tr>
                                <td scope="row"><?= $emp->firstName ?> </td>
                                <td scope="row"><?= $emp->lastName ?> </td>
                                <td><?= $emp->address ?></td>
                                <td><?= $emp->age ?></td>
                                <td><?= $emp->jobTitle ?></td>
                                <td><?= $emp->salary ?></td>
                                <td><?= $emp->tax ?></td>
                                <td><?= $emp->calcSalary() ?></td>
                                <td>
                                    <a href="/employee/edit/<?= $emp->ID?>">
                                        <button type="button" class="btn btn-primary">
                                            <i class="fa fa-edit" aria-hidden="true"></i>
                                        </button>
                                    </a>
                                    <a href="/employee/delete/<?= $emp->ID?>">
                                        <button type="button" class="btn btn-danger">
                                            <i class="fa fa-remove" aria-hidden="true"></i>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            <?php
                        }
                    ?>
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>