<?php 

header("Content-type: application/octet-stream");
header("Content-type: application/x-msexcel");
header("Cache-Control: no-cache, must-revalidate");
header("Content-Disposition: attachment; filename=Laporan Pengajuan.xls");
header("Pragma: no-cache");
header("Expires: 0");

?>

<style type="text/css">
	table,th,td
	{
		border-collapse: collapse;
		padding: 15px;
		margin: 10px;
		color: #000;
	}
</style>

<div style="text-align: left;">
	<span style="margin-left: 20px;">Laporan Pengajuan</span>
	<br>
	<h4>PT. POS INDONESIA</h4>
</div>
<div style="text-align: left;">
	
</div>

<table border="1" width="100%">
	<thead>
		<tr>
 			<th>No</th>
 			<th>UPT</th>
 			<th>Nomor Surat</th>
 			<th>Tanggal</th>
 			<th>Perihal</th>
 			<th>Keterangan</th>
 			<th>Jumlah</th>
 		</tr>
	</thead>
	<tbody>
		<?php $no=1; 
		foreach($data as $d) { ?>
			<tr>
				<td><?php echo $no;?></td>
				<td><?php echo $d->upt;?></td>
				<td><?php echo $d->nama;?></td>
				<td><?php echo $d->tanggal;?></td>
				<td><?php echo $d->isi;?></td>
				<td><?php echo $d->keterangan;?></td>
				<td><?php echo $d->jumlah;?></td>
			</tr>
			<?php $no++; } ?>
	</tbody>
	<tfoot>
                    <tr>
                        <th colspan="6" style="text-align: left;">TOTAL</th>
                        <th style="text-align: center;"><?php echo $sum; ?></th>
                        </tr>
                </tfoot>
</table>