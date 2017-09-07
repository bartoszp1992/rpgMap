<table border="2">
	<tr>
		<td>
		<form method="post" action="index.php">
		<input type="hidden" name="restart" value="5" />
		<input type="submit" value="restart" />
		</form>
		</td>
		<td>
		<form method="post" action="index.php">
		<input type="hidden" name="gora" value="1" />
		<input type="submit" value="gora" />
		</form>
		</td>
		<td></td>
	</tr>
	<tr>
		<td>
		<form method="post" action="index.php">
		<input type="hidden" name="lewo" value="2" />
		<input type="submit" value="lewo" />
		</form>
		</td>
		<td></td>
		<td>
		<form method="post" action="index.php">
		<input type="hidden" name="prawo" value="3" />
		<input type="submit" value="prawo" />
		</form>
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
		<form method="post" action="index.php">
		<input type="hidden" name="dol" value="4" />
		<input type="submit" value="dol" />
		</form>
		</td>
		<td></td>
	</tr>
</table>
<br />
<?php
session_start();
$posy = 5;
$posx = 5;
if (isset($_POST['restart']))
{
$_SESSION['posx'] = 5;
$_SESSION['posy'] = 5;
$posx = $_SESSION['posx'];
$posy = $_SESSION['posy'];
}
elseif (isset($_POST['gora']))
{
$posy = $_SESSION['posy'] + 1;
$_SESSION['posy'] = $posy;
}

elseif (isset($_POST['lewo']))
{
$posx = $_SESSION['posx'] - 1;
$_SESSION['posx'] = $posx;
}
elseif (isset($_POST['prawo']))
{
$posx = $_SESSION['posx'] + 1;
$_SESSION['posx'] = $posx;
}
elseif (isset($_POST['dol']))
{
$posy = $_SESSION['posy'] - 1;
$_SESSION['posy'] = $posy;
}
$posy = $_SESSION['posy'];
$posx = $_SESSION['posx'];
?>
</ br>Twoja pozycja na mapie(x, y) to :
</ br>
<?php
echo $posx;
echo ', ';
echo $posy;
?>
