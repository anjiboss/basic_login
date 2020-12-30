$(function(){
  path = window.location.pathname;
  let _pathname = "";
  for(let i = 1; i < path.length; i++){
    _pathname += path[i];
  }
  if (_pathname === "") {
      $("a[href*='index.php']").css("color", "deepskyblue");
  }
  $("a[href*='"+_pathname+"']").css("color", "deepskyblue");
});
