const name = document.getElementById('name')
const password = document.getElementById('password')
// 
const name1 = document.getElementById('name1')
const age = document.getElementById('age')
const designation = document.getElementById('designation')
const languague = document.getElementById('languague')
const email = document.getElementById('email')
const myfile = document.getElementById('myfile')

// 
const form = document.getElementById('form')
const errorElement = document.getElementById('error')
// display
const displayElement = document.getElementById('display')

function send() {
  var designation = document.getElementsByName("designation");
  if (designation[designation].checked == true) {
      alert("Your gender is male");
  }else {
      // no checked
      var msg = '<span style="color:red;">You must select your designation!</span><br /><br />';
      document.getElementById('msg').innerHTML = msg;
      return false;
  }
  return true;
}

function reset_msg() {
  document.getElementById('msg').innerHTML = '';
}

form.addEventListener('submit', (e) => {
// 

  // 
  let messages = []
  let messages1 = []
   let letters = /^[A-Za-z]+$/;
  if (name.value === '' || name.value == null) {
    messages.push('First Name is required')
  }
  else if (name.value.match(letters)) {
    messages.push('First Name Should be alphabet')
  }
// 
  if (name1.value === '' || name1.value == null) {
    messages.push('Last Name is required')
  }
  else if (name1.value.match(letters)) {
    messages.push('LastName Should be alphabet')
  }

  if (age.value === '' || age.value == null) {
    messages.push('Age is required')
  }
  if (designation.value === '' || designation.value == null ) {
    messages.push('designation required')
  }
  if (languague.value === '' || languague.value == null) {
    messages.push('languague required')
  }
  if (email.value === '' || email.value == null) {
    messages.push(' email required')
  }
  if (myfile.value.match(letters)) {
    messages.push('required')
  }

// 
  if (password.value.length <= 8) {
    messages.push('Password must be longer than 8 characters')
  }

  if (password.value.length >= 20) {
    messages.push('Password must be less than 20 characters')
  }

  if (password.value === 'password') {
    messages.push('Password cannot be password')
  }
// error print
  if (messages.length > 0) {
    e.preventDefault()
    errorElement.innerText = messages.join(', ')
  }
  else{
    messages1.push(name.value)
    messages1.push(name1.value)
    messages1.push(age.value)
    displayElement.innerText = messages1.join(', ')

  }
})