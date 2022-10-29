let select = document.querySelectorAll(".currency");
let btn = document.querySelector('#btn');
let num = document.querySelector('#number');
let ans = document.querySelector('#ans');

fetch("https://api.frankfurter.app/currencies")
  .then(data => data.json())
  .then((data) => {
    let X = Object.entries(data);
    for (let i = 0; i < X.length; i++) {
      select[0].innerHTML += `<option value="${X[i][0]}">${X[i][0]}</option>`; 
      select[1].innerHTML += `<option value="${X[i][0]}">${X[i][0]}</option>`; // //cur symbol
      // select[1].innerHTML += `<option value="${X[i][0]}">${X[i][1]}</option>`; //cur Name
    }
  });

btn.onclick = function (){
  let cur1 = select[0].value;
  let cur2 = select[1].value;
  let value = num.value;
  if (cur1 != cur2 && num.value != "" && cur1.value != "" && cur2.value != "") {
    fetch(`https://api.frankfurter.app/latest?amount=${value}&from=${cur1}&to=${cur2}`)
      .then((val) => val.json())
      .then((val) => {
        let total = Object.values(val.rates)[0]
        ans.placeholder = `${value} ${cur1} = ${total} ${cur2}`;
      });
  }
  if(cur1 == cur2){
      ans.placeholder = "Choose Different Currencies"
  }if(num.value == ""){
    ans.placeholder ="Enter Amount of Money"
  }
}

num.onclick = function (){
  num.value = "";
}





/* elzero api */
// let select = document.querySelectorAll(".currency");
// let btn = document.querySelector('#btn');
// let num = document.querySelector('#number');
// let ans = document.querySelector('#ans');

// fetch("https://api.currencyfreaks.com/latest?apikey=0c3a783daac147b7b5dbff4f8c82fbd1")
//   .then(data => data.json())
//   .then((data) => {
//     let X = Object.keys(data.rates)
//     for (let i = 0; i < X.length; i++) {
//       console.log(X)
//       select[0].innerHTML += `<option value="${X[i]}">${X[i]}</option>`; 
//       select[1].innerHTML += `<option value="${X[i]}">${X[i]}</option>`;
//     }
//   });

// btn.onclick = function (){
//   let cur1 = select[0].value;
//   let cur2 = select[1].value;
//   let value = num.value;
//   if (cur1 != cur2 && num.value != "" && cur1.value != "" && cur2.value != "") {
//     fetch(`https://api.currencyfreaks.com/latest?apikey=0c3a783daac147b7b5dbff4f8c82fbd1`)
//       .then((val) => val.json())
//       .then((val) => {
//         let total = Object.values(val.rates)[0]
//         ans.placeholder = `${value} ${cur1} = ${total} ${cur2}`;
//       });
//   }
//   if(cur1 == cur2){
//       ans.placeholder = "Choose Different Currencies"
//   }if(num.value == ""){
//     ans.placeholder ="Enter Amount of Money"
//   }
// }

// num.onclick = function (){
//   num.value = "";
// }