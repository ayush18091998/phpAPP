let allDelBtn = document.querySelectorAll(".delete")
for(let i=0;i<allDelBtn.length;i++){
    allDelBtn[i].addEventListener("click",(e)=>{
        let parent=e.target.parentNode.parentNode.parentNode;
        parent.remove();
        let u_id=parent.getAttribute("row");
    
    } )


}