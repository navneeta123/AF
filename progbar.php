<html>
<head>
<style>
.referral-credit-outer-circle{
  background: #fff;
  width: 92px;
  height:92px;
  border-radius:90px;
	box-shadow: 0 0 0 2px #fff, 0 0 0 6px #666;
  margin: 20px;
  position: absolute;

}

.mask-referral-credit-inner-circle{
  transform: rotate(180deg);
  width: 100%;
  height: 50%;
  overflow: hidden;
  position: absolute;
  bottom: 0;
  
}

.referral-credit-inner-circle{
  width: 80px;
  height:80px;
  border-radius:80px;
  border: solid 6px #7aaeda;
  background: #95bee1;
}
</style>
</head>
<body>

<form action="">
<input type="text" name="percent"></input>
</form>
<div class = "referral-credit-outer-circle">
<span class="referral-credit-inner-icon" data-icon="H" style="color:"></span>
  <div class = "mask-referral-credit-inner-circle" style = "height: 70%">
    <div class = "referral-credit-inner-circle"></div>
  </div>
</div>
</body>
</html>