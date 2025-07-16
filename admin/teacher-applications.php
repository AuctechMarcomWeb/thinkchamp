<?php include 'check_session.php' ?>
<?php include 'header.php' ?>
<?php include 'side_menu.php' ?>

<div class="content-body">
    <div class="container-fluid">
        <!-- row -->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Teacher Applications</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table header-border table-responsive-sm">
                            <thead>
                                <tr>
                                    <th>S No.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Education</th>
                                    <th>Experience</th>
                                    <th>Subjects</th>
                                    <th>Skills</th>
                                    <th>Address</th>
                                    <th>Why Hire</th>
                                    <th>CV</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="tableBody">
                                <?php
                                    include('../db_con.php');
                                    $i = 1;
                                    $sql = "SELECT * FROM teacher_applications ORDER BY added_on DESC";
                                    $res = mysqli_query($con, $sql);
                                    while ($row = mysqli_fetch_assoc($res)) {
                                        $cv_file = $row['cv_file'];
                                ?>
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo htmlspecialchars($row['name']); ?></td>
                                    <td><?php echo htmlspecialchars($row['email']); ?></td>
                                    <td><?php echo htmlspecialchars($row['phone']); ?></td>
                                    <td><?php echo htmlspecialchars($row['education']); ?></td>
                                    <td><?php echo htmlspecialchars($row['experience']); ?> yr</td>
                                    <td><?php echo htmlspecialchars($row['subjects']); ?></td>
                                    <td><?php echo htmlspecialchars($row['skills']); ?></td>
                                    <td><?php echo htmlspecialchars($row['address']); ?></td>
                                    <td><?php echo htmlspecialchars($row['message']); ?></td>
                                    <td>
                                        <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#cvModal<?php echo $row['id']; ?>">
                                            View CV
                                        </button>
                                    </td>
                                    <td><?php echo date("d M Y h:i A", strtotime($row['added_on'])); ?></td>
                                    <td>
                                        <form method="POST" action="teacher_dlt.php">
                                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                            <button type="submit" class="btn btn-danger btn-sm" name="delete"
                                                onclick="return confirm('Are you sure?')">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>

                                <!-- Bootstrap CV Modal -->
                                <div class="modal fade" id="cvModal<?php echo $row['id']; ?>" tabindex="-1"
                                    aria-labelledby="cvModalLabel<?php echo $row['id']; ?>" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="cvModalLabel<?php echo $row['id']; ?>">CV
                                                    Preview</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body text-center">
                                                <?php
                                                    $cv_path = "teacher_cv/" . $cv_file;
                                                    $ext = strtolower(pathinfo($cv_file, PATHINFO_EXTENSION));
                                                    if (in_array($ext, ['jpg', 'jpeg', 'png'])) {
                                                        echo '<img src="' . $cv_path . '" class="img-fluid" alt="CV Image">';
                                                    } else {
                                                        echo '<iframe src="' . $cv_path . '" width="100%" height="500px"></iframe>';
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

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