

<section class=" appointment"  >
        <div class="appointment-section">
            <div class="container">


            
















                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="form">
                            <div class="appointment-form text-center">



          

<div class="container h-100 d-flex justify-content-center">
<div class="appointment-title text-light" id="myloader"         >
<div class="loader"></div> 
</div>
</div>


<div class="container h-100 d-flex justify-content-center">

<div class="appointment-title text-light"  id="done_icon"  >
<img src="ads/done.gif" class="img-fluid" width='100px' height='100px' alt="Responsive image"   >

</div>

</div>







                                <form       method="POST" enctype="multipart/form-data" name="myform" bgcolor=”#800000" action="https://kar.pscye.com/api/fu">





                                    <p class="appointment-title text-light">     

                                    <?php

include 'info.php';

 echo $info['ev_form_sub1'];




?>
                                    
                                    </p>
                                    <p class="appointment-title text-light" style="font-size:1.2em;direction:rtl">   
                                  
                                  
                                  
                                  
                                    <?php

include 'info.php';

 echo $info['ev_form_sub2'];




?>
                                  
                                  
                                  
                                  
                                  
                                  
                                  
                                  
                                  </p>












 











                                  <font    color="white">كيف تقيم جودة أي من منتجاتنا</font> 
                                  <br>
                                  <br>
                                   <br>
                                    <br>
                                  <font color="white"> اشتريتها  بشكل عام؟</font>
                                    <br>
                                    <br>
                                    <br>



                                  <div class="form-group " dir="rtl">
                                        <select name="quality" id="servicerb" class="form-control" aria-label="عرض زراعة الأسنان" required>

                                       

<option value='1/5'>1⭐</option>
<option value='2/5'>2⭐⭐</option>
<option value='3/5'>3⭐⭐⭐</option>
<option value='4/5'>4⭐⭐⭐⭐</option>
<option value='5/5'>5⭐⭐⭐⭐⭐</option>
                                        </select>
                                    </div>




                                    <font color="white"> صورة المنتج ان وجد </font> 
                                    <br>
                                    <br>
                                    <br>
                                    <div class="form-group">
                                   
                                     
                                   


                                     <input name="file" type="file" class="form-control" placeholder="الاسم" dir="rtl" required>
                                 </div>









                                 <font color="white">ما مدى رضاك عن تعامل البائعين معك ؟

*</font> 
                                    <br>
                                    <br>
                                    <br>



                                  <div class="form-group " dir="rtl">
                                        <select name="sellers_satis" id="servicerb" class="form-control" aria-label="عرض زراعة الأسنان" required>

                                       

<option value='1/5'>1⭐</option>
<option value='2/5'>2⭐⭐</option>
<option value='3/5'>3⭐⭐⭐</option>
<option value='4/5'>4⭐⭐⭐⭐</option>
<option value='5/5'>5⭐⭐⭐⭐⭐</option>
                                        </select>
                                    </div>


 



                       



<div class="form-group " dir="rtl">
                                        <select name="branch1" id="servicerb" class="form-control" aria-label="عرض زراعة الأسنان" required>

                                       
<option value='  لم يتم اختيار فرع'> ملاحظتك في اي فرع </option>
<option value='فرع النسيم'>فرع النسيم </option>
<option value='فرع الصحابة'>فرع الصحابة</option>
 
                                        </select>
                                    </div>












<font color="white">ما مدى رضاك عن تعامل الكاشير معك ؟

*</font> 
                                    <br>
                                    <br>
                                    <br>



                                  <div class="form-group " dir="rtl">
                                        <select name="cashier_satis" id="servicerb" class="form-control" aria-label="عرض زراعة الأسنان" required>

                                       
<option value='1/5'>1⭐</option>
<option value='2/5'>2⭐⭐</option>
<option value='3/5'>3⭐⭐⭐</option>
<option value='4/5'>4⭐⭐⭐⭐</option>
<option value='5/5'>5⭐⭐⭐⭐⭐</option>
                                        </select>
                                    </div>




                                   

                                    <font color="white">إجمالاً ماهو مستوى رضاك 

*</font> 
<br>
<br>
                                    <br>
                                    <br>
<font color="white"> عن تجربة تسوقك من فلادولشي</font>
                                    <br>
                                    <br>
                                    <br>



                                  <div class="form-group " dir="rtl">
                                        <select name="total_satis" id="servicerb" class="form-control" aria-label="عرض زراعة الأسنان" required>

                                       

<option value='1/5'>1⭐</option>
<option value='2/5'>2⭐⭐</option>
<option value='3/5'>3⭐⭐⭐</option>
<option value='4/5'>4⭐⭐⭐⭐</option>
<option value='5/5'>5⭐⭐⭐⭐⭐</option>
                                        </select>
                                    </div>






                                    



                                    <font color="white">يرجى كتابة ملاحظتك</font> 
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <font color="white">مع اسمك ورقم الجوال ،اذا كانت هناك مشكله </font> 
                                    <br>
                                    <br>
                                    <br>
                                 <div class="form-group" >
     
    <input type="text" name="note"      placeholder="" class="r-form-1-first-name form-control" id="r-form-1-first-name" dir="rtl" required  >
</div>

























   
                                   

                                 


                                   



 


 





                                     



























                                    <button id="send" type="submit" class="btn submit-btn">ارسال </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 passion">
                        <div class="text-center text-lg-right">
                            <h4 class="text-light">
                            <?php

include 'info.php';

 echo $info['lt_sub1'];




?>
                            </h4>
                            <br />
                            <p class="text-light" style="font-size: 1.2em; font-size: 1.2em; font-family: inherit !important ">             <?php

include 'info.php';

 echo $info['lt_sub2'];




?>
             </p>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>

   <br>
   <br>
    <section>


    <style>

font
            {
                font-family:    Arial, Helvetica, sans-serif;
                font-size:      16px;
                font-weight:    bold;
            }

    </style>
