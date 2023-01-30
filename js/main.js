let msg = 0;
let globalSumm=0;
let discountSumm=0;
let globalName='';
var cart = {}; //корзина

const checkLocaleStorage = () => {
  localStorage.getItem("object") != null ? (cart = JSON.parse(localStorage.getItem("object"))) : cart = {};
}


$('document').ready(function () {
  document.getElementById('lifeCrayFish').innerHTML = outInfo(lifeCrayfish, "lifeCrayfish");
  document.getElementById('boiledCrayFish').innerHTML = outInfo(boiledCrayfish, "boiledItem");
  document.getElementById('friedCrayFish').innerHTML=outInfo(friedCrayfish,"friedCrayfish");

  checkLocaleStorage();
  showCart();
  document.getElementById('html').style.overflow="auto";  
  // Добавление живых раков в корзину
  let elements = document.querySelectorAll(".lifeCrayfish_item");
  for (var i = 0; i < elements.length; i++) {
    elements[i].onclick = function () {
      let id = this.dataset.id;
      console.log(id);

      typeof cart[id] !== "undefined" ? cart[id].count++ : cart[id] = { name: lifeCrayfish[id].name, price: lifeCrayfish[id].price[0], img: lifeCrayfish[id].img, count: 1 };
      console.log(cart);
      localStorage.setItem("object", JSON.stringify(cart));
      showCart();
    };
  }
  document.querySelector(`#cart`).style.display = "none";
  





  // Добавление событий на карточки с разными ценами ( xs,xl и тд)
  const lengthArr = (arr) => {
    return Object.keys(arr).length;
  }
  
  lengthArr(cart) !=0 ? document.getElementById('showCart').style.display="flex" : document.getElementById('showCart').style.display="none";

  let cardBuy = document.querySelector('#cardBuy');

  
const createCard = (arr,item,count) =>{
  for (i = 1; i <= lengthArr(arr); i++) {
    i += count;
    document.querySelector(`${item}${i}`).onclick = function () {
      id = this.dataset.id;
      document.querySelector('#storeCard').style.display = "block";
      document.querySelector('#cardItemImg').src = arr[id].img;
      document.querySelector('#cardItemName').innerHTML = arr[id].name;
      cardBuy.dataset.id = id;
      cardBuy.dataset.price = arr[id].price[0];
      cardBuy.dataset.size = arr[id].size[0];
      cardBuy.dataset.name = arr[id].name;
      document.querySelector('#cardItemDetal').innerHTML = arr[id].detalInfo;
      document.getElementById('cardItemSelect').dataset.id = id;
      document.querySelector('#cardItemPrice').innerHTML = `${arr[id].price[0]} грн.`;
      let out = "";
      document.getElementById('cardItemSelect').innerHTML = "";
      for (let i = "0"; i < arr[id].price.length; i++) {
        out = `<option id="sizeOption${i}" value="${i}" data-price="${arr[id].price[i]}">${arr[id].size[i]} </option>`;
        document.getElementById('cardItemSelect').innerHTML += out;
      }
      document.querySelector(`#cardItemSelect`).onchange = function () {
        let price = arr[this.dataset.id].price[this.value];
        let size = arr[this.dataset.id].size[this.value];
        cardBuy.dataset.size = size;
        cardBuy.dataset.price = price;

        document.querySelector('#cardItemPrice').innerHTML = `${price} грн.`;
      }
      document.querySelector(`#cardBuy`).onclick = function () {
        let id = this.dataset.id + this.dataset.size;

        typeof cart[id] !== "undefined" ? cart[id].count++ : cart[id] = { name: this.dataset.name, price: this.dataset.price, img: arr[this.dataset.id].img, size: this.dataset.size, count: 1 };
        localStorage.setItem("object", JSON.stringify(cart));
        showCart();
      }
    }

    i -= count;
  }
}

createCard(boiledCrayfish,'#boiledItem',2000);
createCard(friedCrayfish,'#friedCrayfish',3000);



});


