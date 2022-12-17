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

                    <?php foreach ($userID as $user) : ?>
                        <td>
                            <form action="<?= base_url('admin_sakip_sulut/update_data'); ?>" class="form-edit-user" method="POST">
                                <h3>Edit data <?php echo $user->user_name; ?></h3>

                                <!-- hidden value -->
                                <input type="hidden" id="user_id" name="user_id" value="<?php echo $user->user_id; ?>" required>
                                <input type="hidden" name="user_status" id="user_status" value="<?php echo $user->user_status; ?>">
                                <!-- .. -->
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
                            </form>
                        </td>
                    <?php endforeach; ?>
                </tr>
            </tbody>
        </table>
    </div>
</div>