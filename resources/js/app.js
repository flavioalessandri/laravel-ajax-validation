require('./bootstrap');

window.$ = require('jquery');


function getData(bestOf){

  console.log("GOOO");

  var url = "/api/posts/all";

  if (bestOf){
     url = "/api/posts/best";
  }

  $.ajax( {


    url : url ,
    method : "GET",
    success: function ( posts ){
              console.log("SUCCESS", posts);

              var target = $('#postTarget');

              target.html('');
              for (var i = 0; i < posts.length; i++) {



                var post = posts[i];

                var news = `<br><a href="/post/show/ ${post['id']} ">click me to show Post</a>`;
                var html = "<li> TITLE: " + post['title'] +" LIKE: " + post['like'] + "</li> ";

                target.append(html);
                target.append(news);

                }
              },
    error:    function (error){
              console.log("Error", error);
    }
  });

}



function addBestPostListener(){

  var inputCheck = $('#postBest');
  inputCheck.change(bestOfToggle);

}

function bestOfToggle(){

  var me = $(this);
  var isChecked = me.is(':checked');

  console.log(isChecked);

   getData(isChecked);


}


function init(){

  getData(false);

  addBestPostListener();

}






$(document).ready(init);