//Вывод карточек
const outInfo = (array, htmlName) => {
  let out = ``;
  for (var key in array) {
    out += `<div class="${htmlName}_item"  data-id="${key}" id="${htmlName}${key}"> `;
    out += `<img src="${array[key].img}" />`;
    out += `<h4> ${array[key].name}</h4>`
    out += `<div class="description">${array[key].description}  </div>`;
    out += `<p class="price">${array[key].price[0]} грн.</p>                     <a  class="buy">Заказать</a>`;
    out += `</div>`;
  }
  return out;
}



// Добавление карточек в корзину
const showCart = () => {
  let out = '';
  let summ = 0;
  document.querySelector('#storeCard').style.display = "none";
  for (let key in cart) {
    let price = cart[key].price * cart[key].count;
    out += ` <div class="cartFull"><div class="cartFullLeft"><img src="${cart[key].img}" alt=""> `;
    out += `<div class="cartMob"><div class="cartInfo">  <p class="" id="">${cart[key].name}</p>
    <p id=""> ${cart[key].size != undefined ? `Размер- ${cart[key].size}` : ` `} </p> </div><div class="cartFullRight"> <div class="CartFullCount"><img src="img/cart/minus.svg"  onclick=minusCart('${key}') /> <p> ${cart[key].count} </p><img src="img/cart/plus.svg"  onclick=addCart('${key}') /> </div> <div class="cartPrice"> <p> ${price} грн.</p> </div></div></div><img src="img/cart/exit.svg"  onclick=deleteCart(${key}) class="cartExit"/></div></div>`
    summ += +cart[key].price * +cart[key].count;

  }
  +msg != 0 ? (document.getElementById('discount').innerText = `Ваша скидка - ${msg}%`, price = (+summ - ((+summ / 100) * msg)), document.getElementById('price').innerText = `Всего со скидкой - ${price} грн.`
  ) : document.querySelector('#price').innerText = `Всего - ${summ} грн.`;

  globalSumm = summ;
  discountSumm = price;


  document.querySelector('#cartItem').innerHTML = out;
  document.querySelector(`#cart`).style.display = 'flex';
  document.getElementById('html').style.overflow="hidden";  
  document.querySelector(`#cart`).style.overflow = 'auto';
  countCart();

}


//Удаление с корзины
const minusCart = (key) => {
  cart[key].count > 1 ? cart[key].count-- : delete cart[key];
  localStorage.setItem("object", JSON.stringify(cart));

  showCart();
}


//Добавление в корзину
const addCart = (key) => {
  cart[key].count++;
  localStorage.setItem("object", JSON.stringify(cart));
  showCart();
}

//Удаление с корзины
const deleteCart = (key) => {
  delete cart[key];
  localStorage.setItem("object", JSON.stringify(cart));
  showCart();
}

//Подсчет кол-во заказов
const countCart = () => {
  let out = 0;
  for (let key in cart) {
    let count = cart[key].count;
    out += +count;
    +out;
  }
  document.querySelector('#showCartCount').innerHTML = out;


}


const exitThanks = () =>{
  document.getElementById('cart').style.display="none";
  document.getElementById('cartThanks').style.display="flex";

}
const exthanks = () =>{
  document.getElementById('cartThanks').style.display="none";
  document.getElementById('html').style.overflow = "auto";  
  document.getElementById('showCart').style.display="none";
}


lobsterPrice
const lobster = () =>{
  typeof cart[4001] !== "undefined" ? cart[4001].count++ : cart[4001] = { name: 'Вареный лобстер', price:+document.getElementById('lobsterPrice').innerText,img:document.getElementById('lobsterImg').src, count: 1 };
  localStorage.setItem("object", JSON.stringify(cart));
  showCart();
}


const exit = () => {
  document.getElementById('cart').style.display = 'none';
  document.getElementById('html').style.overflow = "auto";  
  document.getElementById('showCart').style.display = 'flex';

}

