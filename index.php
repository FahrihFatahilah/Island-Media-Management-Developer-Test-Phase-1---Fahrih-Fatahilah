<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Island Media Management Developer Test Phase 1</title>

    <style>
        .today{
            background:#EDEDED;
            padding:20px;
        }

        .TodayDate{
            color:#4CAF50;
        }

        .TextTodayDate{
            text-align:center;
        }
        
        .TodayDate{
            text-align:center;
            font-weight:bold;
            color:#167D27;
        }

        .day{
            color:#0094F8;
            font-weight:bold;
        }
        .selectedDay{
            color:#0094F8;
            font-weight:bold;
        }

        .wrap{
            display: flex; 
            padding: 10px; 
            margin-top: 30px; 
            background:#C5CDCB
        }
    </style>

</head>
<body>

       <?php
       $array = [
           "Monday",
           "Tuesday",
           "Wednesday",
           "Thursday",
           "Friday",
           "Saturday",
           "Sunday",
       ];
       $get_date_today = date("l");
       echo '
                <div class="today">
                <div class="TextTodayDate">Today Is <span class="TodayDate" >' .
           $get_date_today .
           '</span></div>
                <div class="wrap">
            ';
       foreach ($array as $key => $value) {
           if ($value == $get_date_today) {
               $color = "#167D27";
           } else {
               $color = "#0094F8";
           }
           echo '
                    <div style="flex: 20%">
                        <div class="selected_day" style="background:' .
               $color .
               ';margin:10px;text-align:center;color:#FFFFFF;padding:10px;cursor: pointer;">' .
               $value .
               '</div>
                    </div>
                ';
       }
       echo '
                </div>
                <div id="get_clicked_date" style="text-align:center; margin-top:30px;">Selected Day Is <span style="color:#0094F8;font-weight:bold;" class="selectedDay">' .
           $get_date_today .
           '</span></div>
                </div>
            ';
       ?>
        
  
    </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $('.selected_day').click(function(){
            $('.selected_day').css('box-shadow', 'none');
            $('.selected_day').css('outline', 'none');
            var day = $(this).text();
            $('#get_clicked_date').html('Selected Day Is <span style="color:#0094F8;font-weight:bold;">'+day+'</span>');
            $(this).css('box-shadow', '0 0 10px #333');
            $(this).css('outline', 'solid 1px #fff');
        });
    });
</script>
</body>
</html>