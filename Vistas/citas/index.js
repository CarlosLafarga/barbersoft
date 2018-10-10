     $(document).ready(function() {

             /* initialize the calendar
         -----------------------------------------------------------------*/
        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();

        $('#calendar').fullCalendar({
           header:{
            center:'title',
            left:'month,agendaWeek,agendaDay'
           }

            
        });

        /* initialize the clockpicker
         -----------------------------------------------------------------*/
        $('.clockpicker').clockpicker();


      

         $('#guardar').click(function() {
                var data = $('#form-citas').serialize();
                console.log(data);
          });

    });