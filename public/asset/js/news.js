let main = document.querySelector(".main-container")

fetch('https://finnhub.io/api/v1/news?category=general&token=cdbecnqad3ibgg4mjef0cdbecnqad3ibgg4mjefg')
  .then(response => response.json())
  .then((response) => {
        // for (let i = 0; i < response.length; i++){
        for (let i = 0; i < 64; i++){
            if(i==16 || i==32 || i==48){
              main.innerHTML += `
              <section id="ads">
              <div class="container">
                  <img src="../img/3.png">
              </div>
              </section>
              `
            }
            main.innerHTML += `
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 card">
            <img class="card-img-top" style="height: 160px;" src="${response[i].image}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">${response[i].headline}</h5>
              <p class="card-title">Published By - ${response[i].source}</p>
              
              <button class="learn-more">
                <span class="circle" aria-hidden="true">
                  <span class="icon arrow"></span>
                </span>
                <a class="button-text" href="${response[i].url}" >Read this news</a>
              </button>
              
            </div>
          </div>
            `
        }
    })






// const options = {
//   method: 'GET',
//   headers: {
//     'X-RapidAPI-Key': '7f93dfb9e4msh4023f37256f9df4p1c4fecjsna8b1e56b275e',
//     'X-RapidAPI-Host': 'apidojo-yahoo-finance-v1.p.rapidapi.com'
//   }
// };
// fetch('https://apidojo-yahoo-finance-v1.p.rapidapi.com/auto-complete?q=tesla&region=US', options)
//   .then(response => response.json())
//   .then((response) => {
//         for(let i = 0;i<response.news.length;i++){
//             console.log(response.news[i])
//             main.innerHTML += `
//             <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 card">
//             <img class="card-img-top" style="height: 160px;" src="${response.news[i].thumbnail.resolutions[0].url}" alt="Card image cap">
//             <div class="card-body">
//               <h5 class="card-title">${response.news[i].title}</h5>
//               <p class="card-title">Published By - ${response.news[i].publisher}</p>
              
//               <button class="learn-more">
//                 <span class="circle" aria-hidden="true">
//                   <span class="icon arrow"></span>
//                 </span>
//                 <a class="button-text" href="${response.news[i].link}" >Read this news</a>
//               </button>
              
//             </div>
//           </div>
//             `
//         }
//     })



// const options2 = {
// 	method: 'GET',
// 	headers: {
// 		'X-RapidAPI-Key': '7f93dfb9e4msh4023f37256f9df4p1c4fecjsna8b1e56b275e',
// 		'X-RapidAPI-Host': 'mboum-finance.p.rapidapi.com'
// 	}
// };
// fetch('https://mboum-finance.p.rapidapi.com/ne/news', options2)
// 	.then(response => response.json())
// 	.then((response) => {
//         for(let i = 0;i<response.length;i++){
//             main.innerHTML += `
//             <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 card">
//             <div class="card-body">
//               <h5 class="card-title">${response[i].title}</h5>
//               <p class="card-title">Published By - ${response[i].source}</p>
//               <p class="card-title">${response[i].pubDate}</p>

//               <button class="learn-more">
//               <span class="circle" aria-hidden="true">
//                 <span class="icon arrow"></span>
//               </span>
//               <a class="button-text" href="${response[i].link}" target="_blank">Read this news</a>
//             </button>

//             </div>
//           </div>
//             `
//         }
//     })




    // function x(){
    //  let mainX = new Date();
    //  mainX.getMinutes()
    //  main.innerHTML = mainX
    // }

    // setInterval(x, 1000)