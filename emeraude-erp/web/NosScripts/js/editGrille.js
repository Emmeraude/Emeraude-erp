/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
(function($){
    $('#addUE').click(function(e){
<<<<<<< HEAD
        var div = document.getElementById('templateUE'),
            form = document.getElementById('formulaire');
        var nouvelUE = div.cloneNode(true);
        form.insertBefore(nouvelUE,div);
        nouvelUE.style.display = 'block';
    }
            );
})(jQuery);
=======
        var form = document.getElementById('formulaire');
        var div = document.getElementById('templateUE');
        var nouvelUE = div.cloneNode(true);
        var list = $('.templateUE');
        var n = list.length-1;
        var text=nouvelUE.innerHTML.replace(/__name__/g, '_'+n+'_');
        text=text.replace(/\[_(\S)_\]/g, '[$1]');
        nouvelUE.id += n;
        nouvelUE.innerHTML = text;
        //alert(nouvelUE.innerHTML);
        nouvelUE.style.display = 'block';
        var model = nouvelUE.firstElementChild.nextElementSibling.nextElementSibling.firstElementChild.lastElementChild.firstElementChild.firstElementChild;
        model.style.display = 'block';
        nouvelUE.firstElementChild.nextElementSibling.nextElementSibling.firstElementChild.lastElementChild.innerHTML = '';
        nouvelUE.firstElementChild.nextElementSibling.nextElementSibling.firstElementChild.lastElementChild.appendChild(model);
        form.insertBefore(nouvelUE, div);
        $('.mySelect').SumoSelect({placeholder: 'Selectionner les Ecs'});
        e.preventDefault();
    }
            );
    $('#terminer').click(function(){
        var form = document.getElementById('formulaire');
        var div = document.getElementById('templateUE');
        form.removeChild(div);
    });
    
    $('.removeUE').click(function(){
        
    });
})(jQuery);
>>>>>>> e6fdc6664e6a6e0b1d84df385d6e9c2eab55dd6d
