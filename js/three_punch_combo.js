   $i = 0;
        $('#start').click(function(){
            $i++;
            if($i >=6 ){
                $('#start').hide();
                $('#stop').show();
            }
        })
        $('#stop').click(function(){
            alert('美食虽好,切忌贪吃，还是要按时吃好一日三餐！')
            $(this).hide();
        })
