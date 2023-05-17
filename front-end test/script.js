// //製作一個基本計算機

// function cal(){
// var num1 = prompt('請輸入一個數值');
// var num2 = prompt('請輸入二個數值');
// document.write('您輸入的第一個數值為:' + num1 + '<br>');
// document.write('您輸入的第一個數值為:' + num2 + '<br>');
// num1 = parseInt(num1);
// num2 = parseInt(num2);
// document.write('兩個數字相加為:' + (num1 + num2) + '<br>');
// }

// function login(input){
//   var time=1;
//   var password=123;
//   while (password != input && input != 'exit' ) {
//       input = prompt('密碼輸入錯誤,再試一試,如果要離開請輸入exit');
//       time++;
//       if (input == 'exit' || time >= 3) return;
//   }
// alert("登入成功");

// }
// function handle_click(element){
//   // alert("很癢ㄟ~");
// console.log(element);
// element.innerText = '很癢ㄟ~';
// }

var btn = document.getElementById('btn');
console.log(btn);
btn.addEventListener('click', function () {
    //  alert('很癢ㄟ~');
     this.innerText = '很癢ㄟ~';
     this.style.color="#cc3";
});
// class Phone{
//   constructor(number,year,is_waterproof){
//   this.number=number;
//   this.year=year;
//   this.is_waterproof=is_waterproof;
//   }
//   phone_age(){
//     return 2023-this.year;
//   }
// }

