/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
(function($){
    $('#editOne').click(function(e){
        var list = $('.parcourt:checked'),
            n = list.length;
        if(n==1){
<<<<<<< HEAD
            //this.href = this.href.replace('\d+','/'+list[0].value);
            //alert(this.href);
=======
            this.href = this.href.replace(/\/\d+/, '');
>>>>>>> e6fdc6664e6a6e0b1d84df385d6e9c2eab55dd6d
            this.href += '/'+list[0].value;
        }else if(n>1){
            alert("vous ne pouvez editer qu'une grille à la fois");
            e.preventDefault();
        }else if(n==0){
            alert("svp cocher le parcourtType dont vous souhaitez editer la grille");
            e.preventDefault();
        }else{
            alert('salaud');
            e.preventDefault();
        }
    }
            );
})(jQuery);
