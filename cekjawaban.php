<?php

	include "connect.php";

	$jawaban = $_POST['jawaban'];
	$id = $_POST['idsoal'];


	$query = "select * from soal where id='$id'";
	$hasil = mysqli_query($connect, $query);
    $data = mysqli_fetch_array($hasil);
    $idmateri = $data['id_materi'];

	$query2 = "select * from jawabsiswa where id_materi=$idmateri";
	$hasil2 = mysqli_query($connect, $query2);
    $data2 = mysqli_fetch_array($hasil2);    
    
    if($data['jawaban'] == $jawaban) {
    	
    	if($data['kesulitan'] == "mudah") {
    		$counter = $data2['hasil_mudah'];
            var_dump($counter);
            $counter = $counter + 1;

    		$query3 = "UPDATE jawabsiswa SET hasil_mudah=$counter WHERE id_materi=$idmateri";
    		$hasil3 = mysqli_query($connect, $query3);

    		if($counter >= 2) {
    			$no = 4;
    		} else {
    			$no = $data['no_soal'] + 1;
    		}

    		header("location:soal.php?id=$idmateri&no=$no");
    	} 
    	else if($data['kesulitan'] == "sedang") {
    		$counter = $data2['hasil_sedang'] + 1;

    		$query3 = "UPDATE jawabsiswa SET hasil_sedang=$counter WHERE id_materi=$idmateri";
            $hasil3 = mysqli_query($connect, $query3);

    		if($counter >= 2) {
    			$no = 7;
    		} else {
    			$no = $data['no_soal'] + 1;
    		}

    		header("location:soal.php?id=$idmateri&no=$no");
    	}
    	else if($data['kesulitan'] == "sulit") {
    		$counter = $data2['hasil_sulit'] + 1;

    		$query3 = "UPDATE jawabsiswa SET hasil_sulit=$counter WHERE id_materi=$idmateri";
            $hasil3 = mysqli_query($connect, $query3);

    		if($counter >= 2 || $data['no_soal'] >= 9) {

                $nilai = $data2['hasil_mudah'] + $data2['hasil_sedang'] + $data2['hasil_sulit']; 
                var_dump($nilai);
                var_dump($kesimpulan);
                var_dump($idmateri);

                if($nilai >= 5) {
                    
                    $kesimpulan = "Sudah Bisa";
                    
                    $query3 = "UPDATE jawabsiswa SET kesimpulan='$kesimpulan' WHERE id_materi=$idmateri";
                    $hasil3 = mysqli_query($connect, $query3);
                    var_dump($hasil3);
                }

    			header("location:index.php");
    		} else {
    			$no = $data['no_soal'] + 1;
                header("location:soal.php?id=$idmateri&no=$no");
    		}

    	}


    } else {
    	$no = $data['no_soal'] + 1;
        header("location:soal.php?id=$idmateri&no=$no");
    }


?>