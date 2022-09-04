
    <?php 
    include_once './header.php';
    if(isset($_POST['but'])){
      header('location:index.php');
      exit;
    }?>
    <!-- section form -->
    <form  method="POST">
    <!--section Product ADD,button -->
    <div class="div_box">
    <h1>Product ADD</h1>
    <div>   
    <button id="submit_id"  type="submit" name="submit" class="button_save">save</button> 
       <a href="./index.php"><button  name="but" class="button_cancele">CANCELL</button></a> 
   </div>
   </div>  
   <div class="divstyck"></div>
     <!--section input sku,name,price  -->
      <div class="form_div">
     <div class="div_input"><div class="div_child">#SKU</div><div><input class="input_sku" type="text" placeholder="#sku" name="sku"></div></div> 
     <div class="div_input"><div class="div_child">#Name</div><div><input class="input_sku"  type="text" placeholder="#name" name="name"></div></div>  
     <div class="div_input"><div class="div_child">#Prise ($)</div><div><input class="input_sku" type="text" placeholder="#prise" name="price"></div>
    </div> 
    <!--section type-switcher -->
    <div class="div_switcher">
      <div class="switcher">Type-Switcher</div>
      <div><select id="type" onchange="getSelectValue();" name="option_type">
        <option id="type_switcher" value="type-switcher">type-switcher</option>
        <option id="dvd" value="dvd">dvd</option>
        <option id="book" value="book">book</option>
        <option id="furniture" value="furniture">furniture</option>
     </select>
    </div>
    </div> 
    </div>
    <!-- section size,weigth,heigth,width,length -->
     <div> 
        <div class="dvd_none" id="div_dvd"> 
          <div class="div_text">Size (MB)</div><div><input id="size_id" name="size" placeholder="#size"  name="size"></div>
        </div>
        <div class="book_none" id="div_book">
        <div class="div_text">Wiegth (KG)</div> <input  id="weigth_id" name="weigth" placeholder="#weigth" >
        </div>
        <!-- section furniture -->
        <div class="furniture_none" id="div_furniture">
          <!-- section heigth -->
        <div class="div_furniture">
          <div class="div_text">Heigth (CM)</div>
          <div><input id="heigth_id" name="heigth" placeholder="#heigth"> 
        </div>
      </div> 
           <!-- section width -->
        <div class="div_furniture">
          <div class="div_text">Width (CM)</div>
          <div><input id="width_id" name="width" placeholder="#width">
        </div>
      </div>
        <!-- section length -->
        <div class="div_furniture">
          <div class="div_text">Length (CM)</div>
          <div><input id="length_id" name="length" placeholder="#length">
        </div>
      </div>
      </div>
     </div>
    </form>
      
   
    
  <script src="mein.js"></script>
 <div class="styck_div"></div>
</body>
</html>

 <?php
 include_once './classProduct/Product.php';
  
    ?>
 




