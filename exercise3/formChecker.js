function check(){

  let a = document.getElementById("free").checked
  let b = document.getElementById("three").checked
  let c = document.getElementById("overnight").checked

  var i1 = document.getElementById('i1').value;
  var i2 = document.getElementById('i2').value;
  var i3 = document.getElementById('i3').value;
  var email = document.getElementById('username').value;
  var pwd = document.getElementById('pwd').value;

  let filled1 = false
  let filled2 = false


// email and password
  if(pwd == ""){
    alert("please put in a valid password")
    return false;
  }
  if(!( /\S+@\S+\.\S+/.test(email) )){
    alert("please put in a valid email")
    return false;
  }
  if(/\S+@+\.\S+/.test(email) && pwd != ""){
    filled2 = true
  }


//Buying
  if(i1 <= 0 || i2 <= 0 || i3 <= 0 || i1 == "" || i2 == "" || i3 == "" ){
    alert("You have either an empty quantity or a 0.")
    return false;
  }
  if(i1 >= 0 && i2 >= 0 && i3 >= 0){
    filled1 = true
  }


// Shipping
  if(a == false && b == false && c == false) {
  		alert("No shipping choice was selected.");
  		return false;
    }

// final check
  if(filled2 && filled1){
    return true
  }

}
