var temp = 1;

(function runForever(){
  test();
  temp += 1
  setTimeout(runForever, 5500)
})()

function test() {
  if (temp % 3 == 1) {
    var txt = 'Hello! Welcome to My Website!';
  } else if (temp % 3 == 2) {
    var txt = 'My name is Doston!';
  } else {
    var txt = 'I am a Developer!';
  }
  var i = 0;
  var speed = 90;
  var demo = document.getElementById("demo");
  var text_list = '';
  var j = txt.length;
  typeWriter(i, txt, demo, text_list, j);
}

function typeWriter(i, txt, demo, text_list, j) {
  text_list += txt.charAt(i);
  if (i < txt.length) {

    demo.innerHTML = text_list;
    i++;
    setTimeout(function(){typeWriter(i, txt, demo, text_list, j)}, 110);
  } else {
    erase(text_list, demo, j);
  }

function erase(text_list, demo, j) {
  sleep(1000)
  if (j != 0) {

    text_list = text_list.slice(0, -1)
    demo.innerHTML = text_list;
    j = j - 1;
    // console.log(j);
    setTimeout(function(){ erase(text_list, demo, j ) }, 60);
    // console.log(j);
  }
}


}
