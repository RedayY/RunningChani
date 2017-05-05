//Login Alpha


//Initializing Globay Account Array
var AccountsArray = [];

var defaultvalues = {username:"dummy", password:"pass"};
AccountsArray.push(defaultvalues);



// Registration system





function store() {
    
    //fetiching values from form
    var reg_name = document.getElementById('Register_Username').value;
    var reg_pw = document.getElementById('Register_Password').value;
    var address = document.getElementById('Register_Address').value;
    var phone = document.getElementById('Register_pn').value;
    
    
    //Setting items to localstorage
    localStorage.setItem("Username", reg_name);
    localStorage.setItem("Password", reg_pw);
    localStorage.setItem("address", address);
    localStorage.setItem("phone", phone);
    localStorage.setItem("Account", JSON.stringify(AccountObject));
    
    
        
    //Define JSON Object
    var AccountObject = {"username" : reg_name, "password" : reg_pw, "address" : address, "phone" : phone};
    

    

    
    
    /*oldsystem
    var usn_exsits = false;
    
    //fetching values and storing it into var
    var reg_name = document.getElementById('Register_Username');
    var reg_pw = document.getElementById('Register_Password');
    
    //Define JSON Object
    var AccountObject = {"username" : reg_name, "password" : reg_pw};
    
    for ( var i = 0; i < AccountsArray.length; i++){
        if (AccountsArray[i].username == reg_name){
            usn_exsits = true;
        }
        else {
            //pusing object into array
            AccountsArray.push(AccountObject);
            
            if (usn_exsits == true){
                window.alert("Please choose another Username");
            }
            else{};
        }
    }
    
    console.log(JSON.stringify(AccountsArray));
    
    */
    
}

    
    
    
    



function check() {
    var log_name = document.getElementById('Login_Username').value;
    var log_pw = document.getElementById('Login_Password').value;
    
    var check_name = localStorage.Username;
    var check_pw = localStorage.Password;
    
    if (log_name == check_name && log_pw == check_pw){
        window.alert("You have logged in!");
        sessionStorage.setItem("Username", log_name);
    }
    else{
        window.alert("Incorrect details");
    }
    
}