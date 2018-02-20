<!-- Reading an excel file using php:) -->
<?php

require_once 'excel_reader2.php';

 
$data = new Spreadsheet_Excel_Reader("book.xls");
$ex=$data->sheets;
echo "Total Sheets in this xls file: ".count($data->sheets)."<br /><br />";
 
$html="<table border='1'>";
	
	if(count($ex[0]['cells'])>0) // checking sheet not empty
	{
		echo "Sheet 0:<br /><br />Total rows in sheet  ".count($ex[0]['cells'])."<br />";
		for($j=1;$j<=count($ex[0]['cells']);$j++) // loop used to get each row of the sheet
		{ 
			$html.="<tr>";
			for($k=1;$k<=count($ex[0]['cells'][$j]);$k++) // This loop is created to get data in a table format.
			{
				$html.="<td>";
				$html.=$ex[0]['cells'][$j][$k];
				
				$html.="</td>";
			}
		}
	}
 

 
$html.="</table>";
echo $html;
echo "<br />Data Inserted in dababase";
echo $ex[0]['cells'][1][1];
?>