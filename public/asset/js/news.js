let main = document.querySelector(".main-container")
// fetch('https://finnhub.io/api/v1/news?category=general&token=cdbecnqad3ibgg4mjef0cdbecnqad3ibgg4mjefg')
//   .then(response => response.json())
//   .then((response) => {
//         // for (let i = 0; i < response.length; i++){
//         for (let i = 0; i < 64; i++){
//             if(i==16 || i==32 || i==48){
//               main.innerHTML += `
//               <section id="ads">
//               <div class="container">
//                   <img src="../img/3.png">
//               </div>
//               </section>
//               `
//             }
//             main.innerHTML += `
//             <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 card">
//             <img class="card-img-top" style="height: 160px;" src="${response[i].image}" alt="Card image cap">
//             <div class="card-body">
//               <h5 class="card-title">${response[i].headline}</h5>
//               <p class="card-title">Published By - ${response[i].source}</p>
              
//               <button class="learn-more">
//                 <span class="circle" aria-hidden="true">
//                   <span class="icon arrow"></span>
//                 </span>
//                 <a class="button-text"  href="${response[i].url}" >Read this news</a>
//               </button>
              
//             </div>
//           </div>
//             `
//         }
//     })







// selecting loading div
let loading = document.querySelector("#loading");
    fetch('https://finnhub.io/api/v1/news?category=general&token=cdbecnqad3ibgg4mjef0cdbecnqad3ibgg4mjefg')
        .then(response => response.json())
        .then(response => {
          loading.style.display="none";
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
                <a class="button-text" target="_blank" onclick="fetchHandler()" href="${response[i].url}" >Read this news</a>
              </button>
              
            </div>
          </div>
            `
          }
        }
)
