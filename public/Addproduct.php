
    <?php 
    include_once '../views/partials/header.php';
   
     $errors=include_once '../views/product/Errors/errors.php'; 
   
    if(isset($_POST['but'])){
      header('location:index.php');
      exit;
    }

    ?>
    <!-- section form -->
    <form  method="POST">
    <!--section Product ADD,button -->
    <div class="div_box">
    <h1>Product ADD</h1>
    <div>   
    <button id="submit_id"  type="submit" name="submit" class="button_save">save</button> 
     <button  name="but" class="button_cancele">CANCELL</button> 
   </div>
   </div>  
   <div class="divstyck"></div>
     <!--section input sku,name,price  -->
     <!-- div sku -->
      <div class="form_div">
     <div class="div_input"><div class="div_child">#SKU</div><div><input class="input_sku" type="text" 
     placeholder="#sku" name="sku"  value="<?php if(!empty($sku)){echo $sku;} ?>">
     </div>
     </div>
     <?php if(!empty($errors[0])): ?> <div class='errors_div'><?php  echo $errors[0];?></div><?php endif; ?> 
      <!-- div name -->
     
     <div class="div_input"><div class="div_child">#Name</div><div><input class="input_sku"  type="text" 
     placeholder="#name" name="name" value="<?php if(!empty($name)){echo $name;} ?>">
    </div>
    </div>  
     <?php if(!empty($errors[1])): ?> <div class="errors_div"><?php  echo $errors[1];?></div><?php endif; ?> 

      <!-- div price -->
     <div class="div_input"><div class="div_child">#Prise ($)</div><div><input class="input_sku" type="text"
      placeholder="#prise" name="price" value="<?php if(!empty($price)){echo $price;} ?>"></div> </div> 
     <?php if(!empty($errors[2])): ?> <div class="errors_div"><?php  echo $errors[2];?></div><?php endif; ?>

    <!--section type-switcher -->
    <div class="div_switcher">
      <div class="switcher">Type-Switcher</div>
      
      <div><select id="type" onchange="getSelectValue();" name="option_type" value="<?php echo $option_type; ?>">
        <option id="type_switcher" value="type-switcher">type-switcher</option>
        <option id="dvd" value="dvd">dvd</option>
        <option id="book" value="book">book</option>
        <option id="furniture" value="furniture">furniture</option>
     </select>
    </div>
    </div>
     <?php if(!empty($errors[3])): ?> <div class="errors_div"><?php  echo $errors[3];?></div><?php endif; ?>
    </div>
    <!-- section size,weigth,heigth,width,length -->
     <div> 
         <!-- div size -->
        <div class="dvd_none" id="div_dvd"> 
          <div class="div_text" >Size (MB)</div><div class="farnitur_errors"><input id="size_id" name="size"
           placeholder="#size" value="<?php if(!empty($size)){echo $size;} ?>" >
          <?php if(!empty($errors[4])):?> <div class="errors_div"><?php  echo $errors[4];?></div><?php endif;?>
        </div>
        </div> 
         <!-- div weigth -->
        <div class="book_none" id="div_book">
        <div class="div_text">Wiegth (KG)</div> <div class="farnitur_errors"><input  id="weigth_id" name="weigth"
         placeholder="#weigth" value="<?php if(!empty($weigth)){echo $weigth;} ?>">
         <?php if(!empty($errors[5])): ?> <div><?php  echo $errors[5];?></div><?php endif;?> 
        </div>
       </div>
      
        <!-- section furniture -->
        <div class="furniture_none" id="div_furniture">
          <!-- section heigth -->
        <div class="div_furniture">
          <div class="div_text">Heigth (CM)</div>
          <div><input id="heigth_id" name="heigth" placeholder="#heigth" 
          value="<?php if(!empty($heigth)){echo $heigth;} ?>"> 
        
        <?php if(!empty($errors[6])): ?> <div><?php  echo $errors[6];?></div><?php endif; ?>
      </div> 
    </div>
           <!-- section width -->
        <div class="div_furniture">
          <div class="div_text">Width (CM)</div>
          <div><input id="width_id" name="width" placeholder="#width"
          value="<?php if(!empty($width)){echo $width;} ?>">
           <?php if(!empty($errors[7])):?> <div><?php  echo $errors[7];?></div><?php endif;?>
        </div>
       
      </div>
        <!-- section length -->
        <div class="div_furniture">
          <div class="div_text">Length (CM)</div>
          <div><input id="length_id" name="length" placeholder="#length"
          value="<?php if(!empty($length)){echo $length;} ?>">
        
        <?php if(!empty($errors[8])): ?> <div><?php  echo $errors[8];?></div><?php endif; ?>
      </div>
      </div>
      </div>
     </div>
    </form>
      

  <script src="./javascript/mein.js"></script>

</body>
</html>

 <?php
 //
  include_once '../views/product/abstract/book.php';
//include_once '../views/product/classProduct/Product.php';
  
?>
 




