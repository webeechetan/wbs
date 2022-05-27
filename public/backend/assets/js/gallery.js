$(document).ready(function() {
    let rand_number = 0;
    let url = "/gallery/ajax";
    let list = "<div class='row'>";
    let image_url = $("#image_url").val();
    $.post(url, {ajax:'true'}, function(data,status) {
        for(x of data) {
           list += `<div class="col-xl-3 col-sm-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <div class="mx-auto mb-4">
                                <img src="${image_url}/${ x.image }" height='120' width="200">
                            </div>
                            <h5 class="font-size-15 mb-1"><a href="javascript: void(0);" class="text-dark">${ x.name }</a></h5>
                        </div>
                        <div class="card-footer bg-transparent border-top">
                            <div class="contact-links d-flex font-size-20">
                                <div class="flex-fill" title="Copy Path">
                                    <a href="javascript: void(0);"><i class="bx bxs-copy copy_path" data-path="${image_url}/${x.image}"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>`;
        }
        list += "</div>";
        $(".images_list").html(list);
    });
})

$(document).on("click", ".copy_path" , function() {
    let path = $(this).data("path");
    var sampleTextarea = document.createElement("textarea");
    document.body.appendChild(sampleTextarea);
    sampleTextarea.value = path; 
    sampleTextarea.select();
    document.execCommand("copy",false,path);
    document.body.removeChild(sampleTextarea);
    toastr["success"]('Copied');
    let input_setter = $('[data-temp_input_selector="random_number'+rand_number+'"]');
    console.log(path)
    $(input_setter).val(path);
    $(".gallery_modal").modal('hide');
});

$(".open_gallery").click(function(){
    $(".gallery_modal").modal('show');
    rand_number = Math.floor((Math.random() * 100000) + 1);
    let input = $(this).parent().find("input");
    $(input).attr("data-temp_input_selector","random_number"+rand_number);
})


