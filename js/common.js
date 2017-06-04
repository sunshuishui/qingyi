function addLoadEvent(func){
 var oldonload = window.onload;
 if(typeof window.onload!= 'function' ){
   window.onload = func;
 }
 else{
  window.onload = function(){
  oldonload();
  func();
  }
 }
}

var inputtext = function(){
 var inputs = document.getElementsByTagName('INPUT');
 for(var i=0; i<inputs.length; i++){
  var str = "gray_input";
  if(str.indexOf(inputs[i].className)==-1) continue;
  var element = inputs[i];
  element.onfocus = function() {
     if (this.value == this.defaultValue) {
        this.value = "";
     this.className = "gray_input2";
    }
     }
       element.onblur = function() {
       if (this.value == "") {
          this.value = this.defaultValue;
     this.className = "gray_input";
          }
        }
 }
}

addLoadEvent(inputtext);