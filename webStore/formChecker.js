

function validate()
{
    let email = document.getElementById('email').value;
    let password = document.getElementById('password').value;
    let shipping = document.querySelector('input[name="ship"]:checked');
    
   let emailValid = false;
   let passwordValid = false; 
   let shippingValid = false;

    let regex = new RegExp('[a-z0-9]+@[a-z]+\.[a-z]{2,3}');

    if (!regex.test(email))
    {
        document.getElementById('email').style.borderColor = "red";
        let message = document.getElementById('emailMessage');
        message.textContent = 'Email must be in "name@domain.com" format.';
        message.style.color = "red";
    }
    else
    {
        document.getElementById('email').style.borderColor = null;
        let message = document.getElementById('emailMessage');
        message.textContent = '';
        emailValid = true;
    }

    if(password == "")
    {
        document.getElementById('password').style.borderColor = "red";
        let message = document.getElementById('passwordMessage');
        message.textContent = "Enter your password.";
        message.style.color = "red";
    }
    else
    {
        document.getElementById('password').style.borderColor = null;
        let message = document.getElementById('passwordMessage');
        message.textContent = '';
        passwordValid = true;
    }

    if(shipping == null)
    {
        let message = document.getElementById('shippingMessage');
        message.textContent = "Please select a shipping option.";
        message.style.color = "red";
    }
    else
    {
        let message = document.getElementById('shippingMessage');
        message.textContent = "";
        message.style.color = "red";
         shippingValid = true;
    }

    if(emailValid == true && passwordValid == true && shippingValid == true)
    {

        document.getElementById("form").submit();

    }

}
