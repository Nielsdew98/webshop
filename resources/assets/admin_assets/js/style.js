import $ from 'jquery';

$(document).ready(function() {
    var panels = $('.user-infos');
    var panelsButton = $('.dropdown-user');
    panels.hide();

    //Click dropdown
    panelsButton.click(function () {
        //get data-for attribute
        var dataFor = $(this).attr('data-for');
        var idFor = $(dataFor);

        //current button
        var currentButton = $(this);
        idFor.slideToggle(400, function () {
            //Completed slidetoggle
            if (idFor.is(':visible')) {
                currentButton.html('<i class="fas fa-chevron-up text-muted"></i>');
            } else {
                currentButton.html('<i class="fas fa-chevron-down text-muted"></i>');
            }
        });
    });
    $('.owninput').blur(function() {
        var $this = $(this);
        if ($this.val()){
            $this.addClass('used');
        } else{
            $this.removeClass('used');
        }
    });
    var i = 1;
    var awards = [];
    $('#addaward').on('click', function(e){
        e.preventDefault();
        var awardname = $("#awardname").val();
        if (awards.includes(awardname) ){
            alert("Award staat al tussen de select opties");
        }else{
            awards.push(awardname);
            $('#awardsselect').append(new Option(awardname, awardname, true, true));
        }
        i++;
        Session["awards"]= awards;
    });
    $('#product_description').summernote({
            height: 300,
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['undo','redo']],
            ],
        });
});
