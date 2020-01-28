<?php
use app\models\DataMahasiswa;
?>
<div class="msale-price--model-index">
	<p class="kv-heading-1"> DATA MAHASISWA</p>
	<div class="col-sm-12">
		<table style="font-family: sans-serif;
					color: #444;
					border-collapse: collapse;
					width: 100%;
					border: 1px solid #f2f5f7;">
						<tr style="background: #00a65a;">
							<th style="color: #fff;" class="th" width="11%">NIM</th>
							<th style="color: #fff;">Nama</th>
							<th style="color: #FFF;width: 15%">Alamat</th>
							<th style="color: #FFF;">Jurusan</th>
							<th style="color: #FFF;width: 7%">Semester</th>
							<th style="color: #FFF;">Jenis Kelamin</th>
							<th style="color: #FFF;">Agama</th>
							<th style="color: #FFF;width: 5%">Kelas</th>
						</tr>
						<?php $data = DataMahasiswa::find()->all();
						foreach ($data as $value) {
							echo "<tr>";
							echo "<td class='th1'>" .$value->nim ."</td>";
							echo "<td>" .$value->nama ."</td>";
							echo "<td>" .$value->alamat ."</td>";
							echo "<td>" .$value->jurusan ."</td>";
							echo "<td align='center'>" .$value->semester ."</td>";
							echo "<td>" .$value->jenis_kel ."</td>";
							echo "<td>" .$value->agama ."</td>";
							echo "<td>" .$value->kelas ."</td>";
							echo"</tr>";
						}
						?>
					</table>
	</div>
</div>