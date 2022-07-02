  
// validation


var loginForm = document.getElementById("login-form");



if(loginForm.length > 0){

    
    loginForm.addEventListener("submit", function(e){


        var loginInput = document.getElementsByClassName("login-input")[0];
        var pwdInput = document.getElementsByClassName("pass-input")[0];

        var errElem = document.createElement("span");
        errElem.classList.add('error');
        var errMsg = document.createTextNode(("Veuillez remplir le champ"));
        errElem.appendChild(errMsg);

        var isValid = true;

        if(trim(loginInput.value).length < 1) {
            if(!loginInput.classList.contains("red")) {
                loginInput.classList.add("red");
                loginInput.parentNode.appendChild(errElem);
            }
            isValid = false;
        } else {
            if(loginInput.classList.contains("red")) {
                loginInput.classList.remove("red");
                var childNodes = loginInput.parentNode.childNodes;
                for(var i=0; i < childNodes.length > 0; i++) {
                    if(childNodes[i].classList && childNodes[i].classList.contains("error")){
                        childNodes[i].remove();
                    }
                }
            }

        }
        /**/
        if(trim(pwdInput.value).length < 1) {
            if(!pwdInput.classList.contains('red')) {
                pwdInput.classList.add('red');
                pwdInput.parentNode.appendChild(errElem.cloneNode(true));
            }
            isValid = false;
        } else {
            if( pwdInput.classList.contains("red")){
                pwdInput.classList.remove("red");
                var childNodesPwd = pwdInput.parentNode.childNodes;
                for(var j=0; j < childNodesPwd.length > 0; j++) {
                    if(childNodesPwd[j].classList && childNodesPwd[j].classList.contains("error")){
                        childNodesPwd[j].remove();
                    }
                }
            }

        }
        /**/
        if(!isValid) {
            event.preventDefault();
        }

    });

    // ------------------------------------------------------------------------------------
    // SHOW / HIDE PASSWORD
    var pwdShowList = document.querySelectorAll('.input-block.password .show')
    for(var i=0, nb=pwdShowList.length; i<nb; i++){
        pwdShowList[i].addEventListener('click', function(e){
            var pwdShow = this,
                pwdInput = this.parentNode.querySelector('input')

            pwdInput.type = togglePasswordType(pwdInput.type)
            pwdShow.className = togglePasswordIcon(pwdShow.className)
        })
    }
}


/**
 * Return updated type for password field
 * @param string pwdInputType Password field type value
 * @return string Updated type value
 */
function togglePasswordType(pwdInputType){
    return pwdInputType == 'password' ? 'text' : 'password'
}

/**
 * Return updated className for password icon
 * @param string pwdShowClass Password icon className value
 * @return string Updated className value
 */
function togglePasswordIcon(pwdShowClass){
    return pwdShowClass.indexOf('open') === -1 ? (pwdShowClass+' open').trim() : pwdShowClass.replace(/open/g, '').trim()
}

function trim(value){
    return value.replace(/^\s+|\s+$/g,"")
}
