 <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          








        <form dir="rtl" method="post" action="post_to_google_sheet.php" id="id_form">
  <div class="form-group">
    <label for="exampleInputEmail1">  الاسم</label>
    <input name="name" type="text" class="form-control" id="exampleInputEmail1"  placeholder=" الاسم" required>
 
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">رقم الجوال </label>
    <input  name="phone" type="tel" class="form-control"   placeholder="5xxxxxxxxxx" minlength="9" maxlength="9"  required>
  </div>

 
  <input id="submit_button_id" type="submit" value="ارسال كود الخصم عبر وتساب" class="btn btn-primary" />

 
</form>

 














































































        




 

        </div>
        <div class="modal-footer">
        
        </div>
      </div>
    </div>
  </div>




  <script>


$("#id_form").on("submit", function(){
   //alert("sss");
    
   $("#submit_button_id").val("يرجى الانتظار لثواني ");
    
   //alert("okkk");
   return true;
 })







  </script>
