<?php 


class oop{
	function get_motor($koneksi)
	{
		 $data = mysqli_query($koneksi,"SELECT * FROM motor order by id_motor asc");
		return $data;
	}
}
