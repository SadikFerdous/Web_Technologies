function getFname()
{
    var check = /^[A-Za-z]/;
    var check2 = /^[0123456789]+[a-z]/;
    var check3 = /^[0123456789]+[A-Z]/;
    var check4 = /^[a-z]+[0123456789]/;
    var check5 = /^[A-Z]+[0123456789]/;
    var check6 = /^[a-z]/;
    var check7 = /^[A-Z]/;
    var check8 = /^[0123456789]/;
    var check9 = /^[A-Z]+[a-z]+[0123456789]/;
    var firstname =document.getElementById("inputtext").value;
    
    if(firstname.match(check5) || firstname.match(check3) || firstname.match(check9))
    {
        document.getElementById("fname").innerHTML="First letter should be capital & should not contain numerical value";
        return false;
    }
    else if(firstname.match(check2) || firstname.match(check4) || firstname.match(check6)  || firstname.match(check8))
    {
        document.getElementById("fname").innerHTML="First letter should be capital & should not contain numerical value";
        return false;
    }
    else if(firstname[0].match(check7) && firstname.match(check))
    {
        document.getElementById("fname").innerHTML="Name is correct";
        return true;
    }
}


function getLname()
{
    var check = /^[A-Za-z]/;
    var check2 = /^[0123456789]+[a-z]/;
    var check3 = /^[0123456789]+[A-Z]/;
    var check4 = /^[a-z]+[0123456789]/;
    var check5 = /^[A-Z]+[0123456789]/;
    var check6 = /^[a-z]/;
    var check7 = /^[A-Z]/;
    var check8 = /^[0123456789]/;
    var check9 = /^[A-Z]+[a-z]+[0123456789]/;
    var lastname =document.getElementById("inputtext2").value;
    
    if(lastname.match(check5) || lastname.match(check3) || lastname.match(check9))
    {
        document.getElementById("lname").innerHTML="First letter should be capital & should not contain numerical value";
        return false;
    }
    else if(lastname.match(check2) || lastname.match(check4) || lastname.match(check6)  || lastname.match(check8))
    {
        document.getElementById("lname").innerHTML="First letter should be capital & should not contain numerical value";
        return false;
    }
    else if(lastname[0].match(check7) && lastname.match(check))
    {
        document.getElementById("lname").innerHTML="Name is correct";
        return true;
    }
}

