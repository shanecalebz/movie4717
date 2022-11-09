
<?php
	function compare1($seatid){
		$conn = mysqli_connect("localhost", "root", "", "Atlantic");
		$sql = "SELECT ticket_seat from Atlantic.hall1;";
		$result = mysqli_query($conn, $sql);

			/* fetch associative array */
			while ($row = mysqli_fetch_assoc($result)) {
				if($row["ticket_seat"] == $seatid)
				{echo "disabled";}
			}
	}
		function compare2($seatid){
		$conn = mysqli_connect("localhost", "root", "", "Atlantic");
		$sql = "SELECT ticket_seat from Atlantic.hall2;";
		$result = mysqli_query($conn, $sql);

			/* fetch associative array */
			while ($row = mysqli_fetch_assoc($result)) {
				if($row["ticket_seat"] == $seatid)
				{echo "disabled";}
			}
	}
		function compare3($seatid){
		$conn = mysqli_connect("localhost", "root", "", "Atlantic");
		$sql = "SELECT ticket_seat from Atlantic.hall3;";
		$result = mysqli_query($conn, $sql);

			/* fetch associative array */
			while ($row = mysqli_fetch_assoc($result)) {
				if($row["ticket_seat"] == $seatid)
				{echo "disabled";}
			}
	}
?>