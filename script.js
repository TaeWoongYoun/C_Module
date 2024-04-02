$(".login-btn").click(function(){
    $(".login").show();
})
$(".join-btn").click(function(){
    $(".join").show();
})
$("#login-reset").click(function(){
    $(".login").hide();
})
$(".id_check").click(function(){
    alert("사용 중인 ID입니다.");
})
$("#join-submit").click(function(){
    alert("관리자 승인 대기 중입니다.");
    $(".join").hide();
})
$("#join-reset").click(function(){
    $(".join").hide();
})