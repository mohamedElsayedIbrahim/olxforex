let select = document.querySelectorAll(".currency");
let btn = document.querySelector('#btn');
let num = document.querySelector('#number');
let ans = document.querySelector('#ans');
const options = {
	method: 'GET',
	headers: {
		'X-RapidAPI-Key': '7f93dfb9e4msh4023f37256f9df4p1c4fecjsna8b1e56b275e',
		'X-RapidAPI-Host': 'currency-converter18.p.rapidapi.com'
	}
};
let From = document.querySelector("#From")
let To = document.querySelector("#To")


fetch('https://currency-converter18.p.rapidapi.com/api/v1/supportedCurrencies', options)
	.then(response => response.json())
  .then((data) => {
// console.log(data)
let arrSymbol = [];
let sortsSymbol;
for (let j = 0 ; j< data.length; j++){
  arrSymbol.push(data[j].symbol)
  sortsSymbol = arrSymbol.sort()
}
// console.log(sortsSymbol)
    for (let i = 0; i < data.length; i++) {
      From.innerHTML += `<option value="${sortsSymbol[i]}">${sortsSymbol[i]}</option>`; 
      To.innerHTML += `<option value="${sortsSymbol[i]}">${sortsSymbol[i]}</option>`; // //cur symbol      
      btn.onclick = function (){
        let cur1 = From.value;
        let cur2 = To.value;
        let value = num.value;
        const options = {
          method: 'GET',
          headers: {
            'X-RapidAPI-Key': '7f93dfb9e4msh4023f37256f9df4p1c4fecjsna8b1e56b275e',
            'X-RapidAPI-Host': 'currency-converter18.p.rapidapi.com'
          }
        };
        fetch(`https://currency-converter18.p.rapidapi.com/api/v1/convert?from=${cur1}&to=${cur2}&amount=${value}`, options)
          .then(response => response.json())
          .then((response) => {
            console.log(response)
            ans.placeholder = `${value} ${cur1} = ${response.result.convertedAmount} ${cur2}`
          })
        }

        let changeCurrency = document.querySelector("#changeCurrency");
        changeCurrency.onclick = function(){
          let cur1 = From.value;
          let cur2 = To.value;
          let value = num.value;

          let Temp = From.value
          From.value = To.value
          To.value = Temp

          let temp = cur1
          cur1 = cur2
          cur2 = temp

          fetch(`https://currency-converter18.p.rapidapi.com/api/v1/convert?from=${cur1}&to=${cur2}&amount=${value}`, options)
          .then(response => response.json())
          .then((response) => {
            // console.log(response)
            ans.placeholder = `${value} ${cur1} = ${response.result.convertedAmount} ${cur2}`
          })
        }

num.onclick = function (){
  num.value = "";
}

}})