/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
(function($){
    $('#addUE').click(function(e){
        var div = document.getElementById('templateUE'),
            form = document.getElementById('formulaire');
        var nouvelUE = div.cloneNode(true);
        form.insertBefore(nouvelUE,div);
        nouvelUE.style.display = 'block';
    }
            );
})(jQuery);
