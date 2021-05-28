let addBox = document.querySelector(".add-box");
let editBox = document.querySelector(".edit-box")
let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
let qrbox = document.querySelector("#qrbox");


//ADD PARTS BUTTON AND QR SCANNER FUNCTION
document.getElementById("addpartbtn").addEventListener("click", function(){
  event.preventDefault();
  if(addBox.style.display === "block"){
    addBox.style.display = "none";
    if(qrbox.style.display= "block"){
      scanner.stop();
      qrbox.style.display= "none";
    }
  }else{
    addBox.style.display = "block";

    document.getElementById("addqrscanner").addEventListener("click", function() {
      if (qrbox.style.display === "block"){
        qrbox.style.display= "none";
        scanner.stop();
      }else{
        qrbox.style.display= "block";
        scanner.addListener('scan', function (content) {
          console.log(content);
          qrbox.style.display= "none";
          scanner.stop();
        });
        Instascan.Camera.getCameras().then(function (cameras) {
          if (cameras.length > 0) {
            scanner.start(cameras[0]);
          } else {
            console.error('No cameras found.');
          }
        }).catch(function (e) {
          console.error(e);
        });
        scanner.addListener('scan', function(c){
        document.getElementById('qr').value=c;
        })
      }
    })
  }
})

function qrerr(){
    event.preventDefault();
    console.log ("this shit whack");
}


function addbtn(){
  event.preventDefault();
  if(addBox.style.display === "block"){
    addBox.style.display = "none";
  }else{
    if(editBox){
      editBox.style.display = "none";
    }
    addBox.style.display = "block";
  }
}


function editbutton(){
  event.preventDefault();
  if(editBox.style.display === "block"){
    editBox.style.display = "none";
  }else{
    editBox.style.display = "block";
    addBox.style.display = "none";
  }
}
