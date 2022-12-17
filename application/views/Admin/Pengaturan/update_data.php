<div class="user-opd-container">
    <div class="main-content-user-opd">
        <table class="table-user-opd">
            <thead>
                <tr>
                    <th>User Name</th>
                    <th>Update Data</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>
                        <ol>
                            <?php foreach ($users as $u) : ?>
                                <li>
                                    <a href="<?php echo base_url() . "Admin_sakip_sulut/show_user_id/" . $u->user_id; ?>"><button class="btn-edit-user"><?php echo $u->user_name; ?></button> </a>

                                </li>
                            <?php endforeach; ?>
                        </ol>
                    </td>

                    <td>
                        <?php foreach ($userID as $user) : ?>

                            <form action="<?= base_url('admin_sakip_sulut/update_data'); ?>" class="form-edit-user" method="POST">
                                <h3>Edit User</h3>

                                <!-- <label id="hide">Id :</label> -->
                                <input type="hidden" id="user_id" name="user_id" value="<?php echo $user->user_id; ?>" required>

                                <label for="unit-kerja-modal">Unit Kerja</label>
                                <input name="user_name" type="text" id="user_name" value="<?php echo $user->user_name; ?>" required>

                                <label for="email-modal">Email</label>
                                <input name="user_email" type="text" id="user_email" value="<?php echo $user->user_email; ?>" required>

                                <label for="Role-user">Pilih Role</label>
                                <select name="Jenis_user" id="Jenis_user" role="radiogroup" required>
                                    <?php foreach ($jenis_u as $value) : ?>
                                        <option role="radio" value="" hidden>Pilih Role</option>
                                        <option role="radio" value="<?= $value->name ?>"><?= $value->name ?></option>
                                    <?php endforeach ?>
                                </select>

                                <button type="submit" id="btn-edit-user-modal" class="btn-edit-user-modal">Edit</button>
                                <!-- <input type="submit" id="submit" name="dsubmit" value="Edit" class="btn-edit-user-modal"> -->
                                <i class="fa-solid fa-circle-xmark modal-close"></i>
                            </form>

                        <?php endforeach; ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>