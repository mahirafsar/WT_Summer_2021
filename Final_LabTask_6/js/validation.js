
function validateForm() {
    var fname = document.getElementById("fname").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("pwd").value;
    var comment = document.getElementById("com").value;
    var male = document.getElementById("male");
    var female = document.getElementById("female");
    var other = document.getElementById("other");
    var hobby1 = document.getElementById("hobby1");
    var hobby2 = document.getElementById("hobby2");
    var hobby3 = document.getElementById("hobby3");
    var myfile = document.getElementById("myfile").value;

    var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    var pass= /(?=.*[@#$%^&+=]).*$/;
    var res = patt.test(email);
    var res2 = pass.test(password);
    
    if (fname == "" || fname.length < 6 ) {
     document.getElementById("errorfname").innerHTML="Please fill out first name";
      return false;
    }

   if(!res)
    {
      document.getElementById("errormail").innerHTML="Email format is not correct";
      return false; 
    }

    if(!res2)
    {
      document.getElementById("errorpassword").innerHTML="Password format is not correct";
      return false; 
    }

    if (comment == "" || comment.length < 10 ) {
      document.getElementById("errorcomment").innerHTML="Please fill out Comment";
       return false;
     }
    
     if (!male.checked && !female.checked && !other.checked ) {
      document.getElementById("errorgender").innerHTML="Please fill out your gender";
       return false;
     }

     if (!hobby1.checked && !hobby2.checked && !hobby3.checked ) {
      document.getElementById("errorhobby").innerHTML="Please choose your hobby";
       return false;
     }

     if (myfile == "") {
      document.getElementById("errorfile").innerHTML="Please upload a file";
       return false;
     }
  }

