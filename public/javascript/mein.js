var dvd = document.getElementById('div_dvd');
var book = document.getElementById('div_book');
var furniture = document.getElementById('div_furniture');
var switcher = document.getElementById('type_switcher');

var cancel_btn = document.getElementById("cancel_btn");
var submitBTN = document.getElementById("submit_id");
var sku_input = document.getElementById("sku_input");
var name_input = document.getElementById("name_input");
var price_input = document.getElementById("price_input");
var type_selector = document.getElementById("type");

var size_id = document.getElementById("size_id");
var weigth_id = document.getElementById("weigth_id");
var heigth_id = document.getElementById("heigth_id");
var width_id = document.getElementById("width_id");
var length_id = document.getElementById("length_id");

submitBTN.addEventListener("click", () => {
        var data = {
                sku: sku_input.value,
                name: name_input.value,
                price: price_input.value,
                option_type: type_selector.value,
                size: size_id.value,
                weigth: weigth_id.value,
                heigth: heigth_id.value,
                width: width_id.value,
                length: length_id.value,
        }

        fetch("../app/vendor/views/product/InsertProduct/InsertProduct.php", {
                method: 'POST',
                headers: {
                        'Content-Type': 'application/json',
                },
                body: JSON.stringify(data),
        })
})

cancel_btn.addEventListener("click", () => {

        window.location.href = window.location.href.split("Addproduct.php")[0];

})

function Switcher() {
        dvd.className = 'dvd_none';
        book.className = 'book_none';
        furniture.className = 'furniture_none';
}

function Dvd() {
        dvd.className = 'dvd';
        book.className = 'book_none';
        furniture.className = 'furniture_none';
}

function Book() {
        dvd.className = 'dvd_none';
        book.className = 'book';
        furniture.className = 'furniture_none';
}

function Furniture() {
        dvd.className = 'dvd_none';
        book.className = 'book_none';
        furniture.className = 'furniture';
}

function getSelectValue() {
        var selectedValue = document.getElementById('type').value;
        if (selectedValue === 'type-switcher') {
                Switcher();
        }
        else if (selectedValue === 'dvd') {
                Dvd();
        }
        else if (selectedValue === 'book') {
                Book();
        }
        else if (selectedValue === 'furniture') {
                Furniture();
        }
}