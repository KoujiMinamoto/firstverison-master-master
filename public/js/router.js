// history路由的主要两个函数
// history.replaceState(dataObj,title,url)
// 将最新一条的history覆盖掉
// history.pushState(dataObj,title,url)
// 在当前地址上追加


function linkTo(link){
    switch(link) {
      case "home": {
        window.history.pushState('home', null, '/home');
        break;
      }
      case "design": {
        window.history.pushState('design', null, '/design');
        break;
      }
      case "gallary": {
        window.history.pushState('gallary', null, '/gallary');
        break;
      }
      case "support": {
        window.history.pushState('support', null, '/support');
        break;
      }
      case "aboutUs": {
        window.history.pushState('aboutUs', null, '/aboutUs');
        break;
      }
      case "contact": {
        window.history.pushState('contact', null, '/contact');
        break;
      }
      case "cart": {
        window.history.pushState('cart', null, '/cart');
        break;
      }
      case "login": {
        window.history.pushState('login', null, '/login');
        break;
      }
      case "register": {
        window.history.pushState('register', null, '/register');
        break;
      }
      default: 
        return;

    }
  }


window.addEventListener('popstate',function(e){
        console.log(e.state);
        var state = e.state;
        $('#router').html('<p>导航1：</p>'+state[0]+'<p>导航2：</p>'+state[1]+'<p>导航3：</p>'+state[2])

})