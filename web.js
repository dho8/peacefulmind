document.addEventListener("DOMContentLoaded", function () {
  const imageList = document.querySelector(".image-list");
  let isMoving = true;
  let intervalId;

  function moveImages() {
    intervalId = setInterval(function () {
      imageList.scrollLeft += 1; // Adjust scrolling speed as needed
    }, 20); // Adjust the interval for smoother/faster movement
  }

  moveImages();

  imageList.addEventListener("click", function (event) {
    if (isMoving) {
      clearInterval(intervalId);
      isMoving = false;
    } else {
      moveImages();
      isMoving = true;
    }
  });
});



