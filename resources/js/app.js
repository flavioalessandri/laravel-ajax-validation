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

                var news =
                          `<li><a href="/post/show/ ${post['id']} ">
                               TITLE: ${ post['title']}
                               GENRE: ${ post['genre']}
                               LIKE: ${ post['like']}
                               </a></li> `;

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
