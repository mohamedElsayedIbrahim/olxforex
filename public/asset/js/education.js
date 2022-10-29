let main = document.querySelector(".main-container")
let myRequest = new XMLHttpRequest();
        let idChanal = "UC_x5XG1OV2P6uZZ5FSM9Ttw"
        let noOfResult = "1000"
        let key = "AIzaSyBVApomqeduLVm7DxeWO9_HPNpyb1v7gDw"
        let url = `https://youtube.googleapis.com/youtube/v3/playlists?part=snippet%2CcontentDetails&channelId=${idChanal}&maxResults=${noOfResult}&key=${key}`;
        myRequest.open("GET", url);
        myRequest.setRequestHeader("Content-Type", "application/json");
        myRequest.onreadystatechange = function () {
        if (myRequest.readyState === 4 && myRequest.status === 200) {
            let jsDate = JSON.parse(myRequest.responseText);
            let response = jsDate.items            
                for (let i = 0; i<response.length; i++){
                  let x  = "videos"
                  if(response[i].contentDetails.itemCount < 2){
                    x = "video"
                  }
                  console.log(response[i])
                    main.innerHTML += `
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 card">
                    <img class="card-img-top" src="${response[i].snippet.thumbnails.high.url}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">${response[i].snippet.title}</h5>
                      <p class="card-title">${response[i].contentDetails.itemCount} ${x}</p>
                      <a href="http://127.0.0.1:5500/pages/videos.html?list=${response[i].id}" class="btn blue">Watch PlayList</a>
                    </div>
                  </div>
                    `
                }
        }
    }
    let data = JSON.stringify();
    myRequest.send(data);