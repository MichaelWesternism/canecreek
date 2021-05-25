let addBox = document.querySelector(".add-box");
let editBox = document.querySelector(".edit-box")


function addpartbtn(){
  event.preventDefault();
  if(addBox.style.display === "block"){
    addBox.style.display = "none";
  }else{
    addBox.style.display = "block";
  }
}

// function archivecommentbtn(){
//   event.preventDefault();
//   if(addBox.style.display === "block"){
//     addBox.style.display = "none";
//   }else{
//     addBox.style.display = "block";
//   }
// }

function addcommentbtn(){
  event.preventDefault();
  if(addBox.style.display === "block"){
    addBox.style.display = "none";
  }else{
    editBox.style.display = "none";
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