function getUname()
{
    var check2 = /^[0123456789]+[A-Za-z]/;
    var check = /^[A-Za-z]+[0123456789]/;
    var check9 = /^[A-Za-z]/;
    var check3 = /^[0123456789]+[A-Za-z]+['^£$%&*()}{@#~?><>,|=_+¬-]/;
    var check4 = /^[0123456789]+['^£$%&*()}{@#~?><>,|=_+¬-]+[A-Za-z]/;
    var check5 = /^['^£$%&*()}{@#~?><>,|=_+¬-]+[0123456789]+[A-Za-z]/;
    var check6 = /^['^£$%&*()}{@#~?><>,|=_+¬-]/;
    var check7 = /^[A-Za-z]+['^£$%&*()}{@#~?><>,|=_+¬-]+[0123456789]/;
    var check8 = /^[0123456789]/;
    var check10 = /^[A-Za-z]+[0123456789]+['^£$%&*()}{@#~?><>,|=_+¬-]/;
    var check11 = /^[A-Za-z]+['^£$%&*()}{@#~?><>,|=_+¬-]/;
    var uname =document.getElementById("inputtext3").value;

    if(uname.match(check2))
    {
        document.getElementById("uname").innerHTML="Name is correct";
        return true;
    }
    else if(uname.match(check5) || uname.match(check3) || uname.match(check4) || uname.match(check6) || uname.match(check11) || uname.match(check7) || uname.match(check8) || uname.match(check10))
    {
        document.getElementById("uname").innerHTML="Letters should not be special character & should not contain only numerical value";
        return false;
    }
    else if(uname.match(check9) || uname.match(check))
    {
        document.getElementById("uname").innerHTML="Name is correct";
        return true;
    }
}

function getpassword()
{
    var check = /^[0123456789]/;
    var check2 = /^[A-Za-z]+[0123456789]]/;
    var check3 = /^[0123456789]+[A-Za-z]/;
    var password=document.getElementById("inputtext4").value;
    if((password.length < 6))
    {
        document.getElementById("passwordError").innerHTML="Password should not be less than 6 characters and only numerical value is allowed";
        return false;
    }

    else if(password.match(check2) || password.match(check3))
    {
        document.getElementById("passwordError").innerHTML="Password should not be less than 6 characters and only numerical value is allowed";
        return false;
    }
    
    else if((password.length > 6) && (password.match(check)))
    {
        document.getElementById("passwordError").innerHTML="Password is  correct";
        return true;
    }
}

function getEmail()
{
    var letters = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var email=document.getElementById("inputtext5").value;
    if(email.match(letters))
    {
        document.getElementById("email").innerHTML="Email is correct";
        return true;
    }
    else
    {
        document.getElementById("email").innerHTML="must contain @ and .com";
        return false;
    }
}

function getPre()
{
    var pre=document.getElementById("inputtext6").value;
    if(pre=="")
    {
        document.getElementById("pre").innerHTML="Present Address should not be empty";
        return false;
    }
    else
    {
        document.getElementById("pre").innerHTML="Present Address is Ok";
        return true;
    }
}

function getPer()
{
    var per=document.getElementById("inputtext7").value;
    if(per=="")
    {
        document.getElementById("per").innerHTML="Permanent Address should not be empty";
        return false;
    }
    else
    {
        document.getElementById("per").innerHTML="Permanent Address is Ok";
        return true;
    }
}

function getNationality()
{
    var check = /^[A-Za-z]/;
    var check2 = /^[0123456789]+[A-Za-z]/;
    var check3 = /^[A-Za-z]+[0123456789]/;
    var nationality =document.getElementById("inputtext8").value;
    
    if(nationality.match(check3) || nationality.match(check2))
    {
        document.getElementById("nationality").innerHTML="Nationality should contain only string";
        return false;
    }
    else if(nationality.match(check))
    {
        document.getElementById("nationality").innerHTML="Nationality is correct";
        return true;
    }
}

function getNid()
{
    var check = /^[0123456789]/;
    var nid =document.getElementById("inputtext9").value;
    if(nid.match(check))
    {
        document.getElementById("nid").innerHTML="NID is OK";
        return true;
    }
    else
    {
        document.getElementById("nid").innerHTML="NID should contain only number";
        return false;
    }
}


function getNumber()
{
    var check = /^[0123456789]/;
    var number =document.getElementById("inputtext10").value;
    if((number.length>10) &&  (number.length<12) && number.match(check))
    {
        document.getElementById("number").innerHTML="Number is OK";
        return true;
    }
    else
    {
        document.getElementById("number").innerHTML="Phone Number must be 11 characters";
        return false;
    }
}


function checkGender() 
{    
    if(document.getElementById('Male').checked || document.getElementById('Female').checked 
    || document.getElementById('Other').checked) 
    {   
        document.getElementById("gender").innerHTML= "Gender button is checked"; 
        return true;  
    }     
} 

function checkReligion() 
{    
    if(document.getElementById('Islam').checked || document.getElementById('Hinduism').checked 
    || document.getElementById('Christianity').checked || document.getElementById('Buddhism').checked) 
    {   
        document.getElementById("religion").innerHTML= "Religion button is checked"; 
        return true;  
    }     
} 

function checkBlood() 
{    
    if(document.getElementById('AB+').checked || document.getElementById('AB-').checked 
    || document.getElementById('A+').checked || document.getElementById('A-').checked
    || document.getElementById('B+').checked || document.getElementById('B-').checked
    || document.getElementById('O+').checked || document.getElementById('O-').checked) 
    {   
        document.getElementById("blood").innerHTML= "Blood Group button is checked"; 
        return true;  
    }     
} 

function checkMaritial() 
{    
    if(document.getElementById('Married').checked || document.getElementById('Unmarried').checked) 
    {   
        document.getElementById("maritial").innerHTML= "Maritial status button is checked"; 
        return true;  
    }     
}

function checkDesignation() 
{    
    if(document.getElementById('Junior Employee').checked || document.getElementById('Senior Employee').checked 
    || document.getElementById('Account Manager').checked) 
    {   
        document.getElementById("designation").innerHTML= "Designation button is checked"; 
        return true;  
    }     
}


function formResult()
{
    if(getFname()==true && getLname()==true && getUname()==true && getpassword()==true && getEmail()==true && getPre()==true 
    && getPer()==true && getNationality()==true && getNid()==true && getNumber()==true && checkGender()==true 
    && checkReligion()==true && checkBlood()==true && checkMaritial()==true && checkDesignation()==true)
    {
        return true;
    }
    else
    {
      return false;
    }
}