<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link type="text/css" media="screen" rel="stylesheet" href="<?= base_url()?>/assets/plugins/bootstrap/style.php">
    <style>
        body{
            margin-top: -5%;
        }        
        table{
            border-collapse: collapse;
            font-size:12px;
        }
        .check {
            display: inline-block;
            transform: rotate(45deg);
            height: var(--height);
            width: var(--width);
            border-bottom: var(--borderWidth) solid var(--borderColor);
            border-right: var(--borderWidth) solid var(--borderColor);
        }
    </style>
</head>
<body>
    <table border="">
        <tr>
            <td width="300"> </td>
            <td  width="100%">
            <p>LAMPIRAN II : SURAT EDARAN SEKERTARIS MAHKAMAH AGUNG REPUBLIK INDONESIA <br>
            NOMOR 13 TAHUN <?= date("Y"); ?></p> 
            </td>
        </tr>
        <tr style="margin-top:0">
            <td width="120"> </td>
            <td  width="180">
            Jakarta, <?= date_indo($datauser->tgl_pengajuan);?> <br>
            Yth. Bapak Ketua Pengadilan Negeri Jakarta Utara <br>
            Di <br>
            Jakarta
            <br>
            </td>
        </tr>
    </table>
    <div class="row">
        <div class="col-12">
            <h5 class="text-center mb-0"> <u> FORMULIR PERMINTAAN DAN PEMBERIAN CUTI</u></h5>
            <?php
                $tanggal = $datauser->tgl_pengajuan;
                $split 	 = explode('-', $tanggal);
            ?>
            <p class="text-center mt-0">Nomor : W10-U4/<small style="color:white">000000000</small>/KP.05.2/<?= $split[1]; ?>/<?= $split[0]; ?></p>
        </div>
    </div>
            <table border="1">
                <!-- data Pgawai -->
                <tr>
                    <td colspan="4">I. DATA PEGAWAI</td>
                </tr>
                <tr>
                    <td width="100">NAMA</td>
                    <td width="180"><?=$datauser->nama_lengkap;?></td>
                    <td width="100">NIP</td>
                    <td width="150"><?=$datauser->nip;?></td>
                </tr>
                <tr>
                    <td>JABATAN</td>
                    <td><?=$datauser->nama_jabatan;?></td>
                    <td>GOL RUANG</td>
                    <td><?=$datauser->nama_golongan;?></td>
                </tr>
                <tr>
                    <td>UNIT KERJA</td>
                    <td><?=$datauser->nama_unit_kerja;?></td>
                    <td>MASA KERJA</td>
                    <td>-</td>
                </tr>
            </table>
            <br>
            <!-- Data Cuti Yang diambil -->
            <table border="1">
                <!-- data Pgawai -->
                <tr>
                    <td width="600" colspan="4">II. JENIS CUTI YANG DIAMBIL</td>
                </tr>
                
                <?php
                $no=1;
                $no2=4;
                    foreach ($list as $key => $val) {
                        if ($key % 2 != 1){
                            echo '<tr>';
                            echo '<td width="150">'.$no++.'.'.$val['nama_jenis_cuti'].'</td>';
                        }
                        else {
                            echo '<td width="190">'.$no2++.'.'.$val['nama_jenis_cuti'].'</td>';
                        } ?>
                        <td class="text-center" width=""><?php if($datauser->jenis_cuti_id == $val['id_jenis_cuti']){
                            echo '<img width="15" height="15" src="'.base_url().'uploads/pic/ceck.png">';
                        } ?></td>
                    
                    <?php } ?>
            </table>
            <br>

            <table border="1">
                <tr>
                    <td width="537">III. ALASAN CUTI</td>
                </tr>
                <tr>
                    <td><?=$datauser->alasan;?></td>
                </tr>
            </table>
            <br>

            <table border="1">
                <tr>
                    <td width="700" colspan="6">IV. LAMANYA CUTI</td>
                </tr>
                <tr>
                    <td>SELAMA</td>
                    <td><?=$datauser->jml_hari;?> (Hari/Bulan/Taun)</td>
                    <td>Pada Tanggal</td>
                    <td><?=$datauser->tgl_mulai;?></td>
                    <td class="text-center">s/d</td>
                    <td><?=$datauser->tgl_selesai;?></td>
                </tr>
            </table>
            <br>

            <table border="1" width="541">
                <tbody>
                    <tr>
                        <td colspan="6">
                            <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:14px;'>V. CATATAN CUTI</p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <div style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;line-height:107%;font-size:14px;'>
                                <p>1. Cuti Tahunan</p>
                            </div>
                        </td>
                        <td width="150" rowspan="2">
                            <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:14px;text-align:center;'>PARAF PETUGAS CUTI</p>
                        </td>
                        <td>
                            <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:14px;'>2. CUTI SAKIT</p>
                        </td>
                        <td width="30">
                            <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:14px;'>&nbsp;</p>
                        </td>
                    </tr>
                    <tr>
                        <td width="40">
                            <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:14px;text-align:center;'>TAHUN</p>
                        </td>
                        <td width="40">
                            <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:14px;text-align:center;'>SISA</p>
                        </td>
                        <td width="40">
                            <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:14px;text-align:center;'>KETERANGAN</p>
                        </td>
                        <td>
                            <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:14px;'>3. CUTI KARENA ALASAN PENTING</p>
                        </td>
                        <td>
                            <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:14px;'>&nbsp;</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:14px;text-align:center;'>2019</p>
                        </td>
                        <td>
                            <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:14px;text-align:center;'><?php echo $hak->n_2 ?></p>
                        </td>
                        <td>
                            <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:14px;text-align:center;'>&nbsp;</p>
                        </td>
                        <td rowspan="3">
                            <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:14px;'>&nbsp;</p>
                        </td>
                        <td>
                            <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:14px;'>4. CUTI BESAR</p>
                        </td>
                        <td>
                            <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:14px;'>&nbsp;</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:14px;text-align:center;'>2020</p>
                        </td>
                        <td>
                            <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:14px;text-align:center;'><?php echo $hak->n_1 ?></p>
                        </td>
                        <td>
                            <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:14px;text-align:center;'>&nbsp;</p>
                        </td>
                        <td>
                            <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:14px;'>5. CUTI MELAHIRKAN</p>
                        </td>
                        <td>
                            <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:14px;'>&nbsp;</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:14px;text-align:center;'>2021</p>
                        </td>
                        <td>
                            <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:14px;text-align:center;'><?php echo $hak->n ?></p>
                        </td>
                        <td>
                            <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:normal;font-size:14px;text-align:center;'></p>
                        </td>
                        <td>
                            <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:14px;'>6. CUTI DI LUAR TANGGUNGAN NEGARA</p>
                        </td>
                        <td>
                            <p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:0in;line-height:  normal;font-size:14px;'>&nbsp;</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <br>

            <table border="1">
                
                <tr>
                    <td width="300" colspan="2">VI. ALAMAT SELAMA MENJALANKAN CUTI</td>
                </tr>
                <tr>
                    <td width="300" rowspan="2" style="text-align: center;"><?=$datauser->alamat;?></td>
                    <td>TELP : <?=$datauser->no_telp;?></td>
                </tr>
                <tr>
                    <td width="235">
                        <p class="pb-4">Hormat Saya,</p>
                        <br>
                        <p>(<?=$datauser->nama_lengkap;?>) <br>
                            NIP.<?=$datauser->nip;?></p>
                    </td>
                </tr>
            </table>
            <br>

            <table border="1" width="541">
                <tr>
                    <td colspan="4">VII. PERTIMBANGAN ATASAN LANGSUNG</td>
                </tr>
                <tr>
                    <td>DISETUJUI</td>
                    <td>PERUBAHAN</td>
                    <td>DITANGGUHKAN</td>
                    <td>TIDAK DISETUJUI</td>
                </tr>
                <tr>
                        <td class="text-center"><img width="15" height="15" src="<?php echo base_url();?>uploads/pic/ceck.png"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                </tr>
                <tr>
                    <td style="border: 0;"></td>
                    <td style="border: 0;"></td>
                    <td style="border: 0;"></td>
                    <td >
                        <p class="pb-4"><?=$datauser2->nama_jabatan;?>,</p>
                        <br>
                        <p>(<?=$datauser2->nama_lengkap;?>) <br>
                            NIP.<?=$datauser2->nip;?></p>
                    </td>
                </tr>
            </table>
            <br>

            <table border="1" width="541">
                <tr>
                    <td colspan="4">VIII. KEPUTUSAN PEJABAT YANG BERWENANG MEMBERIKAN CUTI</td>
                </tr>
                <tr>
                    <td>DISETUJUI</td>
                    <td>PERUBAHAN</td>
                    <td>DITANGGUHKAN</td>
                    <td>TIDAK DISETUJUI</td>
                </tr>
                <tr>
                    <td class="text-center"><img width="15" height="15" src="<?php echo base_url();?>uploads/pic/ceck.png"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td style="border: 0;"></td>
                    <td style="border: 0;"></td>
                    <td style="border: 0;"></td>
                    <td>
                        <p class="pb-4"><?=$datauser2->nama_jabatan;?>,</p>
                        <br>
                        <p>(<?=$datauser2->nama_lengkap;?>) <br>
                            NIP.<?=$datauser2->nip;?></p>
                    </td>
                </tr>
            </table>
            

</body>
</html>