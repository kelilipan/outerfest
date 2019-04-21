<div class="alert alert-danger">
    <b>Mohon selesaikan proses pembayaran.</b>
</div>
<div class="alert alert-success">
    <div>
        Transfer sebesar <span id="price"><b>Rp. 50.</b><b class="text-dark bg-success"><?= sprintf("%03d", (int)$loggedin['id_peserta'] % 1000) ?></b><b>,-</b></span>
        <br>Ke rekening
        <li style="margin-top:1em;">Mandiri</li>
        A.n : santoso <br>
        No.Rekening : 69696969
        <li style="margin-top:1em;">BNI</li>
        A.n : santoso <br>
        No.Rekening : 69696969
        <br><br>
        Kemudian Lakukan konfrimasi dengan mengunggah bukti pembayaran pada form dibawah
    </div>
</div>
<form class="form" action="#" method="POST">
    <!-- <p>Kartu Pelajar/Mahasiswa </p> -->
    <div class="form-group">
        <label for="file" class="sr-only">File</label>
        <div class="input-group">
            <input type="text" name="bukti" class="form-control" placeholder="Upload Bukti Pembayaran" readonly>
            <span class="input-group-btn">
                <div class="btn btn-light custom-file-uploader">
                    <input type="file" onchange="this.form.bukti.value = this.files.length ? this.files[0].name : ''" />
                    Select a file
                </div>
            </span>
        </div>
    </div>
    <button type="submit" class="btn event btn-<?= $eventName ?>">Simpan</button>
</form>
<br>