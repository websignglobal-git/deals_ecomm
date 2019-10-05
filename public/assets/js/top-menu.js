function scroll() {
      var elmnt = document.querySelector("html");
      var y = elmnt.scrollTop;
       if(y == 0){
       document.querySelector('#scroll_full').style.width="80%";
       document.querySelector('#scroll_full').style.transition=".5s";
       }
       else{
        document.querySelector('#scroll_full').style.width="100%";
        document.querySelector('#scroll_full').style.transition=".5s";
        }
    }