
function showEdit(editableObj) {
    $(editableObj).css("background","#FFF");
}


function saveToDatabase(editableObj,column,id) {
    $(editableObj).css("background","#FFF url(loaderIcon.gif) no-repeat right");
    $.ajax({
        url: "saveedit.php",
        type: "POST",
        data:'column='+column+'&editval='+editableObj.innerHTML+'&id='+id,
        success: function(data){
            $(editableObj).css("background","#FDFDFD");
        }
    });
}





function Deleterow(editableObj,id) {
    $(editableObj). css("background","#FFF ");
    $.ajax({
        url: "delete2.php",
        type: "POST",
        data:'id='+id+'&editval='+editableObj.innerHTML,
        success: function(data){
            location.reload();
        }
    });
}