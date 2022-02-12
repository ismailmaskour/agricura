<div class="content-header row">
</div>
<div class="content-body">
    <!-- users edit start -->
    <section class="users-edit">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <ul class="nav nav-tabs mb-2" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center active" id="account-tab" data-toggle="tab" href="#account" aria-controls="account" role="tab" aria-selected="true">
                                <i class="bx bx-user mr-25"></i><span class="d-none d-sm-block">Account</span>
                            </a>
                        </li>

                    </ul>
                    <?php if (isset($validation)) : ?>
                        <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
                    <?php endif; ?>
                    <form action="<?= base_url() ?>/users/edit/<?= $editedUser['id'] ?>" method="POST">
                        <div class="tab-content">
                            <div class="tab-pane active fade show" id="account" aria-labelledby="account-tab" role="tabpanel">
                                <!-- users edit media object start -->
                                <div class="media mb-2">
                                    <a class="mr-2" href="#">
                                        <img src="<?= base_url() ?>/public/app-assets/images/portrait/small/avatar-s-26.jpg" alt="users avatar" class="users-avatar-shadow rounded-circle" height="64" width="64">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Avatar</h4>
                                        <div class="col-12 px-0 d-flex">
                                            <a href="#" class="btn btn-sm btn-primary mr-25">Change</a>
                                            <a href="#" class="btn btn-sm btn-light-secondary">Reset</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- users edit media object ends -->
                                <!-- users edit account form start -->
                                <form novalidate>
                                    <div class="row">

                                        <div class="col-12 col-sm-6">
                                            <div class="mb-1">
                                                <fieldset class="form-label-group form-group position-relative has-icon-left">
                                                    <input required type="text" class="form-control" value="<?= $editedUser['firstname'] ?>" name="firstname" placeholder="First Name">
                                                    <div class="form-control-position">
                                                        <i class="bx bx-user"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="mb-1">
                                                <fieldset class="form-label-group form-group position-relative has-icon-left">
                                                    <input type="text" class="form-control" value="<?= $editedUser['lastname'] ?>" name="lastname" placeholder="Last Name">
                                                    <div class="form-control-position">
                                                        <i class="bx bx-user"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="mb-1">
                                                <fieldset class="form-label-group form-group position-relative has-icon-left">
                                                    <input type="text" class="form-control" value="<?= $editedUser['adresse'] ?>" name="adresse" placeholder="Adress">
                                                    <div class="form-control-position">
                                                        <i class="bx bx-map"></i>
                                                    </div>

                                                </fieldset>
                                            </div>
                                            <div class="mb-1">
                                                <fieldset class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <label class="input-group-text" for="inputGroupSelect01">Branche</label>
                                                        </div>
                                                        <select class="form-control" id="inputGroupSelect01" name="brancheId">
                                                            <option value="">Choose...</option>
                                                            <?php foreach ($branches as $branch) : ?>
                                                                <option <?php if ($editedUser['brancheId'] == $branch['id']) : ?>selected<?php endif; ?> value="<?= $branch['id']; ?>"><?= $branch['name']; ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="mb-1">
                                                <fieldset class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <label class="input-group-text" for="roleSelect">Role</label>
                                                        </div>
                                                        <select class="form-control" id="roleSelect" name="role" onchange="onRoleChange()">
                                                            <option value="">Choose...</option>
                                                            <?php foreach ($roles as $role) : ?>
                                                                <option <?php if ($editedUser['role'] == $role['code']) : ?>selected<?php endif; ?> value="<?= $role['code']; ?>"><?= $role['title']; ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </fieldset>
                                            </div>

                                            <!-- ---------------------------- Login Info If role manager or admin ------------------------------- -->
                                            <div class="card-content" id="loginInfoSection" style="display: none;">
                                                <div class="card-body">
                                                    <form class="form form-horizontal">
                                                        <div class="form-body">
                                                            <div class="row">
                                                                <div class="col-md-8 form-group">
                                                                    <div class="position-relative has-icon-left">
                                                                        <input type="email" id="email-icon" class="form-control" value="<?= $editedUser['email'] ?>" name="email" placeholder="Email">
                                                                        <div class="form-control-position">
                                                                            <i class="bx bx-mail-send"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8 form-group">
                                                                    <div class="position-relative has-icon-left">
                                                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                                                        <div class="form-control-position">
                                                                            <i class="bx bx-lock"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8 form-group">
                                                                    <div class="position-relative has-icon-left">
                                                                        <input type="password" class="form-control" name="cpassword" placeholder="Confirm Password">
                                                                        <div class="form-control-position">
                                                                            <i class="bx bx-lock"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- ------------------------------------------------------------------------------------------------ -->

                                        </div>

                                        <div class="col-12 col-sm-6">
                                            <div class="mb-1">
                                                <fieldset class="form-label-group form-group position-relative has-icon-left">
                                                    <input type="text" class="form-control" value="<?= $editedUser['cin'] ?>" name="cin" placeholder="CIN">
                                                    <div class="form-control-position">
                                                        <i class="bx bx-id-card"></i>
                                                    </div>

                                                </fieldset>
                                            </div>
                                            <div class="mb-1">
                                                <fieldset class="form-label-group form-group position-relative has-icon-left">
                                                    <input type="text" class="form-control" value="<?= $editedUser['mobile_no'] ?>" name="mobile_no" placeholder="Mobile Number">
                                                    <div class="form-control-position">
                                                        <i class="bx bx-mobile"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="mb-1">
                                                <fieldset class="form-group position-relative has-icon-left">
                                                    <input type="text" class="form-control pickadate" value="<?= $editedUser['created_at'] ?>" name="dateInscription" placeholder="Subscription Date">
                                                    <div class="form-control-position">
                                                        <i class='bx bx-calendar'></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="mb-1">
                                                <fieldset class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <label class="input-group-text" for="inputGroupSelect01">Gender</label>
                                                        </div>
                                                        <select class="form-control" name="gender" id="inputGroupSelect01">
                                                            <option value="">Choose...</option>
                                                            <option <?php if ($editedUser['sexe'] == "Feminin") : ?>selected<?php endif; ?> value="Feminin">Feminin</option>
                                                            <option <?php if ($editedUser['sexe'] == "Masculin") : ?>selected<?php endif; ?> value="Masculin">Masculin</option>
                                                        </select>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="mb-1">
                                                <fieldset class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <label class="input-group-text" for="inputGroupSelect01">Default Profile Languages</label>
                                                        </div>
                                                        <select class="form-control" name="language" id="inputGroupSelect01">
                                                            <option value="">Choose...</option>
                                                            <option <?php if ($editedUser['language'] == "EN") : ?>selected<?php endif; ?> value="EN">English</option>
                                                            <option <?php if ($editedUser['language'] == "FR") : ?>selected<?php endif; ?> value="FR">French</option>
                                                        </select>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                            <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save</button>
                                        </div>
                                    </div>
                                </form>
                                <!-- users edit account form ends -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- users edit ends -->
</div>

<script>
    function onRoleChange() {

        var loginInfoSection = document.getElementById('loginInfoSection');
        var roleType = document.getElementById('roleSelect').value;

        if (roleType == 'ADM' || roleType == "RSP") {
            document.getElementById('loginInfoSection').style.display = "block";
        } else {
            document.getElementById('loginInfoSection').style.display = "none";
        }
    }

    <?php if ($editedUser['role'] == "ADM" || $editedUser['role'] == "RSP") { ?>
        document.getElementById('loginInfoSection').style.display = "block";
    <?php } else { ?>
        document.getElementById('loginInfoSection').style.display = "none";
    <?php } ?>
</script>