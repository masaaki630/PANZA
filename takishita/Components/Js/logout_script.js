
const logout = document.getElementById('logout');

logout.addEventListener("click",function(event){
    if (!confirm("ログアウトしますか？")) {
        event.preventDefault();
    }
});
