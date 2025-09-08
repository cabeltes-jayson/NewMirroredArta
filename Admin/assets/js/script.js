    $(document).ready(function(){
        $('.btn-info').click(function(){
            var userId = $(this).data('id');
            $.ajax({
                url: 'functions/fetch_member_details.php', // Your PHP file that will fetch member details
                type: 'POST',
                data: {userid: userId},
                success: function(response) {
                    $('#modalContent').html(response); // Load the response into the modal body
                    $('#memberModal').modal('show'); // Show the modal
                },
                error: function(xhr, status, error) {
                    console.error('Ajax Error:', status, error);
                }
            });
        });
    });