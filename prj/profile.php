<?php include 'includes/nav.php'; if(!isset($userid)){header("Location:index.php");} ?>
<div class="container  mt-5 ">


<!-- Pofile -->
<div class="card bg-secondary  shadow-sm border-0 text-white text-right mt-5" style="direction:rtl">
    <div class="card-body">
            <h5> ناوی خوێندکار : عباس عبدللە محمد </h5>
            <h5>کۆلێژ : علوم </h5>
            <h5>بەشی : کۆمپیوتەر</h5>
            <h5>قۆناغی : ٣</h5>
            <a href="?logout" class="text-danger">Logout</a>
          </div>
  </div>


<!-- Signature -->
<div class="card shadow-sm border-0 text-white text-right mt-5 p-2 text-center">
<h5 class="text-dark"> پێویستە ئیمزای ئەم بەشانەی خوارەوە تەواو بکەیت بۆ وەرگرتنی نمرەکان</h5>

<table class="table table-neutral">
  <thead>
    <tr class="text-center">
      <th scope="col">کتێبخانەی گشتی</th>
      <th scope="col"> تۆماری گشتی</th>
      <th scope="col">بەشی ناوخۆ</th>
      <th scope="col">بەشەکەی خۆت</th>
    </tr>
  </thead>
  <tbody>
    <tr class="text-center">
      <td><img src="assets/img/sign.svg" width="50"></td>
      <td><img src="assets/img/sign.svg" width="50"></td>
      <td><img src="assets/img/right.svg" width="50"></td>
      <td><img src="assets/img/sign.svg" width="50"></td>
    </tr>
  </tbody>
</table>
  </div>


  <table class="table mt-5 table-white shadow-sm">
  <thead>
    <tr class="text-center">
      <th scope="col">Subject</th>
      <th scope="col">Mark</th>
      <th scope="col">%</th>
      <th scope="col">گازەندە</th>
    </tr>
  </thead>
  <tbody>
    <tr class="text-center">
      <td>Object Programming</td>
      <td>Good</td>
      <td>70</td>
      <td><img src="assets/img/complaint.svg" width="20"></td>
    </tr>
    <tr class="text-center">
      <td>Calculas</td>
      <td>Good</td>
      <td>70</td>
      <td><img src="assets/img/right.svg" width="20"></td>
    </tr>
  </tbody>
</table>
<div class="d-flex justify-content-end">
<p class="bg-success p-2 radius-20 text-white  w-25 text-center">Pass</p>
</div>
</div>



<?php include 'includes/footer.php';?>