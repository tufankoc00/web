function switcher(){
    const mvr = document.getElementById('mover');
    const btn = document.getElementById('button');
    const body = document.getElementsByTagName("BODY")[0];
    
    if(btn.className == "button day"){
      mvr.style.transform = "translateY(-25px)";
      btn.className = "button night";
      btn.style.boxShadow = "0px 0px 16px rgba(255, 255, 255, 5)";
      body.style.backgroundColor = "#0E0E0E";
      body.style.color = "white";
    } else{
      mvr.style.transform = "translateY(0)";
      btn.className = "button day";
      btn.style.boxShadow = "0px 0px 16px rgba(0, 0, 0, 5)";
      body.style.backgroundColor = "white";
      body.style.color = "Black";
    }
  }