<div class="content-header row">
</div>
<div class="content-body">
    <!-- users list start -->
    <section class="users-list-wrapper">
       
        <div class="users-list-table">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <!-- datatable start -->
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Mobile N°</th>
                                        <th>Branche</th>
                                        <th>Role</th>
                                        <th>CIN</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($usersList as $row) : ?>
                                        <tr>
                                            <td><?= $row['firstname'] . ' ' . $row['lastname']; ?></td>
                                            <td><?= $row['email']; ?></td>
                                            <td><?= $row['phone']; ?></td>
                                            <td><?= $row['address']; ?></td>
                                            <td>
                                                <div class="chip chip-warning mr-1">
                                                    <div class="chip-body">
                                                        <span class="chip-text"><?= $row['role']; ?></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-light-success"><?= $row['cin']; ?></span></td>
                                            <td>
                                                <div class="dropdown">
                                                    <span class="bx bx-dots-vertical-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(3px, 20px, 0px);">
                                                        <a class="dropdown-item text-primary" href="<?= base_url() ?>/users/edit/<?= $row['id']; ?>"><i class="bx bx-edit-alt mr-1 text-primary"></i> edit</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-show mr-1"></i> view Profile</a>
                                                        <a class="dropdown-item text-danger" href="javascript:void(0)" onclick="deleteRecord(<?= $row['id'] ?>)"><i class="bx bx-trash mr-1 text-danger"></i> delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                    <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>
                        <!-- datatable ends -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- users list ends -->
</div>
<script src="<?= base_url() ?>/public/app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>

<script>
    function deleteRecord(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Delete',
            confirmButtonClass: 'btn btn-primary',
            cancelButtonClass: 'btn btn-danger ml-1',
            buttonsStyling: false,
        }).then(function(result) {
            if (result.value) {
                window.location.href = "<?= base_url() ?>" + "/users/del/" + id;
            }
        })



    }
</script>