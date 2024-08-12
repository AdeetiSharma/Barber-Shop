<!-- font awesome script -->
<script
      src="https://kit.fontawesome.com/c7dbda0798.js"
      crossorigin="anonymous">
      

const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener('click', () =>{
    container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener('click', () =>{
    container.classList.remove("sign-up-mode");
});


    </script>
  </body>
</html>