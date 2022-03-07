
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial;
}

.header {
  text-align: center;
  padding: 32px;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.column {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
  max-width: 33%;
  padding: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
  width: 100%;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
  .column {
    -ms-flex: 50%;
    flex: 50%;
    max-width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    -ms-flex: 100%;
    flex: 100%;
    max-width: 100%;
  }
}
</style>

<!-- Header -->
<section class="recentImage container">
  <div class="header">
    <h1>Recent Images</h1>
    <!-- <p>Resize the browser window to see the responsive effect.</p> -->
  </div>

  <!-- Photo Grid -->
  <div class="row"> 
    <div class="column">
      <img src="https://th.bing.com/th/id/OIP.0ugK_EJSoDidST3nWvDUiQHaEb?pid=ImgDet&rs=1" style="width:100%" alt="">
      <img src="/Assets/Images/cocktail.jpg" style="width:100%" alt="">

    </div>
    <div class="column">
      <img src="/Assets/Images/cocktail2.jpg" style="width:100%" alt="">
      <img src="/Assets/Images/cocktails glass.jpg" style="width:100%" alt="">
 
    </div>  
    <div class="column">
      <img src="/Assets/Images/cocktails glass.jpg" style="width:100%" alt="">
      <img src="/Assets/Images/frogs.jpg" style="width:100%" alt="">
    </div>
    
  </div>
</section>

