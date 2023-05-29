function enlargeImage(img) {
  var overlay = document.createElement("div");
  overlay.style.position = "fixed";
  overlay.style.top = 0;
  overlay.style.left = 0;
  overlay.style.width = "100%";
  overlay.style.height = "100%";
  overlay.style.backgroundColor = "rgba(0,0,0,0.8)";
  overlay.style.zIndex = 9999;
  overlay.onclick = function() {
    document.body.removeChild(overlay);
  };
  var enlargedImg = document.createElement("img");
  enlargedImg.src = img.src;
  enlargedImg.style.position = "absolute";
  enlargedImg.style.top = "50%";
  enlargedImg.style.left = "50%";
  enlargedImg.style.transform = "translate(-50%,-50%)";
  enlargedImg.style.maxHeight = "90%";
  enlargedImg.style.maxWidth = "90%";
  
  overlay.appendChild(enlargedImg);
  document.body.appendChild(overlay);
}