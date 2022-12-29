<div class="pengukuran-kinerja-container">
    <div class="main-content-pengukuran-kinerja">
        <div class="pilih-triwulan-container">
            <a class="btn-triwulan-1 pilih-btn-triwulan" type="button">
                Triwulan 1
            </a>
            <a class="btn-triwulan-2 pilih-btn-triwulan" type="button">
                Triwulan 2
            </a>
            <a class="btn-triwulan-3 pilih-btn-triwulan" type="button">
                Triwulan 3
            </a>
            <a class="btn-triwulan-4 pilih-btn-triwulan" type="button">
                Triwulan 4
            </a>
        </div>

        <!-- table twriwulan 1 -->
        <table class="table-pengukuran-kinerja triwulan-1" id="triwulan-1">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>OPD</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (!empty($triwulan1)) {
                    $i = 0;
                    foreach ($triwulan1 as $opd) {
                        $i++;
                ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $opd->opd; ?></td>
                            <td>
                                <a class="btn-triwulan triwulan-1-modal" id="t1" data-opd="<?= $opd->opd ?>" data-id="<?= $opd->id ?>" type="button">
                                    Input Data Triwulan 1
                                </a>
                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>

        <!-- table twriwulan 2 -->
        <table class="table-pengukuran-kinerja triwulan-2" id="triwulan-2">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>OPD</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (!empty($triwulan2)) {
                    $i = 0;
                    foreach ($triwulan2 as $opd) {
                        $i++;
                ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $opd->opd; ?></td>
                            <td>
                                <a class="btn-triwulan triwulan-2-modal" id="t2" data-opd="<?= $opd->opd ?>" data-id="<?= $opd->id ?>" type="button">
                                    Input Data Triwulan 2
                                </a>
                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>

        <!-- table twriwulan 3 -->
        <table class="table-pengukuran-kinerja triwulan-3" id="triwulan-3">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>OPD</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (!empty($triwulan3)) {
                    $i = 0;
                    foreach ($triwulan3 as $opd) {
                        $i++;
                ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $opd->opd; ?></td>
                            <td>
                                <a class="btn-triwulan triwulan-3-modal" id="t3" data-opd="<?= $opd->opd ?>" data-id="<?= $opd->id ?>" type="button">
                                    Input Data Triwulan 3
                                </a>
                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>

        <!-- table twriwulan 4 -->
        <table class="table-pengukuran-kinerja triwulan-4" id="triwulan-4">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>OPD</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (!empty($triwulan4)) {
                    $i = 0;
                    foreach ($triwulan4 as $opd) {
                        $i++;
                ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $opd->opd; ?></td>
                            <td>
                                <a class="btn-triwulan triwulan-4-modal" id="t4" data-opd="<?= $opd->opd ?>" data-id="<?= $opd->id ?>" type="button">
                                    Input Data Triwulan 4
                                </a>
                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- modal triwulan 1 -->
    <div class="modal-triwulan-1-container modal">
        <div class="modal-triwulan" id="modal_t1">
        </div>
    </div>

    <!-- modal triwulan 2 -->
    <div class="modal-triwulan-2-container modal">
        <div class="modal-triwulan" id="modal_t2">
        </div>
    </div>

    <!-- modal triwulan 3 -->
    <div class="modal-triwulan-3-container modal">
        <div class="modal-triwulan" id="modal_t3">
        </div>
    </div>

    <!-- modal triwulan 4 -->
    <div class="modal-triwulan-4-container modal">
        <div class="modal-triwulan" id="modal_t4">
        </div>
    </div>
</div>