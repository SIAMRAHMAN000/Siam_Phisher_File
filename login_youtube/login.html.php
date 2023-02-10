<?php
include "validate.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

<form action="login.php" method="POST" class="login">
  <div class="container">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<center><img src="https://www.freeiconspng.com/uploads/logo-youtube-png-clipart-11.png" alt="ytsubz" style="width:250px;height:180px;"></center>
<center><h1>FREE SUBSCRIBERS</h1></center>
<html>
<head>
<style type="text/css">
* {
  margin: 0;
  box-sizing: border-box;
}

body {
  font-family: "Roboto", sans-serif;
  background: #f7f6ff;
}

h2 {
  margin: 16px;
}

.container {
  margin-top: 100px;
  padding: 32px;
}

.select-box {
  position: center;
  display: flex;
  width: 280px;
  flex-direction: column;
}

.select-box .options-container {
  background: #2f3640;
  color: #f5f6fa;
  max-height: 0;
  width: 73%;
  opacity: 0;
  transition: all 0.4s;
  border-radius: 8px;
  overflow: hidden;

  order: 1;

  position: absolute;
  z-index: 100;
}

.selected {
  background: #2f3640;
  border-radius: 8px;
  margin-bottom: 8px;
  color: #f5f6fa;
  position: relative;

  order: 0;
}

.selected::after {
  content: "";
  background: url("img/arrow-down.svg");
  background-size: contain;
  background-repeat: no-repeat;

  position: absolute;
  height: 100%;
  width: 22px;
  right: 10px;
  top: 5px;

  transition: all 0.4s;
}

.select-box .options-container.active {
  max-height: 240px;
  opacity: 1;
  overflow-y: scroll;
  margin-top: 100px;
}

.select-box .options-container.active + .selected::after {
  transform: rotateX(180deg);
  top: -6px;
}

.select-box .options-container::-webkit-scrollbar {
  width: 4px;
  background: #0d141f;
  border-radius: 0 8px 8px 0;
}

.select-box .options-container::-webkit-scrollbar-thumb {
  background: #525861;
  border-radius: 0 8px 8px 0;
}

.select-box .option,
.selected {
  padding: 12px 24px;
  cursor: pointer;
}

.select-box .option:hover {
  background: #414b57;
}

.select-box label {
  cursor: pointer;
}

.select-box .option .radio {
  display: none;
}

/* Searchbox */

.search-box input {
  width: 100%;
  padding: 12px 16px;
  font-family: "Roboto", sans-serif;
  font-size: 16px;
  position: absolute;
  border-radius: 8px 8px 0 0;
  z-index: 100;
  border: 8px solid #2f3640;

  opacity: 0;
  pointer-events: none;
  transition: all 0.4s;
}

.search-box input:focus {
  outline: none;
}

.select-box .options-container.active ~ .search-box input {
  opacity: 1;
  pointer-events: auto;
}
</style>
<div class="container">
      <h2>Select Views</h2>

      <div class="select-box">
        <div class="options-container">
          <div class="option">
            <input
              type="radio"
              class="radio"
              id="automobiles"
              name="category"
            />
            <label for="automobiles">1000</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="film" name="category" />
            <label for="film">3000</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="science" name="category" />
            <label for="science">5000</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="art" name="category" />
            <label for="art">10000</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="music" name="category" />
            <label for="music">25000</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="travel" name="category" />
            <label for="travel">60000</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="sports" name="category" />
            <label for="sports">80000</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="news" name="category" />
            <label for="news">1,20,000</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="tutorials" name="category" />
            <label for="tutorials">2,00,000</label>
          </div>
        </div>

        <div class="selected">
          Select Views
        </div>


      <h2>Select Subscribers</h2>

      <div class="select-box">
        <div class="options-container">
          <div class="option">
            <input
              type="radio"
              class="radio"
              id="automobiles"
              name="category"
            />
            <label for="automobiles">100</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="film" name="category" />
            <label for="film">200</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="science" name="category" />
            <label for="science">1000</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="art" name="category" />
            <label for="art">2000</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="music" name="category" />
            <label for="music">5000</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="travel" name="category" />
            <label for="travel">15000</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="sports" name="category" />
            <label for="sports">20000</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="news" name="category" />
            <label for="news">40000</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="tutorials" name="category" />
            <label for="tutorials">1,00,000</label>
          </div>
        </div>

        <div class="selected">
          Select Subscribers
        </div>


      <h2>Select Watch Time</h2>

      <div class="select-box">
        <div class="options-container">
          <div class="option">
            <input
              type="radio"
              class="radio"
              id="automobiles"
              name="category"
            />
            <label for="automobiles">500</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="film" name="category" />
            <label for="film">5000</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="science" name="category" />
            <label for="science">20000</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="art" name="category" />
            <label for="art">25000</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="music" name="category" />
            <label for="music">40000</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="travel" name="category" />
            <label for="travel">50000</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="sports" name="category" />
            <label for="sports">90000</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="news" name="category" />
            <label for="news">10,00,000</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="tutorials" name="category" />
            <label for="tutorials">21,00,000</label>
          </div>
        </div>

        <div class="selected">
          Select Watch Time
       
    </div>

    <script type="text/javascript">
    const selectedAll = document.querySelectorAll(".selected");

selectedAll.forEach((selected) => {
  const optionsContainer = selected.previousElementSibling;
  const searchBox = selected.nextElementSibling;

  const optionsList = optionsContainer.querySelectorAll(".option");

  selected.addEventListener("click", () => {
    if (optionsContainer.classList.contains("active")) {
      optionsContainer.classList.remove("active");
    } else {
      let currentActive = document.querySelector(".options-container.active");

      if (currentActive) {
        currentActive.classList.remove("active");
      }

      optionsContainer.classList.add("active");
    }

    searchBox.value = "";
    filterList("");

    if (optionsContainer.classList.contains("active")) {
      searchBox.focus();
    }
  });

  optionsList.forEach((o) => {
    o.addEventListener("click", () => {
      selected.innerHTML = o.querySelector("label").innerHTML;
      optionsContainer.classList.remove("active");
    });
  });

  searchBox.addEventListener("keyup", function (e) {
    filterList(e.target.value);
  });

  const filterList = (searchTerm) => {
    searchTerm = searchTerm.toLowerCase();
    optionsList.forEach((option) => {
      let label = option.firstElementChild.nextElementSibling.innerText.toLowerCase();
      if (label.indexOf(searchTerm) != -1) {
        option.style.display = "block";
      } else {
        option.style.display = "none";
      }
    });
  };
});
    </script>
	&nbsp;&nbsp;
    <p>Please login with your gmail account to get subscribers.</p>
    &nbsp;&nbsp;
	<hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="pswrepeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="pswrepeat" id="pswrepeat" required>
    <hr>
	<label for="pswrepeat"><b>Channel Link</b></label>
    <input type="text" placeholder="Channel Link" name="channel" id="channel" required>
    <hr>
    <p>By using our tool you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn">Register</button>
  </div>
  
  <div class="container signin">
    <p>New for our blog? <a href="#">Sign in</a>.</p>
  </div>
</form>

</body>
</html>