document.querySelector(`#promoQuestion`).onclick = function () {
  document.getElementById('promoQuestion').style.display = 'none';
  document.querySelector(`#promoContent`).style.display = `flex`
}

document.querySelector(`#showCart`).onclick = function () {
  document.querySelector(`#showCart`).style.display = "none";
  document.querySelector(`#cart`).style.display = "flex";
  document.getElementById('html').style.overflow="hidden";  
  document.querySelector(`#cart`).style.overflow = 'auto';

}


//Плавные якоря
$(".arrow").click(function (id) {
  $('html, body').animate({ scrollTop: '+=' + window.innerHeight }, 'slow');
});

jQuery(window).scroll(function () {
  var $sections = $('section');
  $sections.each(function (i, el) {
    var top = $(el).offset().top - 300;
    var bottom = top + $(el).height();
    var scroll = $(window).scrollTop();
    var id = $(el).attr('id');
    if (scroll > top && scroll < bottom) {
      $('a.active').removeClass('active');
      $('a[href="#' + id + '"]').addClass('active');

    }
  })
});

$("nav").on("click", "a", function (event) {
  event.preventDefault();
  var id = $(this).attr('href'),
    top = $(id).offset().top;
  $('body,html').animate({ scrollTop: top }, 800);
});

$("#yakor").click(function () {
  document.getElementById('hamburger').checked = false;
});




//Бегущая строка

var ticker = document.querySelector('.ticker')
  , list = document.querySelector('.ticker__list')
  , clone = list.cloneNode(true)

ticker.append(clone)



$('#form1').submit(function(e) {
  e.preventDefault()
  e.stopImmediatePropagation()
let name = document.getElementById("formName").value;
let phone = document.getElementById("formPhone").value;
let email = document.getElementById("formEmail").value;
let address = document.getElementById("formAddress").value;
+msg;
let price = 0;
let order ='';
let summ=0;
let size=``;
for (let key in cart) {
size = `${cart[key].size != undefined ? `${cart[key].size},` : ` `}`;
summ = +cart[key].price * +cart[key].count;
order += `benterb ${cart[key].name}, ${size} ${cart[key].count}, ${summ}; ` ;
}
msg === 0 ? price = `заказа - ${globalSumm}` : price = `заказа - ${globalSumm}, со скидкой - ${discountSumm} `;

function validateEmail(email) {
  var re = /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;
  return re.test(String(email).toLowerCase());
}
if (validateEmail(email)) {
  document.getElementById('emailError').style.display="none";
  fetch("main.php?name="+name+"&phone=" +phone+"&email=" +email+"&summ=" +price+"&promo=" +globalName+"&order=" +order+"&address=" +address);
cart={};
 localStorage.setItem("object", JSON.stringify(cart));
showCart();
exitThanks();
// lengthArr(cart) !=0 ? document.getElementById('showCart').style.display="flex" : document.getElementById('showCart').style.display="none";
$('#form1').trigger('reset');
}
else{
  document.getElementById('emailError').style.display="flex";
}


});



$('#discount').submit(function (e) {
  e.preventDefault()
  e.stopImmediatePropagation()
  $.post(
    'api.php', // адрес обработчика
    $("#discount").serialize(), // отправляемые данные
    function (api) { // получен ответ сервера
      msg = api;
      +msg;
      discount(msg);

    }

  );
  globalName = `${document.getElementById('discountName').value}`;

  return false;
});

const discount = (msg) => {

  let summ = 0;
  for (let key in cart) {
    summ += +cart[key].price * +cart[key].count;
  }
  let price = summ;
  +msg != 0 ? (document.getElementById('discount').innerText = `Ваша скидка - ${msg}%`, price = (+summ - ((+summ / 100) * msg))
  ) : document.getElementById('discountInfo').innerText = 'Вы ввели неправильный промокод';
  document.getElementById('price').innerText = `Всего со скидкой - ${price} грн.`;
  globalSumm = summ;
  discountSumm = price;
  globalName += `(${msg}%)`;

}