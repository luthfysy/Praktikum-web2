<?php

echo "<h3>Soal No 1 Looping I Love PHP</h3>";

echo "LOOPING PERTAMA: <br>";
for ($i = 2; $i <= 20; $i += 2) {
    echo "             " . $i . " - I Love PHP <br>";
}

echo "<br>LOOPING KEDUA: <br>";
for ($i = 20; $i >= 2; $i -= 2) {
    echo "             " . $i . " - I Love PHP <br>";
}

echo "<h3>Soal No 2 Function Tentukan Nilai</h3>";
      ?>
      <p>Masukan Nilai: </p>
      <form action="tugas_praktikum3.php" method="post">
            <input type="number" name="nilai" id="nilai" placeholder="Masukan nilai anda">
            <input type="submit" name="submit" value="Submit">
      </form>
      <?php
      if (isset($_POST['submit'])) {
            $_nilai = $_POST["nilai"] ?? "";

            function grade($_nilai)
            {
                  if ($_nilai < 60) {
                        return "Kurang";
                  } elseif ($_nilai >= 60 && $_nilai < 70) {
                        return "Cukup";
                  } elseif ($_nilai >= 70 && $_nilai < 85) {
                        return "Baik";
                  } elseif ($_nilai >= 85 && $_nilai <= 100) {
                        return "Sangat Baik";
                  } else {
                        return "Nilai Anda Tidak Valid";
                  }
            }

            echo grade($_nilai);
      }
?>