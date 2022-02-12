<div class="content-header row">
</div>
<div class="content-body">
    <!-- users list start -->
    <section class="users-list-wrapper">
        <div class="users-list-filter px-1">
            <form>
                <div class="row border rounded py-2 mb-2">
                    <div class="col-12 col-sm-6 col-lg-3">
                        <label for="users-list-verified">Branche</label>
                        <fieldset class="form-group">
                            <select class="form-control" id="users-list-verified">
                                <option value="">Any</option>
                                <option value="Casablanca">Casablanca</option>
                                <option value="Rabat">Rabat</option>
                            </select>
                        </fieldset>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <label for="users-list-role">Role</label>
                        <fieldset class="form-group">
                            <select class="form-control" id="users-list-role">
                                <option value="">Any</option>
                                <option value="Responsible">Responsible</option>
                                <option value="Administrator">Administrator</option>
                            </select>
                        </fieldset>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <label for="users-list-status">Status</label>
                        <fieldset class="form-group">
                            <select class="form-control" id="users-list-status">
                                <option value="">Any</option>
                                <option value="Active">Active</option>
                                <option value="Disabled">Disabled</option>
                            </select>
                        </fieldset>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 d-flex align-items-center">
                        <button type="reset" class="btn btn-primary btn-block glow users-list-clear mb-0">Clear</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="users-list-table">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <!-- datatable start -->
                        <div class="table-responsive">
                            <table id="users-list-datatable" class="table">
                                <thead>
                                    <tr>
                                        <th></th>
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
                                            <td>
                                                <div class="avatar mr-1">
                                                    <img src="<?= base_url() ?>/public/app-assets/images/portrait/small/avatar-s-20.jpg" alt="avtar img holder" width="32" height="32">
                                                    <span class="avatar-status-online"></span>
                                                </div>
                                            </td>
                                            <td><?= $row['firstname'] . ' ' . $row['lastname']; ?></td>
                                            <td><?= $row['email']; ?></td>
                                            <td><?= $row['mobile_no']; ?></td>
                                            <td><?= $row['adresse']; ?></td>
                                            <td>
                                                <div class="chip chip-warning mr-1">
                                                    <div class="chip-body">
                                                        <span class="chip-text"><?= $row['jobTitle']; ?></span>
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