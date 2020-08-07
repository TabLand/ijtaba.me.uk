my_local_time_ep1 = "Sat Aug 08 2020 17:00:00 GMT+0100 (British Summer Time)";

function format(num, text){
  if(num == 1){
    return num + " " + text;  
  }
  else {
    return num + " " + text + "s";
  }
}

function update_time_left(){
  date_diff = Math.floor((new Date(my_local_time_ep1) - (new Date())) / 1000);
  seconds = date_diff % 60;
  minutes = Math.floor(date_diff/60) % 60;
  hours   = Math.floor(date_diff/60/60) % 24;
  days    = Math.floor(date_diff/60/60/24);

  output = format(days, "day") + " " + format(hours, "hour") + " " + format(minutes, "minute") + " " + format(seconds, "second");
  document.getElementById("time-difference-ep1").innerText = output;
}

function apply_times(){
  your_local_time_ep1 = new Date(my_local_time_ep1);
  document.getElementById("your-local-time-ep1").innerText = your_local_time_ep1;
  setInterval(update_time_left, 300);
}
