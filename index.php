<?php
	$cols = 10;
	$rows = 10;
?>
<style>
	body {font-family: Arial; color:rgba(0,0,0,0.8)}
	table { border: 0; padding:0; border-radius:20px; border-spacing:0; margin: auto; margin-top: 50px; font-size: 18pt;}
	td { padding:0; border:0; text-align: center; width: 70px; box-shadow:12px 12px 16px 0 rgba(0, 0, 0, 0.25),
            -8px -8px 12px 0 rgba(255, 255, 255, 0.8); }
	tr { padding:0; border:0; height: 70px; }
</style>

<table>
<?php
for ($tr = 1; $tr <= $rows; $tr++)
{
    echo '<tr>';

    for($td = 1; $td <= $cols; $td++)
    {		
			$background= 'rgba(200, 200, 200, 0.25)';
    		$border = '';
		if($tr == 1){
	
				$border = '; border-bottom: 3px #9D0000 solid';
				//$border .= '; border-right: 2px red solid';	
	
		}

		if($td == 1){
				//$border = '; border-bottom: 2px red solid';
				$border .= '; border-right: 3px #9D0000 solid';			

		}
        echo '<td style="background-color:', $background, $border, '">', $tr * $td, '</td>';
    }
    echo "</tr>";
}
	
    
?>
</table>
