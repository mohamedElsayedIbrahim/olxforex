let pageIdX = document.location.search
let pageId = pageIdX.slice(6)
let listGroup = document.querySelector("#listGroup");
let mainAccordion = document.querySelector("#mainAccordion")
let mainMenu = document.querySelector("#mainMenu")

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
    window.onload = function () {
      let myRequest = new XMLHttpRequest();
        let key = "AIzaSyBVApomqeduLVm7DxeWO9_HPNpyb1v7gDw"
        let noOfResult = "1000";
        let url =`https://youtube.googleapis.com/youtube/v3/playlistItems?part=snippet%2CcontentDetails&maxResults=${noOfResult}&playlistId=${pageId}&key=${key}`;
        myRequest.open("GET", url);
        myRequest.setRequestHeader("Content-Type", "application/json");
        myRequest.onreadystatechange = function () {
        if (myRequest.readyState === 4 && myRequest.status === 200) {
            let jsDate = JSON.parse(myRequest.responseText); 
            console.log(jsDate)         
            for (let i = 0; i<jsDate.items.length; i++){
                listGroup.innerHTML += `
                <li class="activeX list-group-item"
                onclick="getData(this.id, this.innerHTML, this.dataset.url)" 
                data-url="https://www.youtube.com/embed/${jsDate.items[i].snippet.resourceId.videoId}?list=${jsDate.items[i].snippet.playlistId}" 
                id="${jsDate.items[i].snippet.position+1}">
                <span>${jsDate.items[i].snippet.position+1} - </span> ${jsDate.items[i].snippet.title}
                </li>
                    `
                    getData(0,`${jsDate.items[0].snippet.position+1} - ${jsDate.items[0].snippet.title}`,`https://www.youtube.com/embed/${jsDate.items[0].snippet.resourceId.videoId}?list=${jsDate.items[0].snippet.playlistId}`)
                }
                  }
                  // add class active 
                  let activeX = document.querySelectorAll(".activeX");
                  // console.log(activeX)
                  activeX[0].classList.add('active')
                  activeX.forEach(x =>{
                    x.addEventListener("click", function(){
                      activeX.forEach(btn => btn.classList.remove('active'))
                      this.classList.add('active');
                    })
                  })
        }
    
    let data = JSON.stringify();
    myRequest.send(data);
}