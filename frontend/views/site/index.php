<?php
use rmrevin\fontawesome\FAS;
use rmrevin\fontawesome\NpmProAssetBundle;
/* @var $this yii\web\View */
$this->title = 'JHCIS Audit DATA Version 2021.04.0001';
echo 'PHP version: ' . phpversion();
?>
<p></p>
<div class="site-index">
        <div class="btn-group">
          <button type="button" class="btn btn-success">ประเภทแฟ้ม</button>
          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
          แฟ้มสะสม <span class="caret"></span></button>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">PERSON</a></li>
            <li><a href="#">CHRONIC</a></li>
            <li><a href="#">HOME</a></li>
            <li><a href="#">VILLAGE</a></li>
            <li><a href="#">PROVIDER</a></li>
            <li><a href="#">PRENATAL</a></li>
            <li><a href="#">DRUGALLERGY</a></li>
            <li><a href="#">DISABILITY</a></li>
          </ul>

          <div class="btn-group">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
            แฟ้มบริการ <span class="caret"></span></button>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">SERVICE</a></li>
              <li><a href="#">DIAGNOSIS</a></li>
              <li><a href="#">DRUG</a></li>
              <li><a href="#">PROCEDURE</a></li>
              <li><a href="#">CHARGE_OPD</a></li>
              <li><a href="#">SURVEILLANCE</a></li>
              <li><a href="#">DENTAL</a></li>
              <li><a href="#">COMMUNITY_ACTIVITY</a></li>
              <li><a href="#">COMMUNITY_SERVICE</a></li>
              <li><a href="#">ICF</a></li>
              <li><a href="#">SPECIALPP</a></li>
              <li><a href="#">ADMISSION,</a></li>
            </ul>
            </div>

            <div class="btn-group">
              <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
              แฟ้มบริการกึ่งสำรวจ <span class="caret"></span></button>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">ANC</a></li>
                <li><a href="#">EPI</a></li>
                <li><a href="#">FP</a></li>
                <li><a href="#">NEWBORN</a></li>
                <li><a href="#">NEWBORNCARE</a></li>
                <li><a href="#">POSTNATAL</a></li>
                <li><a href="#">LABORL</a></li>
                <li><a href="#">CHRONICFU</a></li>
                <li><a href="#">NUTRITION</a></li>
                <li><a href="#">CHRONICFU</a></li>
                <li><a href="#">LABFU</a></li>
                <li><a href="#">NCDSCREEN</a></li>
                <li><a href="#">REHABILITATION</a></li>
              </ul>
              </div>

          <div class="btn-group">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
            แฟ้มเก็บตามนโยบาย <span class="caret"></span></button>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">POLICY</a></li>
            </ul>
          </div>
          <div class="btn-group">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
            แฟ้มแก้ไขข้อมูล <span class="caret"></span></button>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">DATA_CORRECT</a></li>
            </ul>
          </div>

</div>
        <h2></h2>
        <a class="btn btn-success" href="https://covid19.ddc.moph.go.th/th/api">Open API :) สำหรับนักพัฒนา</a>
        <a class="btn btn-success" href="http://127.0.0.1/covidapiyii/frontend/web/">JHCIS Audit DATA</a>
    </div>
<html lang="en">
<head>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>
<p></p>

<body>
    <div class="footer">
    <footer>
    <div class="covid19"></div>
    <script>
    $.getJSON('https://covid19.th-stat.com/api/open/today', function(data) {

        var text = `ยื่นยัน : ${data.Confirmed} ราย   ติดเชื้อสะสมเพิ่มเติม : ${data.NewConfirmed} ราย <br>
                    รักษาอยู่ใน รพ. : ${data.Hospitalized} ราย  รักษาหายเพิ่มเติม : ${data.NewRecovered} ราย  หายแล้ว : ${data.Recovered} ราย <br>
                    เสียชีวิต : ${data.Deaths} ราย    เสียชีวิตเพิ่มเติม : ${data.NewDeaths} ราย <br>
                    เข้ารับการรักษาใหม่ใน รพ. : ${data.NewHospitalized} ราย <br>
                    วันที่ปรับปรุงข้อมูล : ${data.UpdateDate} แหล่งที่มาของข้อมูล : ${data.Source} <br>`
        $(".covid19").html(text);
    });
    </script>
    </footer>
    </div>
</body>
</html>
