<?php include 'check_session.php' ?>
<?php include 'header.php' ?>
<?php include 'side_menu.php' ?>

<div class="content-body">
    <div class="container-fluid">
        <!-- row -->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Admission List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table header-border table-responsive-sm">
                            <thead>
                                <tr>
                                    <th style="min-width:60px">S No.</th>
                                    <th style="min-width:130px">Student Name</th>
                                    <th>Age</th>
                                    <th>Class/Grade</th>
                                    <th>Mobile No.</th>
                                   
                                    <th  style="min-width:150px">Time Slot</th>
                                    <th  style="min-width:150px">Booking Date</th>
                                    <th>Email</th>
                                    <th style="min-width:150px">Guardian Name</th>
                                    <th style="min-width:160px">Guardian Mobile</th>
                                    <th>Address</th>
                                    <th>Message</th>
                                    <th style="min-width:150px">Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="tableBody">
                                <?php
                                    include('../db_con.php');
                                    $i = 1;
                                    $sql = "SELECT * FROM enrollment_form ORDER BY created_at DESC";
                                    $res = mysqli_query($con, $sql);
                                    while ($row = mysqli_fetch_assoc($res)) {
                                ?>
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo htmlspecialchars($row['full_name']); ?></td>
                                    <td><?php echo htmlspecialchars($row['student_age']); ?></td>
                                    <td><?php echo htmlspecialchars($row['class_grade']); ?></td>
                                    <td><?php echo htmlspecialchars($row['mobile']); ?></td>
                                    <td><?php echo htmlspecialchars($row['time_slot']); ?></td>
                                    <td><?php echo htmlspecialchars($row['booking_date']); ?></td>
                                    <td><?php echo htmlspecialchars($row['email']); ?></td>
                                    <td><?php echo htmlspecialchars($row['guardian_name']); ?></td>
                                    <td><?php echo htmlspecialchars($row['guardian_mobile']); ?></td>
                                    <td><?php echo htmlspecialchars($row['address']); ?></td>
                                    <td><?php echo htmlspecialchars($row['message']); ?></td>
                                    <td><?php echo date("d M Y h:i A", strtotime($row['created_at'])); ?></td>
                                    <td>
                                        <form method="POST" action="admission_dlt.php">
                                            <input type="hidden" name="user_id" value="<?php echo $row['id']; ?>">
                                            <button type="submit" class="btn btn-danger shadow btn-xs sharp"
                                                name="delete"
                                                onclick="return confirm('Are you sure you want to delete this entry?')">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php' ?>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const rowsPerPage = 7;
    const rows = document.querySelectorAll('#tableBody tr');
    const totalPages = Math.ceil(rows.length / rowsPerPage);
    let currentPage = 1;

    function showPage(page) {
        rows.forEach((row, index) => {
            row.style.display = (index >= (page - 1) * rowsPerPage && index < page * rowsPerPage) ?
                'table-row' : 'none';
        });
        updateButtons(page);
    }

    function updateButtons(page) {
        document.getElementById('pageNumbers').textContent = `Page ${page} of ${totalPages}`;
        document.getElementById('prev').disabled = page === 1;
        document.getElementById('next').disabled = page === totalPages;
    }

    document.getElementById('prev').addEventListener('click', function() {
        if (currentPage > 1) {
            currentPage--;
            showPage(currentPage);
        }
    });

    document.getElementById('next').addEventListener('click', function() {
        if (currentPage < totalPages) {
            currentPage++;
            showPage(currentPage);
        }
    });

    showPage(1);
});
</script>