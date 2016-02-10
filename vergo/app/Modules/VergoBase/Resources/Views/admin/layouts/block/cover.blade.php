<script>
    $('#addICover span').on('click',function(){
        $('#selectCover').click();
    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#addICover img').attr('src', e.target.result);
                $(document).find('.spinner').hide();
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $('#selectCover[type=file]').on('change', function(){
        $('.spinner').show();
        readURL(this);
        //$('.spinner').hide();
    })

    $('#addPhoto span').on('click', function(){
        $('#coverInput').click();
        return;
    });
</script>