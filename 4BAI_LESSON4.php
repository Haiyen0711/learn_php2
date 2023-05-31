Bài 3.
 <?php
    function checkYear($year){
        if($year%2==0){
            return true;
        }else{
            return false;
        }
    }

    $currentYear = 2023;
    if(checkYear($currentYear)){
        echo "Năm chẵn";
    }else{
        echo "Năm lẻ";
    }
    
?> 
Bài 4.
<?php
    function printNumber(){
        for($i = 1; $i <= 100; $i++) {
            echo $i . "<br>";
        }
    }

    printNumber();
?>

 Bài 5.
<!DOCTYPE html>
<html>
<head>
	<title>Dãy số từ 1 đến 100</title>
</head>
<body>
	<?php
		function runPrint(){
			for($i = 1; $i <= 100; $i++) {
				if($i % 2 == 0) {
					echo "<b>" . $i . "</b> ";
				} else {
					echo $i . " ";
				}
			}
		}
		runPrint();
	
	?>
</body>
</html>

Bài 6.
<?php
    $nam = array(1990, 1991, 1992, 1993, 1994, 1995);
    function printYear($nam){
        foreach($nam as $nam_hien_tai) {
            echo $nam_hien_tai . " ";
        }
    }

    printYear($nam);
?>
