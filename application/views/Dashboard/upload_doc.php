<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('/assets/css/upload_doc.css') ?>">
</head>

<body>

    <br> <br>
    <div class="container">
        <div class="row justify-content-md-center">
            <form action="">
                <div class="col col-lg-5 mt-4">
                    <label for="formtext"><strong>Upload File</strong></label>
                    <input class="form-control" type="file" placeholder="Default input" aria-label="default input example" required>
                </div>

                <div class="col col-lg-5 mt-4">
                    <label for="formtext"><strong>Nama File</strong></label>
                    <input class="form-control" type="text" placeholder="Default input" aria-label="default input example" required>
                </div>

                <div class="col col-lg-5 mt-4">
                    <label for="formtext"><strong>Unit Kerja</strong></label>
                    <input class="form-control" type="text" placeholder="Default input" aria-label="default input example" required>
                </div>

                <div class="col col-lg-5 mt-4">
                    <label for="formtext"><strong>Komponen</strong></label>
                    <select name="jenis_surat" id="jenis_surat" required="required" class="form-select">
                        <option value="" hidden selected>
                            <p>-</p>
                        </option>
                        <option value="Perencanaan">Perencanaan</option>
                        <option value="Pengukuran">Pengukuran</option>
                        <option value="Pelaporan">Pelaporan</option>
                    </select>
                </div>

                <div class="col col-lg-5 mt-4">
                    <label for="formtext"><strong>Dokumen</strong></label>
                    <select name="jenis_surat" id="jenis_surat" required="required" class="form-select">
                        <option value="" hidden selected>
                            <p>-</p>
                        </option>
                        <option value="Perencanaan">RPJMD</option>
                        <option value="Pengukuran">Renstra</option>
                        <option value="Pelaporan">IKU</option>
                        <option value="Pelaporan">Perjanjian Kinerja</option>
                        <option value="Pelaporan">Rencana Aksi</option>
                    </select>
                </div>

                <div class="col col-lg-5 mt-4" style="margin-left:26% ;">
                    <input type="submit" class="btn btn-dark mt-4 btn-sm"></input>
                </div>






            </form>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>