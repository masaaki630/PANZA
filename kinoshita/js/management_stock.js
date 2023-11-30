function incrementCount(button) {
  var countSpan = button.parentNode.nextElementSibling; // Get the <span> element
  var count = parseInt(countSpan.innerText, 10);
  
    countSpan.innerText = count + 1; // Increment count
  
}

function decrementCount(button) {
  var countSpan = button.parentNode.previousElementSibling; // Get the <span> element
  var count = parseInt(countSpan.innerText, 10);
  
  if (count > 0) {
    countSpan.innerText = count - 1; // Decrement count
  }
}