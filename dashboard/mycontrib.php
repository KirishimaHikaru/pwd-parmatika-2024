<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>AULITA - Dashboard</title>
   <link rel="stylesheet" href="../style/reset.css">
   <link rel="stylesheet" href="../style/all.css">
   <link rel="stylesheet" href="../style/mycontrib.css">
</head>

<body>
   <?php
   $file = '../database/contribution.txt';

   $data = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
   $dataCount = count($data) / 6;
   $arrData = [];

   // Membaca file baris per baris
   $index = 0;
   for ($i = 0; $i < $dataCount; $i++) {
      $entry = [];
      $entry['headings'] = trim($data[$index]);
      $entry['name'] = trim($data[$index + 1]);
      $entry['date'] = trim($data[$index + 2]);
      $entry['scope'] = trim($data[$index + 3]);
      $entry['form'] = trim($data[$index + 4]);
      $entry['desc'] = trim($data[$index + 5]);

      $arrData[] = $entry;

      $index += 6; // Pindah ke entri data berikutnya
   }
   ?>

   <aside>
      <img src="../src/img/maman.png" alt="">
      <a href="dashboard.html">DASHBOARD</a href="">
      <a href="profile.html">PROFILE</a>
      <a href="contribution.html">CONTRIBUTION</a>
      <!-- <a href="underconstruct.html">NATURE</a> -->
      <a href="#" onclick="ensure()">LOGOUT</a>
      <div>
         <p>Version System 0.1.314 Apk</p>
      </div>
   </aside>
   <main>
      <header>
         <button class="toggle-btn">☰</button>
         <h3>SISTEM INFORMASI KEANGGOTAAN</h3>
      </header>
      <ut-ama id="containerMycontrib">
         <?php
         $no = 1;
         foreach ($arrData as $entry) {
            echo'
            <div class="about">
            <tr>
            <h4>DATA ' . $no . '</h4>
               <table>
                  <tr>
                     <td style="width:50%"> Nama Event</td>
                     <td style="width:50%">: ' . $entry['name'] . '</td>
                  </tr>
                  <tr>
                     <td>Tanggal Event</td>
                     <td>: ' . $entry['date'] . '</td>
                  </tr>
                  <tr>
                     <td>Lingkup Event</td>
                     <td>: ' . $entry['scope'] . '</td>
                  </tr>
                  <tr>
                     <td>Bentuk Event</td>
                     <td>: ' . $entry['form'] . '</td>
                  </tr>
                  <tr>
                     <td>Deskripsi Event</td>
                     <td>: ' . $entry['desc'] . '</td>
                  </tr>
               </table>
            </div>
            ';
            $no += 1;
         }
         ?>
      </ut-ama>
   </main>
   <script lang="javascript" src="../script/page.js"></script>
</body>

</html>