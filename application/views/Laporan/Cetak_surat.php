<!DOCTYPE html>
<html lang="en">
<head>
    <title>Surat Ijin</title>
    <link type="text/css" media="screen" rel="stylesheet" href="<?= base_url()?>/assets/plugins/bootstrap/style.php">
</head>
<body>
    <div class="container-fluid">
        <table class="mb-0" align="center" border="">
            <tr>
                <td width="90">
                    <img src="<?= base_url(); ?>uploads/Picture1.png" width='90' height="110" class="rounded float-left" alt="...">
                </td>
                <td>
                    <h4 class="text-center mb-0 mt-0">PENGADILAN NEGERI JAKARTA UTARA KELAS I A KHUSUS</h4>
                    <p class="text-center mb-0 mt-0">Berkantor sementara di Jalan Gajah Mada No. 17 Jakarta Pusat</p>
                    <p class="text-center mb-0 mt-0">( eks. Gedung Pengadilan Negeri Jakarta Pusat )
                        <br>Website : www.pn-jakartautara.go.id
                        </p>
                </td>
            </tr>
        </table>
        <hr class="mt-1" style="border-top: 3px double #8c8b8b;">
                <table border="0">
                    <tr>
                        <td width="300">
                            <?=$data->id_cuti_tahunan?>
                        </td>
                        <td>
                        <p style="font" class="mt-0">
                            ANAK LAMPIRAN 1.c <br class="mb-0">
                            PERATURAN BADAN KEPEGAWAIAN NEGARA <br class="mb-0"> 
                            REPUBLIK INDONESIA <br class="mb-0">
                            NOMOR 24 TAHUN 2017 <br class="mb-0">
                            TENTANG <br class="mb-0">
                            TATA CARA PEMBERIAN CUTI PEGAWAI NEGERI SIPIL
                        </p>
                            <hr class="mt-0 mb-0" style="border-top:solid 3px #8c8b8b;">
                        </td>
                    </tr>
                </table>
                <br>
                <p class="text-right">Jakarta, <?= date_indo($data->tgl_pengajuan);?></p>
            </div>
        </div>
                <h4 class="text-center"><u>IZIN SEMENTARA PELAKSANAAN CUTI  TAHUNAN</u></h4>
                <h5 class="text-center">NOMOR  :  W10-U4 /<small style="color:white">000000000</small>/ KP.05.2 / <?=date('m')?> / <?=date('Y')?></h5>
                <br>
        <br>
    <div class="row">
        <ol>
        <li>Diberikan izin sementara untuk melaksanakan cuti tahunan, kepada Pegawai Negeri Sipil :</li>
            <table align="">
                <tr class="">
                    <td width="170">Nama</td>
                    <td>:</td>
                    <td width="210"><?= $data->nama_lengkap?></td>
                </tr>
                <tr>
                    <td>NIP</td>
                    <td>:</td>
                    <td><?= $data->nip?></td>
                </tr>
                <tr>
                    <td>Pangkat/Gol</td>
                    <td>:</td>
                    <td><?= $data->nama_golongan?></td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td>:</td>
                    <td><?= $data->nama_jabatan?></td>
                </tr>
            </table>
        <p>Selama <?= $data->jml_hari; ?> hari, mulai tanggal <?= date_indo($data->tgl_mulai);?> dengan ketentuan sebagai berikut : </p> 
            <table border="0" align="center" width="450">
                <tr>
                    <td>a.  Sebelum menjalankan Cuti Tahunan wajib menyerahkan pekerjaan kepada atasan langsungnya.</td>
                </tr>
                <tr>
                    <td>b.	Setelah selesai menjalankan Cuti Tahunan wajib melaporkan diri kepada atasan langsungnya dan bekerja kembali sebagaimana biasa.</td>
                </tr>
            </table>
        <br>
        <li>Demikian Surat Izin Cuti Tahunan ini dibuat untuk dapat dipergunakan sebagaimana mestinya.</li>
    </ol>  
    </div>
            <table>
                <tr>
                    <td width="300">

                    </td>
                    <td>
                    <p class="text-center">Ketua,</p>
                        <br>
                        <br>
                        <br>
                        <p class="text-center mb-0"><b><u>PUJI HARIAN, S.H., M.Hum </u></b></p>
                        <p class="text-center mt-0 mb-0">NIP. 19650115 199212 1 001</p>
                    </td>
                </tr>
            </table>
            
        </div>
    </div>
    <br>
    
    <p>Tembusan :</p>
    <ol>
        <li>Direktur Jenderal Peradilan Umum;</li>
        <li>Kepala Biro Kepegawaian Mahkamah Agung;</li>
        <li>Ketua Pengadilan Tinggi Jakarta;</li>
    </ol>
</div>
</body>
</html>`