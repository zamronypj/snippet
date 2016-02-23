onmessage = function(event) {
  importScripts('http://snip.pet/highlight/highlight.pack.js');
  var result = self.hljs.highlightAuto(event.data);
  postMessage(result.value);
}


