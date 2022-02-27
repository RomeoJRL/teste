<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="index_main.css">
  <link rel="stylesheet" href="style_cal.css">
  <link rel="stylesheet" href="style_happy.css">
  <style>
    .pclass {
      width: 0;
      color: #fff;
      margin: 0 auto;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-direction: column;
      overflow: hidden;
      visibility: hidden;
      height: 0;

    }

    .pclass img {
      height: 0;
      width: 0;
      border-radius: 80%;
    }

    .pclass #text1,
    .pclass #text2 {
      font-size: 0;
      width: 0;
      display: flex;
      flex-direction: column;
    }
  </style>
</head>

<body>

  <section class="section">
    <header>
      <h2 class="logo">Copyright &copy; by <i>JRL</i></h2>
    </header>
    <video
      src="https://media.gettyimages.com/videos/world-network-loop-video-id175374484"
      muted loop autoplay></video>
    <div class="overlay"></div>
    <div class="text">
      <h2>Never Stop </h2>
      <h3>Improving Your Self</h3>
      <p style="font-family: Tw Cen MT;font-size: 1.3em;" class="anp">
        " Be brave and be kind. Where there is kindness there is good and where there is good there is magic"<br><br>
      </p>
      <a href="javascript:void(0)" onclick="openProf()">click me!</a>
      <div id="prof" class="pclass">
        <br><br>
        <!--
        <form action="">
         <fieldset style="  border: 1px solid rgb(87, 164, 187); visibility: hidden;overflow: hidden; width: 60vw;height: 20vh;text-align: center;" id="fds"><legend>J'aimerais te connaitre d'avantage</legend></fieldset>
       </form>
      -->
        <div class="cal_hap" style="display: flex;flex-direction: row;height: auto;">

          <div class="h1" contenteditable spellcheck="false">
            <div class="calendar">
              <div class="calendar-body">
                <span class="month-name">Month</span>
                <span class="day-name">Day</span>
                <span class="date-number">00</span>
                <span class="year">0000</span>
              </div>
            </div>
            <div style=" font-size: clamp(1em,4vw,4em);text-align: center;" class="hpy">Happy SUNDAY <br>ETI</div>
          </div>
        </div>

        <div class="lgd">Good start of Lent to all Christians in the world <br>may the love of God be our sharing</div>
        
          <!--<iframe width=88% height="250px" style="margin-top: 80px;border-radius: 18px;" src="https://www.youtube.com/embed/watch?v=mAymPuqzibA&t=31s">
          </iframe>-->

    

          <iframe  width=88% height="250px" style="margin-top: 80px;border-radius: 18px;"
           src="https://www.youtube.com/embed/Z-ln__MWpKA?autoplay=1&mute=1"
           title="YouTube video player" frameborder="0" allow="accelerometer; autoplay;
            clipboard-write; encrypted-media; gyroscope; picture-in-picture"
             allowfullscreen></iframe>
      
      </div>
    </div>
<!--https://www.youtube.com/embed/aiSaMoOPhQA-----?autoplay=1&mute=1-->

    <ul class="social">
      <li><a href="#"><img src="https://i.ibb.co/x7P24fL/facebook.png"></a></li>
      <li><a href="#"><img src="https://i.ibb.co/Wnxq2Nq/twitter.png"></a></li>
      <li><a href="#"><img src="https://i.ibb.co/ySwtH4B/instagram.png"></a></li>
    </ul>

  </section>



  <script>
    function openProf() {
      document.getElementById("prof").style.width = "75vw";
      document.getElementById("prof").style.height = "auto";
      document.getElementById("prof").style.overflow = "visible";
      document.getElementById("prof").style.visibility = "visible";

      /*   document.getElementById("fds").style.width = "60vw";
         document.getElementById("fds").style.height = "20vh";*/

    }

  </script>

  <script type="text/javascript">
    const dayNumber = new Date().getDate();
    const year = new Date().getFullYear();
    const dayName = new Date().toLocaleString("default", { weekday: "long" });
    const monthName = new Date().toLocaleString("default", { month: "long" });

    document.querySelector(".month-name").innerHTML = monthName;
    document.querySelector(".day-name").innerHTML = dayName;
    document.querySelector(".date-number").innerHTML = dayNumber;
    document.querySelector(".year").innerHTML = year;
  </script>
</body>

</html>