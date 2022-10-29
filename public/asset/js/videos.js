// let pageIdX = document.location.search
// let pageId = pageIdX.slice(6)

// let main = document.querySelector(".main-container")
// let myRequest = new XMLHttpRequest();
//         let key = "AIzaSyBVApomqeduLVm7DxeWO9_HPNpyb1v7gDw"
//         let noOfResult = "1000";
//         let url =`https://youtube.googleapis.com/youtube/v3/playlistItems?part=snippet%2CcontentDetails&maxResults=${noOfResult}&playlistId=${pageId}&key=${key}`;
//         myRequest.open("GET", url);
//         myRequest.setRequestHeader("Content-Type", "application/json");
//         myRequest.onreadystatechange = function () {
//         if (myRequest.readyState === 4 && myRequest.status === 200) {
//             let jsDate = JSON.parse(myRequest.responseText);          
//             for (let i = 0; i<jsDate.items.length; i++){
//                 console.log(jsDate.items[i])
//                 main.innerHTML += `
//                 <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 card">
//                 <img class="card-img-top" src="${jsDate.items[i].snippet.thumbnails.high.url}" alt="Card image cap">
//                     <div class="card-body">
//                       <h5 class="card-title">${jsDate.items[i].snippet.title}</h5>
//                       <p class="card-title">Video Number ${jsDate.items[i].snippet.position+1}</p>
                      
//                       <a href="https://www.youtube.com/embed/${jsDate.items[i].snippet.resourceId.videoId}?list=${jsDate.items[i].snippet.playlistId}" class="btn green">Watch Video</a>

//                     </div>
//                   </div>
//                     `
//                     console.log(jsDate.items[i].snippet.resourceId.videoId)
//                 }
//         }
//     }
//     let data = JSON.stringify();
//     myRequest.send(data);



let pageIdX = document.location.search
let pageId = pageIdX.slice(6)

let listGroup = document.querySelector("#listGroup");
let mainAccordion = document.querySelector("#mainAccordion")
let mainMenu = document.querySelector("#mainMenu")

let myRequest = new XMLHttpRequest();
        let key = "AIzaSyBVApomqeduLVm7DxeWO9_HPNpyb1v7gDw"
        let noOfResult = "1000";
        let url =`https://youtube.googleapis.com/youtube/v3/playlistItems?part=snippet%2CcontentDetails&maxResults=${noOfResult}&playlistId=${pageId}&key=${key}`;
        myRequest.open("GET", url);
        myRequest.setRequestHeader("Content-Type", "application/json");
        myRequest.onreadystatechange = function () {
        if (myRequest.readyState === 4 && myRequest.status === 200) {
            let jsDate = JSON.parse(myRequest.responseText);          
            for (let i = 0; i<jsDate.items.length; i++){
                listGroup.innerHTML += `
                <li class="activeX list-group-item"
                onclick="getData(this.id, this.innerHTML, this.dataset.url)" 
                data-url="https://www.youtube.com/embed/${jsDate.items[i].snippet.resourceId.videoId}?list=${jsDate.items[i].snippet.playlistId}" 
                id="${jsDate.items[i].snippet.position+1}">
                <span>${jsDate.items[i].snippet.position+1} - </span> ${jsDate.items[i].snippet.title}
                </li>
                    `
                  }
                  // add class active 
                  let activeX = document.querySelectorAll(".activeX");
                  console.log(activeX)
                  activeX.forEach(x =>{
                    x.addEventListener("click", function(){
                      activeX.forEach(btn => btn.classList.remove('active'))
                      this.classList.add('active');
                    })
                  })

        }
    }
    let data = JSON.stringify();
    myRequest.send(data);

    
    function getData(id,name,url){
      mainAccordion.innerHTML = 
      `
      <div id="accordion${id}">
        <div class="card">
          <div class="card-header">
            ${name}
          </div>
          <div class="card-body">
          <iframe width="1280" height="720" 
            src="${url}" 
            frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; 
            picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
  </div>
      `
    }