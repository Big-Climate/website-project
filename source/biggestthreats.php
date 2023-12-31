<!DOCTYPE html>
<html>
  <link rel="stylesheet" href="colours.css" />
  <head>
    <title>EcoWithYou - Biggest Threats</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="./css/biggestthreats.css" rel="stylesheet" type="text/css" />
  </head>

  <?php include "header.html"; ?>

  <body>
    <div id="gradient"></div>
    <main>
      <div id="splash-image"><h1>Biggest Threats</h1></div>
      <div id="thing-container">
        <div id="1" class="message-container">
          <div class="left-text text">
            <h2>Deforestation</h2>
            <p>
              As trees store carbon as they grow, cutting or burning down trees
              releases that carbon into the atmosphere. Farmers may cut down
              trees or clear land using fire to produce soya for animal feed,
              such as in the Amazon. In other parts of the world, natural
              forests are cleared for timber, mining or palm oil.
            </p>
          </div>
          <div class="right-image image">
            <img src=".\assets\amazon-deforestation.avif" />
          </div>
        </div>
        <div id="2" class="message-container">
          <div class="right-text text">
            <h2>Plastic and waste</h2>
            <p>
              Plastics are made from fossil fuels, releasing emissions through
              their production. Globally, about 40% of plastics are used as
              packaging. Because so little is recycled (and it would be hard to
              recycle that much plastic anyway), dealing with waste releases
              emissions when incinerated (burned) or put into landfill – making
              it a bigger climate problem than it initially seems.
            </p>
          </div>
          <div class="left-image image">
            <img src=".\assets\52MLDFVC4NJSHM5WBTKVBG6FKU.avif" />
          </div>
        </div>
        <div id="3" class="message-container">
          <div class="left-text text">
            <h2>Food production</h2>
            <p>
              Livestock reared for meat and dairy products emit methane, and
              agricultural soils emit gases like nitrous oxide, which is made
              from nitrogen in the soil through the use of fertiliser. As food
              production increases (with more fertilisers, more livestock, and
              the need for more crops to feed livestock), emissions will also
              increase.
            </p>
          </div>
          <div class="right-image image">
            <img src=".\assets\cows.jpeg" />
          </div>
        </div>
        <div id="4" class="message-container">
          <div class="right-text text">
            <h2>Transport</h2>
            <p>
              Cars, buses, trains, trucks, ships and planes, (unless electric
              and charged with renewable energy), all produce emissions by
              burning fossil fuels. In the UK, transport is the biggest
              contributor to climate change, responsible for 27% of emissions in
              2019, mostly from cars. International aviation and shipping will
              continue to be a significant contributor to climate change until
              demand reduces or alternatives to fossil fuels become available.
            </p>
          </div>
          <div class="left-image image">
            <img src=".\assets\carsSmog.webp" />
          </div>
        </div>
        <div id="5" class="message-container">
          <div class="left-text text">
            <h2>Energy production</h2>
            <p>
              A lot of power generation for electricity and the vast majority of
              home heating are still done by burning fossil fuels, such as gas.
              In the UK, emissions from electricity have gone down rapidly in
              recent years, thanks to our reductions in burning coal for energy
              and dramatic increases in renewable energy generation.
            </p>
          </div>
          <div class="right-image image">
            <img src=".\assets\powerplant.jpg" />
          </div>
        </div>
      </div>
      <div class="waveAnimation">
        <svg viewBox="0 0 500 150" preserveAspectRatio="none">
          <path
            class="w1 waveTop"
            d="M-8.74,71.55 C289.78,255.11 349.60,4.47 505.36,34.05 L500.00,150.00 L0.00,150.00 Z"
          />
          <path
            class="w2 waveMiddle"
            d="M-23.42,125.83 C187.63,45.89 299.38,57.73 526.80,123.86 L500.00,150.00 L0.00,150.00 Z"
          />
          <path
            class="w3 waveBottom"
            d="M-23.42,125.83 C172.96,-152.44 217.55,183.06 504.22,55.77 L500.00,150.00 L0.00,150.00 Z"
          />
        </svg>
      </div>
      <div id="smog-fade" style=""></div>
    </main>

    <script>
      //force #splash-image to behave properly on mobile
      function AdjustSplash() {
        if (window.innerHeight > window.innerWidth) {
          let splashWidth = screen.width;
          let splashHeight = splashWidth * (16 / 11.3);
          document.getElementById("splash-image").style.height =
            splashHeight + "px";
        } else document.getElementById("splash-image").style.height = "693px";
      }
      AdjustSplash();
      //call if window resized
      $(window).resize(function () {
        AdjustSplash();
      });

      //toggle smog effect
      var toggled = false;
      $(window).scroll(function () {
        var hT = $("#4").offset().top,
          hH = $("#4").outerHeight(),
          wH = $(window).height(),
          wS = $(this).scrollTop();
        console.log(hT - wH, wS);
        if (wS > hT + hH - wH && !toggled) {
          document.getElementsByTagName("body")[0].style.overflow = "hidden";
          document.getElementById("smog-fade").style.animation =
            "smog 8s cubic-bezier(0,0.7,0.8,1) 1";
          setTimeout(
            () =>
              (document.getElementsByTagName("body")[0].style.overflow =
                "visible"),
            6000
          );
          toggled = !toggled;
        }
      });
    </script>
  </body>
</html>
