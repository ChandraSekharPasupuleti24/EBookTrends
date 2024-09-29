function butt(id){
  let but=document.getElementById(id)
  but.style.borderTop = "4px solid #f3565d" 
  let but1 = document.getElementById("but1")
  let but2 = document.getElementById("but2")
  let but3 = document.getElementById("but3")
  const div1 = document.getElementById("div1");
  const div2 = document.getElementById("div2");
  const div3 = document.getElementById("div3");
  but1.style.outline = "none"
  but2.style.outline = "none"
  but3.style.outline = "none"
  if(id=="but1"){  
      but2.style.borderTop = "none" 
      but3.style.borderTop = "none"
      but2.style.backgroundColor = "transparent"
      but3.style.backgroundColor = "transparent"
      if(div1.style.display==="none")
          div1.style.display = "block"
      div2.style.display = "none"
      div3.style.display = "none"
  }
  if(id=="but2"){
      but1.style.borderTop = "none" 
      but3.style.borderTop = "none"
      but1.style.backgroundColor = "transparent" 
      but3.style.backgroundColor = "transparent"
      if(div2.style.display==="none")
          div2.style.display = "block"
      div1.style.display = "none"
      div3.style.display = "none"
  }
  if(id=="but3"){
      but1.style.borderTop = "none" 
      but2.style.borderTop = "none"
      but1.style.backgroundColor = "transparent"
      but2.style.backgroundColor = "transparent" 
      if(div3.style.display==="none")
          div3.style.display = "block"
      div1.style.display = "none"
      div2.style.display = "none"
  }
}
function changeevent(id){
  const buttons = document.getElementsByClassName("text-box")
  const text = document.getElementsByClassName("text")
  let color
  let sel = document.getElementById(id)
  let sel1 = document.getElementById(id + "1")
  let btn = document.getElementById(id + "2")
  let arrow = document.getElementById(id + "3")
  let arrow1 = document.getElementsByClassName("arrow")
  let btn1 = document.getElementsByClassName("btn")
  for (let i = 0; i < btn1.length; i++) {
      btn1[i].style.backgroundColor = "white"
  }
  for (let i = 0; i < arrow1.length; i++) {
      arrow1[i].src = "picturess/arrow.png"
      arrow1[i].style.height = "20px"
      arrow1[i].style.width = "20px"
      arrow1[i].style.left = "6px"
      arrow1[i].style.top = "6px"
  }
  let status = sel1.style.display
  for (let i = 0; i < text.length; i++) {
      text[i].style.display = "none"
  }
  if(sel.style.backgroundColor === "white")
  {
      sel.style.backgroundColor = "rgb(248 198 185)"
      btn.style.backgroundColor = "rgb(248 198 185)"
      arrow.src = "picturess/arrow-down.png"
      arrow.style.height = "30px"
      arrow.style.width = "30px"
      arrow.style.left = "0px"
      arrow.style.top = "1px"
      color = "rgb(248 198 185)"
  }
  else
  {
      sel.style.backgroundColor = "white"
      btn.style.backgroundColor = "white"
      arrow.src = "picturess/arrow.png"
      arrow.style.height = "20px"
      arrow.style.width = "20px"
      arrow.style.left = "6px"
      arrow.style.top = "6px"
      color = "white"
  }
  for (let i = 0; i < buttons.length; i++) {
    buttons[i].style.backgroundColor = "white"
  }
  sel.style.backgroundColor = color
  btn.style.backgroundColor = color
  sel.style.outline = "none"
  if(status==="none")
  {
      sel1.style.display="block"
  }
  else
      sel1.style.display="none"
}