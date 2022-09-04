var dvd=document.getElementById('div_dvd');
var book=document.getElementById('div_book');
var furniture=document.getElementById('div_furniture');
var switcher=document.getElementById('type_switcher');
function Switcher(){
  dvd.className='dvd_none';
  book.className='book_none';
  furniture.className='furniture_none';
}
function Dvd(){
        dvd.className='dvd';
        book.className='book_none';
        furniture.className='furniture_none';
}
function Book(){
        dvd.className='dvd_none';
        book.className='book';
        furniture.className='furniture_none';
}
function Furniture(){
        dvd.className='dvd_none';
        book.className='book_none';
        furniture.className='furniture';
}
function getSelectValue(){
        var selectedValue=document.getElementById('type').value;
        if(selectedValue==='type-switcher'){
        Switcher();
        }
        else if(selectedValue==='dvd'){
        Dvd();
        }
        else if(selectedValue==='book'){
         Book();
        }
        else if(selectedValue==='furniture'){
        Furniture();
        }
  
}