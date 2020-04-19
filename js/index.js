window.onload = function(){
    let regForm = document.getElementById('regForm')
    let showRegData = document.getElementById('showRegData')

    let loginReg = document.getElementById('loginReg')
    let nameReg = document.getElementById('nameReg')
    let passwordReg = document.getElementById('passwordReg')
    
    regForm.addEventListener('submit', (e)=>{

        e.preventDefault()
        
        const request = new this.XMLHttpRequest();

        request.open('post', './validation-form/check.php')

        request.onload = function(){
            console.log('request has been sent')
        }

        request.send(new FormData(regForm))

        showRegData.textContent = 
        `Hi ${nameReg.value}. Welcome to this site!!`

        loginReg.value = ''
        nameReg.value = ''
        passwordReg.value = ''
    })
}