function register_close()
{
  $(document).ready(function(){
  $("#login").modal("show");
  $("#register").modal("hide");
});
}
function login_close()
{
  $(document).ready(function(){
  $("#register").modal("show");
  $("#login").modal("hide");
});
}
function buy_product(){
    location.href="buy_product.html";
}
function return_home(){
    location.href="homepage.html";
}
function payment_success(){
    $(document).ready(function(){
    $("#payment_success").modal("show");
    $("#make_payment").modal("hide");
    });
}
function add_to_cart(){
  document.getElementById("cart_no").innerHTML++;
  $(document).ready(function(){
  $("#add_success").modal("show");
  $("#ed_1").modal("hide");
  $("#ed_2").modal("hide");
  });
}
const getId=(id)=>{
  document.cookie="category="+id
  localStorage.setItem("category", id);
}
