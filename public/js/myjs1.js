$(function(){
    $('li[role="presentation"]').on('click', function(e){
      $('ul[role="tablist"] li').removeClass('active');
      $(this).addClass('active');
    })
  })
// $('#myTab a').on('click', function (e) {
//     e.preventDefault()
//     $(this).tab('show')
//   })
//   $('#myTab a[href="/labtop"]').tab('show') // Select tab by name
// $('#myTab li:first-child a').tab('show') // Select first tab
// $('#myTab li:last-child a').tab('show') // Select last tab
// $('#myTab li:nth-child(3) a').tab('show') // Select third tab