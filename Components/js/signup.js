const validate = () => {
  let username = document.getElementById("name").value;

  let father = document.getElementById("father").value;

  let dob = document.getElementById("dob").value;

  let mobile = document.getElementById("mobile").value;

  let email = document.getElementById("email").value;

  let password = document.getElementById("password").value;

  checkUserName(username);
  checkFather(father);
  checkDob(dob);
  checkMobile(mobile);
  checkEmail(email);
  checkPassword(password);
};
const checkUserName = (username) => {
  if (username.length < 8) {
    document.getElementById("name").classList.add("error");
    document.getElementById("usererror").innerHTML = "Must be 8 character";
  } else {
    document.getElementById("name").classList.add("success");
    document.getElementById("name").classList.replace("error", "success");
    document.getElementById("usererror").innerHTML = " ";
  }
};
const checkFather = (father) => {
  if (father.length < 8) {
    document.getElementById("father").classList.add("error");
    document.getElementById("fherror").innerHTML = "Must be 8 character";
  } else {
    document.getElementById("father").classList.add("success");
    document.getElementById("father").classList.replace("error", "success");
    document.getElementById("fherror").innerHTML = " ";
  }
};
const checkDob = (dob) => {
  if (dob < 18) {
    document.getElementById("dob").classList.add("error");
    document.getElementById("doberror").innerHTML = "Must be minimum 18 years";
  } else {
    document.getElementById("dob").classList.add("success");
    document.getElementById("dob").classList.replace("error", "success");
    document.getElementById("doberror").innerHTML = " ";
  }
};
const checkMobile = (mobile) => {
  if (mobile.length < 10) {
    document.getElementById("mobile").classList.add("error");
    document.getElementById("mobileerror").innerHTML = "Must be 10 digits";
  } else {
    document.getElementById("mobile").classList.add("success");
    document.getElementById("mobile").classList.replace("error", "success");
    document.getElementById("mobileerror").innerHTML = " ";
  }
};
const checkEmail = (email) => {
  if (email.includes("@gmail.com")) {
    document.getElementById("email").classList.add("success");
    document.getElementById("email").classList.replace("error", "success");
    document.getElementById("emailerror").innerHTML = " ";
  } else {
    document.getElementById("email").classList.add("error");
    document.getElementById("emailerror").innerHTML =
      "please put a valid email id";
  }
};
const checkPassword = (password) => {
  if (password.includes("!") && password.length > 7) {
    document.getElementById("password").classList.add("success");
    document.getElementById("password").classList.replace("error", "success");
    document.getElementById("passworderror").innerHTML = " ";
  } else {
    document.getElementById("password").classList.add("error");
    document.getElementById("passworderror").innerHTML =
      "Must be at least 8 digits and contain '!' ";
  }
};
