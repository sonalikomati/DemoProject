<?php
include("header.php");
?>
<div class="container">
  <h1 style="text-align:center;margin-bottom:50px;">Billing Details</h1>
    <form>
      <div style="margin-top:150px">
        <div class="form-group">
          <div class="row"  style="margin-left:100px">
            <div class="col-md-5">
              <label for="">Room Charges</label>
              <input type="text" class="form-control" style="border:solid 2px grey;border-radius:5px;">
              <small id="" class="form-text text-muted"></small>
            </div>
          </div>
        </div>

        
        <div class="form-group">
          <div class="row"  style="margin-left:100px">
            <div class="col-md-5">
              <label for="">Total</label>
              <input type="text" class="form-control" style="border:solid 2px grey;border-radius:5px;">
              <small id="" class="form-text text-muted"></small>
            </div>
          </div>
        </div>
        
        <div style="margin-left:320px;margin-top:60px;">
          <button type="submit" class="btn btn-warning">Pay</button>
        </div>
      </div>
        
        <div class="form-group">
          <div class="row">
            <div class="col-md-6" style="margin-left:780px;margin-top:-340px">
              <img src="img/qr1.jpg" alt="QRcode" style="height:450px;">
              <small id="" class="form-text text-muted"></small>
            </div>
          </div>
        </div>
    </form>
</div>
<?php
include('footer.php');
?>