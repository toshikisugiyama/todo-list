(function(){
  'use strict';
  let task_del = document.getElementsByClassName('del');
  for (let i = 0; i < task_del.length; i++) {
    task_del[i].addEventListener('click', function(e){
      e.preventDefault();
      document.getElementById('task_del_' + this.dataset.id).submit();
    });
  }
})();
