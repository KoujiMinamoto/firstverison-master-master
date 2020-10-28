function sendEmail() {
    $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        type: "POST",
        url: "test1014/public/api/sendEmail",
        dataType:'json',
    });
}