function home(){
  document.querySelector('#home').style.display = 'block';
  document.querySelector('#articles').style.display = 'none';
}
function articles(){
  document.querySelector('#articles').style.display = 'block';
  document.querySelector('#home').style.display = 'none';
}
var days = ['Nd', 'Pon', 'Wt', 'Śr', 'Czw', 'Pi', 'Sob'];
function startTime() {
  const today = new Date();
  var dayName = days[today.getDay()];
  let h = today.getHours();
  let m = today.getMinutes();
  let s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('clock').innerHTML =  h + " : " + m + " : " + s;
  document.getElementById('date').innerHTML =  String(today.getDate()).padStart(2, '0')+'/'+String(today.getMonth() + 1).padStart(2, '0')+' <span>'+dayName+'</span>';
  setTimeout(startTime, 1000);
}

function checkTime(i) {
  if (i < 10) {i = "0" + i};
  return i;
}
startTime();
