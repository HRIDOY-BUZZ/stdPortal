<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script>
    const navBtn=document.querySelector("#bar-btn");
    const sidebar=document.getElementById("sidebar");
    const sidebarMainContent=document.getElementById("sidebar-main-content");
    const homeContainer=document.getElementById("home-container");
    navBtn.onclick= function(){
        sidebar.classList.toggle("active");
        sidebarMainContent.classList.toggle("active");
        homeContainer.classList.toggle("active-2");
    }

    var w = window.innerWidth;
    window.addEventListener('load',()=>{
        if (w<688) {
        sidebar.classList.toggle("active");
        sidebarMainContent.classList.toggle("active");
        homeContainer.classList.toggle("active-2");
    }
    })
</script>
<script>
    function dropDownEvent(e) {
        const gg= document.getElementById(`${e}-menu`);
        // console.log((gg.childNodes[1]));
        for (let i = 0; i < gg.childNodes.length; i++) {
            if (gg.childNodes[i]?.id == `${e}-sub-menu`) {
                document.getElementById(`${e}-sub-menu`).classList.toggle("close");
            }
        }
    }
</script>
