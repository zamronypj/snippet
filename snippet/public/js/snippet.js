addEventListener('load', function() {
  var code = document.querySelector('code');
  var worker = new Worker('highlightworker.js');
  worker.onmessage = function(event) { code.innerHTML = event.data; }
  worker.postMessage(code.textContent);
})

