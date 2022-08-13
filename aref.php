<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minhaty</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="css/css.css">
</head>
<body>
  <!-- ------------- Starting Nav Bar ------------- -->
  <?php require_once "master/navbar.php"; ?>
  <!-- ------------- Ending Nav Bar ------------- -->

  <main class="pt-5 pb-4">
    <div class="container">
    <img src="https://via.placeholder.com/970x40?text=---------- Ads Here ---------" class="img-fluid" width="100%" >
        <div class="card">
          <div class="card-header text-center py-3">
            الإطلاع على لوائح الممنوحين 2022 
          </div>
          <div class="card-body">
            <form class="sign-up-form" method="post" action="liste/aref/ms/index.php" name="consultation">
              <h2 class="title2" style="font-family: arabswell_1;"> الرجاء إدخال المعلومات التالية <br> Prière de
                renseigner les champs suivants </h2>
        
              <select class="form-select text-center" aria-label="Default select example"id="selectElementId" name="abac">
                <option value="0" selected="">Année d’obtention du Bac ⛥ سنة الحصول على الباك </option>
              </select>
        
              <select class="form-select text-center" aria-label="Default select example" name="aref" id="aref">
                <optgroup label="">
                  <option value="0" selected=""> Region d'obtention de Bac ⛥ الأكاديمية الجهوية</option>
                  <option value="1">Casablanca - Settat ⛥   الدار البيضاء - سطات</option>
                  <option value="2">Marrakech - Safi ⛥   مراكش - اسفي</option>
                  <option value="3">Fes - Meknes ⛥ فاس - مكناس</option>
                </optgroup>
              </select>
        
        
        
              <input type="submit" class="btn btn-primary " id="lert" value="إِطَّــــــــلِـــــــــعْ" title="إِطَّــــــــلِـــــــــعْ">
        
        
            </form>
          </div>
        </div>
    </div>
  </main>




  <footer class="footer-wrapper">
    <div class="row">
      <div class="col-12 text-center my-4">
        <img src="https://via.placeholder.com/970x90?text=---------- Ads Here ---------" class="img-fluid" alt="" >
        <img src="assets/images/onoscogo (9).png" class="img-fluid logo-bottom" alt="">
      </div>
    </div>
  </footer>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/js.js"></script>
  <script src="assets/js/jquery360.min.js" crossorigin="anonymous"></script>
  <script src="assets/js/sweetalert.all.min.js"></script>
  <script src="assets/js/controleur.js"></script> 
</body>
</html>