<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="/css/login.css" />
    <title>Amlac Senior High School</title>
  </head>
  <body>
    <div class="container">
       

      <div class="forms-container">
        
        <div class="signin-signup">

          <form action="#" class="sign-in-form">

            <img src="/images/logo.png" alt="">
            <h2 class="title">AMLAC SENIOR HIGH SCHOOL</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="email" placeholder="Email" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" required />
            </div>
            <input type="submit" value="Login" class="btn solid" />
          
          </form>


          <form action="#" class="sign-up-form">
            <img src="/images/logo.png" alt="">
            <h2 class="title">AMLAC SENIOR HIGH SCHOOL</h2>

            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="First Name" />
            </div>

            <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Last Name" />
              </div>

            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" />
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" />
            </div>

             <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Confirmed Password" />
              </div>
              
              <div class="input-field">
                <i class="fas fa-file"></i>
               
                <input class="file-input" type="file" placeholder="" />
              </div>
            <input type="submit" class="btn" value="Sign up" />
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
              ex ratione. Aliquid!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script>
        const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});
    </script>
  </body>
</html>