function validation() {
        var fname = document.myform.firstname.value;
        var lname = document.myform.lastname.value;
        var num = document.myform.number.value;
        var mail = document.myform.email.value;
        var pass = document.myform.password.value;
        var cpas = document.myform.confpassword.value;
        var flag = false;
        var pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
        var passlength =
          /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
        if (flag == false) {
          if (fname == "") {
            document.getElementById("fname").style.display = "inline";
            document.getElementById("fname").innerHTML = "!Enter The First Name";
            flag = false;
          }
          else {
            document.getElementById("fname").style.display = "none";
            flag = true;
          }
        }
        if (flag == true) {
          if (lname == "") {
            document.getElementById("lname").style.display = "inline";
            document.getElementById("lname").innerHTML = "!Enter The Last Name";
            flag = false;
          } else {
            document.getElementById("lname").style.display = "none";
            flag = true;
          }
        }
        if (flag == true) {
      
                if (mail.match(pattern)) {
                  document.getElementById("email").style.display = "none";
                  flag = true;
                } else {
                  document.getElementById("email").style.display = "inline";
                  document.getElementById("email").innerHTML = "Enter a valid mail";
                  flag = false;
                }
              }
        if (flag == true) {
      
          if (num == "") {
            document.getElementById("no").style.display = "inline";
            document.getElementById("no").innerHTML = "!Enter The valid number";
            flag = false;
          } else if (num.length !== 10) {
            document.getElementById("no").style.display = "inline";
            document.getElementById("no").innerHTML = "Enter The valid number";
            flag = false;
          } else {
            document.getElementById("no").style.display = "none";
            flag = true;
          }
        }
        
        if (flag == true) {
      
          if (pass == "") {
            document.getElementById("pw").style.display = "inline";
            document.getElementById("pw").innerHTML = "Enter the password";
            flag = false;
          } else if (pass.length > 15 || pass.length < 5) {
            document.getElementById("pw").innerHTML = "password must contain one alphabet";
            flag = false
          } else if (pass.match(passlength)) {
            document.getElementById("pw").style.display = "none";
            flag = true;
          } else {
            document.getElementById("pw").style.display = "none";
            flag = true;
          }
        }
        if (flag == true) {
      
          if (cpas !== pass) {
            document.getElementById("cpw").style.display = "inline";
            document.getElementById("cpw").innerHTML = "Password Did not match";
            flag = false;
          } else {
            document.getElementById("cpw").style.display = "none";
            flag = true;
          }
        }
        if (flag == true) {
          return true;
        }
        else {
          return false;
        }
      }
      