let addBox = document.querySelector(".add-box");
let editBox = document.querySelector(".edit-box")
let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
let qrbox = document.querySelector("#qrbox");
let qrsearch = document.querySelector("#qrsearch");
let navdrop = document.querySelector(".navdrop");
let addpartbtn = document.querySelector("#addpartbtn");
let editbutton = document.querySelector("#editbutton");
let commentbutton = document.querySelector("#commentbutton");
let addqrscanner = document.querySelector("#addqrscanner");


//DROPDOWN NAV
document.getElementById("nav").addEventListener("click", function(){
  if (navdrop.style.display === "block"){
    navdrop.style.display = "none";
  }else{
    navdrop.style.display = "block";
  }
})



//ADD PARTS BUTTON AND QR SCANNER FUNCTION
if(addpartbtn){
  addpartbtn.addEventListener("click", function(){
    event.preventDefault();
    if(addBox.style.display === "block"){
      addBox.style.display = "none";
      if(qrbox.style.display === "block"){
        scanner.stop();
        qrbox.style.display= "none";
      }
    }else{
      addBox.style.display = "block";

      addqrscanner.addEventListener("click", function() {
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
}


//QR SEARCH
if(qrsearch){
  qrsearch.addEventListener("click", function(){
    event.preventDefault();
    if (qrbox.style.display === "block"){
      qrbox.style.display= "none";
      scanner.stop();
    }else{
      qrbox.style.display= "block";
      scanner.addListener('scan', function (content) {
        window.location.href = 'details.php?qr=' + content;
        scanner.stop();
      });
      Instascan.Camera.getCameras().then(function (cameras) {
        if (cameras.length > 0) {
          scanner.start(cameras[0]);
        } else {
          console.error('No cameras found.');
        }
      })
    }
  })
}


//ADD COMMENT
if(commentbutton){
  commentbutton.addEventListener("click", function(){
    event.preventDefault();
    if(addBox.style.display === "block"){
      addBox.style.display = "none";
    }else{
      if(editBox){
        editBox.style.display = "none";
      }
      addBox.style.display = "block";
    }
  })
}


//EDIT PART FORM
if(editbutton){
  editbutton.addEventListener("click", function(){
    event.preventDefault();
    if(editBox.style.display === "block"){
      editBox.style.display = "none";
    }else{
      editBox.style.display = "block";
      addBox.style.display = "none";
      }
  })
}
