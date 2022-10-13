<?php
echo '
<script>
    function checkingWindow(){
        let login = document.querySelector("#login");
        let register = document.querySelector("#register");

        if(window.innerWidth >= 576 && window.innerWidth <= 992){
            login.classList.remove("btn-outline-success");
            login.classList.add("btn-success");
            login.classList.add("mx-auto");
            login.classList.add("mt-2");

            register.classList.remove("btn-outline-primary");
            register.classList.add("btn-primary");
            register.classList.add("mx-auto");
            register.classList.add("mt-2");
        }else{
            login.classList.add("btn-outline-success");
            login.classList.remove("btn-success");
            login.classList.remove("mx-auto");
            login.classList.remove("mt-2");

            register.classList.add("btn-outline-primary");
            register.classList.remove("btn-primary");
            register.classList.remove("mx-auto");
            register.classList.remove("mt-2");
        }
    }

    window.onload = checkingWindow;
    setInterval(checkingWindow, 500);
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>'
?>