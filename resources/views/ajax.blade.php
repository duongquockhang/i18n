<html>
<head>
    <title> Demo AJAX </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <div id="result"></div>
    <form id="ajax-form" method="POST" action="{{ route('ajax.request') }}">
        @csrf
        <input type="text" name="name" placeholder="Nhập tên của bạn">
        <button type="submit"> Gửi yêu cầu AJAX </button>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#ajax-form').submit(function(event){
                event.preventDefault();
                var formData = $(this).serialize();
                var url = $(this).attr('action');
                $.ajax({
                    url: url,
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: formData,
                    success: function(response){
                        $('#result').html(response.message);
                    }
                });
            });
        });
    </script>
</body>
</html>
