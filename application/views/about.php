<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script type="text/javascript" src="<?php echo base_url('assets/jquery.js'); ?>"></script>
  <script src="<?= base_url("assets/jquery-3.5.1.min.js") ?>"></script>

  <script>
    $(document).ready(function() {
      $("#btn_hide").click(function() {
        $("#kotak").hide(2000);
      });

      $("#btn_show").click(function() {
        $("#kotak").show(2000);
      });

      $("#btn_blue").click(function() {
        $("h3").css("color", "blue");
      });

      $("#btn_black").click(function() {
        $("h3").css("color", "black");
      });
      $("#btn_name").click(function() {
        var nilai = $("#nama").val();
        alert(nilai);
      });
    });
  </script>

  <title>Biodata</title>

</head>

<body>
  <a>
    <h3 class="text-center mt-3">My Profile</h3>
  </a>

  <!-- Isi Biodata Paling Keren di HTML disini -->
  <div class="container" id="kotak">
    <div class="card kartu">
      <div class="row">
        <div class="col-md-4">
          <div class="foto">
            <img src="<?php echo base_url() . "uploads/profil.jpg"  ?>" class="img-thumbnail">

          </div>
        </div>
        <div class="col-md-8 kertas-biodata">
          <div class="biodata">
            <table width="100%" border="0">
              <tbody>
                <tr>
                  <td valign="top">
                    <table border="0" width="100%" style="padding-left: 2px; padding-right: 13px;">
                      <tbody>
                        <tr>
                          <td width="25%" valign="top" class="textt">Nama</td>
                          <td width="2%">:</td>
                          <td style=" font-weight:bold">Alfian Bayu Samudra</td>
                        <tr>
                          <td class="textt">Jenis Kelamin</td>
                          <td>:</td>
                          <td>Laki-Laki</td>
                        </tr>
                        <tr>
                          <td class="textt">Tempat Lahir</td>
                          <td>:</td>
                          <td>Bojonegoro</td>
                        </tr>
                        <tr>
                          <td class="textt">Tanggal Lahir</td>
                          <td>:</td>
                          <td>20/06/2000</td>
                        </tr>
                        <tr>
                          <td class="textt">NIM</td>
                          <td>:</td>
                          <td>18090109</td>
                        </tr>
                        <tr>
                          <td valign="top" class="textt">Prodi</td>
                          <td valign="top">:</td>
                          <td>Teknik Informatika</td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <br>
  <center>
    <button type='button' class='btn btn-primary center-block' id="btn_show"> Show</button>
    <button type='button' class='btn btn-primary center-block' id="btn_hide"> Hide</button>
    <button type='button' class='btn btn-primary center-block' id="btn_blue"> Biru</button>
    <button type='button' class='btn btn-primary center-block' id="btn_black"> Hitam</button>
  </center>
  <script>
    $(document).ready(function() {

      $("#tombol").click(function() {
        var nilai1 = $("#keren:checked").val();
        var nilai2 = $("#ganteng:checked").val();
        var nilai3 = $("#cool:checked").val();

        if (nilai1 == undefined) {
          nilai1 = "";
        }
        if (nilai2 == undefined) {
          nilai2 = "";
        }
        if (nilai3 == undefined) {
          nilai3 = "";
        }

        alert(nilai1 + ' ' + nilai2 + ' ' + nilai3);
      })

    });
  </script>
  <center>
    Saya itu:
    <input type="checkbox" id="keren" value="Saya Keren"> Keren
    <input type="checkbox" id="ganteng" value="Saya Ganteng"> Ganteng
    <input type="checkbox" id="cool" value="Saya Cool"> Cool
    <br><br>
    <button id="tombol">Ambil Nilai</button>
  </center>

  <br>
  <br>
  <center>

    <script src="js/bootstrap.min.js"></script>
</body>

</html>

<style>
  body {
    background-color: #e8e8e8;
  }

  .foto {
    padding: 20px;
    margin-left: 30px;
    margin-top: 10px;
  }

  tbody {
    font-size: 20px;
    font-weight: 300;
    color: black;
  }

  .biodata {
    margin-top: 30px;
  }
</style>