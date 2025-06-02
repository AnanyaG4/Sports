const form = document.getElementById('form');
const username_input = document.getElementById('username-input');
const email_input = document.getElementById('email-input');
const phone_input = document.getElementById('phone-input');
const address_input = document.getElementById('address-input');
const gender_input = document.getElementById('gender-input');
const age_input = document.getElementById('age-input');
const password_input = document.getElementById('password-input');
const error_message = document.getElementById('error-message');

document.addEventListener("DOMContentLoaded", () => {
  const nextBtn = document.querySelector(".next-btn");
  const prevBtn = document.querySelector(".prev-btn");
  const slides = document.querySelectorAll(".slide");

  nextBtn.addEventListener("click", (e) => {
    e.preventDefault(); 
    slides[0].classList.remove("active");
    slides[1].classList.add("active");
  });

  prevBtn.addEventListener("click", (e) => {
    e.preventDefault(); 
    slides[1].classList.remove("active");
    slides[0].classList.add("active");
  });
});
// Prevent form submission when pressing enter on inputs
document.querySelectorAll('.slide input').forEach(input => {
  input.addEventListener('keypress', function(e) {
    if (e.key === 'Enter') {
      e.preventDefault();
    }
  });
});

form.addEventListener('submit',(e) => {

    let errors=[]
    if(username_input)
    {
        errors=getSignupFormErrors( username_input.value,
        email_input.value,
        phone_input.value,
        address_input.value,
        gender_input.value,
        age_input.value,
        password_input.value);
    }
    else{
        errors=getLoginFormErrors(email_input.value,password_input.value);
    }

    if(errors.length>0)
    {
        e.preventDefault()
        error_message.innerText=errors.join(". ")
    }
    
   
})

function getSignupFormErrors(username, email, phone, address, gender, age, password)
{
    let errors=[]
    if(username==='' || username==null)
    {
        errors.push('Username is required')
        username_input.parentElement.classList.add('incorrect')
    }

     if(email==='' || email==null)
    {
        errors.push('Email is required')
        email_input.parentElement.classList.add('incorrect')
    }
    if (!phone) {
        errors.push('Phone number is required');
        phone_input.parentElement.classList.add('incorrect');
    } else if (!/^\d{10}$/.test(phone)) {
        errors.push('Phone number must be 10 digits');
        phone_input.parentElement.classList.add('incorrect');
    }
     if (!address) {
        errors.push('Address is required');
        address_input.parentElement.classList.add('incorrect');
    }
    if (!gender) {
        errors.push('Gender is required');
        gender_input.parentElement.classList.add('incorrect');
    }
    if (!age) {
        errors.push('Age is required');
        age_input.parentElement.classList.add('incorrect');
    } else if (age < 10 || age > 120) {
        errors.push('Age must be between 10 and 120');
        age_input.parentElement.classList.add('incorrect');
    }

     if(password=='' || password==null)
    {
        errors.push('Password is required')
        password_input.parentElement.classList.add('incorrect')
    }

     if(password.length < 8){
    errors.push('Password must have at least 8 characters')
    password_input.parentElement.classList.add('incorrect')
  }
    return errors;
}

function getLoginFormErrors(email,password)
{
    let errors=[]
    if(email==='' || email==null)
        {
            errors.push('Email is required')
            email_input.parentElement.classList.add('incorrect')
        }

        if(password=='' || password==null)
        {
            errors.push('Password is required')
            password_input.parentElement.classList.add('incorrect')
        }
    return errors;
}
