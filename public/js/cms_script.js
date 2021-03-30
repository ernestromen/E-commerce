$('#article').summernote({
height:300

});

String.prototype.permalink = function () {
    return this.toString().trim().toLowerCase().replace(/\s/g, '-');
};
$('.origin-text').on('input', function () {
   $('.target-text').val($(this).val().permalink());
});