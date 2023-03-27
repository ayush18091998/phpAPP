const link = {
  address : "https://fastly.picsum.photos/id/316/200/200.jpg?hmac=f0i62VkjVy8OPLP77Xf7mdZa3UBNlTOXFm9WpDMOiiA"
}
var parent=document.querySelectorAll(".grid");
for(let j=0;j<parent.length;j++){
for(let i=0;i<10;i++){
    var image = document.createElement("img");
    image.setAttribute("src", link.address);
    parent[j].appendChild(image);
 }
}