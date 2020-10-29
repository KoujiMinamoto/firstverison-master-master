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
      case "booklets": {
            window.history.pushState('booklets', null, '/product/booklets');
            break;
      }
      case "brochures": {
          window.history.pushState('brochures', null, '/product/brochures');
          break;
      }
      case "businessCards": {
          window.history.pushState('businessCards', null, '/product/businessCards');
          break;
      }
        case "deskpadsNotepads": {
            window.history.pushState('deskpadsNotepads', null, '/product/deskpadsNotepads');
            break;
        }
        case "directMarketing": {
            window.history.pushState('directMarketing', null, '/product/directMarketing');
            break;
        }
        case "docketBooks": {
            window.history.pushState('docketBooks', null, '/product/docketBooks');
            break;
        }
        case "envelopes": {
            window.history.pushState('envelopes', null, '/product/envelopes');
            break;
        }
        case "expressPrinting": {
            window.history.pushState('expressPrinting', null, '/product/expressPrinting');
            break;
        }
        case "flyers": {
            window.history.pushState('flyers', null, '/product/flyers');
            break;
        }
        case "fridgeMagnets": {
            window.history.pushState('fridgeMagnets', null, '/product/fridgeMagnets');
            break;
        }
        case "letterheads": {
            window.history.pushState('letterheads', null, '/product/letterheads');
            break;
        }
        case "postcards": {
            window.history.pushState('postcards', null, '/product/postcards');
            break;
        }
        case "posters": {
            window.history.pushState('posters', null, '/product/posters');
            break;
        }
        case "presentationFolders": {
            window.history.pushState('presentationFolders', null, '/product/presentationFolders');
            break;
        }
        case "withCompliments": {
            window.history.pushState('withCompliments', null, '/product/withCompliments');
            break;
        }
        case "websiteDesign": {
            window.history.pushState('websiteDesign', null, '/product/websiteDesign');
            break;
        }
      default:
        return;

    }
  }


window.addEventListener('popstate',function(e){
        // console.log(e.state);
        // var state = e.state;
        // $('#router').html('<p>导航1：</p>'+state[0]+'<p>导航2：</p>'+state[1]+'<p>导航3：</p>'+state[2])
        switch(e.state)
        {
            case "home":{
                showHeaderPage(0);
                break;
            }
            case "design":{
                showHeaderPage(2);
                break;
            }
            case "gallary":
                showHeaderPage(3);
                break;
            case "support":
                showHeaderPage(4);
                break;
            case "aboutUs":
                showHeaderPage(5);
                break;
            case "contact":
                showHeaderPage(6)
                break;
            case "cart":
                showHeaderPage(7);
                break;
            case "login":
                showHeaderPage(8);
                break;
            case "register":
                showHeaderPage(9);
                break;
            case "booklets":
                showProductPage(0);
                break;
            case "brochures":
                showProductPage(1);
                break;
            case "businessCards":
                showProductPage(2);
                break;
            case "deskpadsNotepads":
                showProductPage(3);
                break;
            case "directMarketing":
                showProductPage(4);
                break;
            case "docketBooks":
                showProductPage(5);
                break;
            case "envelopes":
                showProductPage(6);
                break;
            case "expressPrinting":
                showProductPage(7);
                break;
            case "flyers":
                showProductPage(8);
                break;
            case "fridgeMagnets":
                showProductPage(9);
                break;
            case "letterheads":
                showProductPage(10);
                break;
            case "postcards":
                showProductPage(11);
                break;
            case "posters":
                showProductPage(12);
                break;
            case "presentationFolders":
                showProductPage(13);
                break;
            case "withCompliments":
                showProductPage(14);
                break;
            case "websiteDesign":
                showProductPage(15);
                break;

            default :
                break;
        }

})
