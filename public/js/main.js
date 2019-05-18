(function(){
  'use strict';
  let cmds = document.getElementsByClassName('del');
  for (let i = 0; i < cmds.length; i++) {
    cmds[i].addEventListener('click', function(e){
      e.preventDefault();
      document.getElementById('task_' + this.dataset.id).submit();
    });
  }
})();


// function doneCheck(){
//   let done = document.getElementsByClassName('done');
//   // for (let i = 0; i < done.length; i++) {
//     console.log(this.id);
//     if (this.checked) {
//       console.log('checked');
//     }
//   // }
// }

// $(document).ready(function(){
//     $('.done').click(function(){
//       if ($(this).is(':checked')) {}
//       $.ajax({
        
//       });

// });