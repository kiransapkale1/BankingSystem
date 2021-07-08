<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    .grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  justify-items: center;
  align-items: center;
  grid-gap: 15px;
}

.flip-card {
  border-style: hidden;
  background-color: transparent;
  width: 350px;
  height: 310px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front,
.flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #fff;
  color: black;
}

.flip-card-back {
  background-image: linear-gradient(to right, #a517ba, #5f1782);
  color: white;
  transform: rotateY(180deg);
}
</style>
</head>
<body style="background-color: #f8f9fa;">
<h1 style="text-align:center">OUR SERVICES</h1>
<section id="team">
  <div class="container">
    <div class="grid">
      <!-- #str heroes -->
      <!-- #abaddon -->

      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="img/home.png" alt="Avatar" style="width:350px;height:310px;"  />
          </div>
          <div class="flip-card-back">
            <br />
            <h1>Home Loan</h1>
            <p>Apply Housing loan Online</p>
            <p>at 6.75% Interest Rate</p>
          </div>
        </div>
      </div>

      <!-- #alchemist -->
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="img/education.png" alt="Avatar" style="width:350px;height:310px;" />
          </div>
          <div class="flip-card-back">
            <h1>Educational Loan</h1>
            <p>Apply Educational loan Online</p>
            <p>at 8.75% Interest Rate</p>
          </div>
        </div>
      </div>

      <!-- #axe -->
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="img/medical.png" alt="Avatar" style="width:350px;height:310px;"  />
          </div>
          <div class="flip-card-back">
            <h1>Medical Loan</h1>
            <p>Apply Medical loan Online</p>
            <p>at 10.75% Interest Rate</p>
          </div>
        </div>
      </div>

      <!-- #beastm -->
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="img/vehicle.png" alt="Avatar" style="width:350px;height:310px;" />
          </div>
          <div class="flip-card-back">
            <h1>Vechiles Loan</h1>
            <p>Apply Vehicles loan Online</p>
            <p>at 7.75% Interest Rate</p>
          </div>
        </div>
      </div>
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="img/personal.png" alt="Avatar" style="width:350px;height:310px;"  />
          </div>
          <div class="flip-card-back">
          <h1>Personal Loan</h1>
          <p>Apply Housing loan Online</p>
            <p>at 9.75% Interest Rate</p>
          </div>
        </div>
      </div>

      <!-- #alchemist -->
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="img/business.png" alt="Avatar" style="width:350px;height:310px;"  />
          </div>
          <div class="flip-card-back">
            <h1>Business Loan</h1>
            <p>Apply Business loan Online</p>
            <p>at 6.75% Interest Rate</p>
          </div>
        </div>
      </div>

      <!-- #axe -->
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="img/gold.png" alt="Avatar" style="width:350px;height:310px;" />
          </div>
          <div class="flip-card-back">
            <h1>Gold Loan</h1>
            <p>Apply Gold loan Online</p>
            <p>at 6.75% Interest Rate</p>
          </div>
        </div>
      </div>
</div>
</div>
</body>
</html>