<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultant</title>
    
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css"/>
</head>
<body>
<div class="container"> 
    Consultantul :
        <form id="formular">
            <div class="form-group">
              <label for="nume">Nume:</label>
              <input type="text" class="form-control" id="nume">
            </div>
            <div class="form-group">
              <label for="prenume">Prenume:</label>
              <input type="text" class="form-control" id="prenume">
            </div>
            <div class="form-group">
               <label for="program">Program:</label>
               <input type="text" class="form-control" id="program">
             </div>
            <button class="btn btn-primary">Submit</button>
        </form>
    
<div>
    <?php // afisez tabelul cu intervale orare
    use App\Routes\Generator; generez_date();
    ?>
</div>




    <script src="http://code.jquery.com/jquery-3.3.1.min.js"
               integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
               crossorigin="anonymous">
    </script>

    <script>
         jQuery(document).ready(function(){
            jQuery('#ajaxSubmit').click(function(e){
               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  } <?php // pentru date de tip post avem CSRF ?>
              });
               jQuery.ajax({
                  url: "{{ url('/consultant/post') }}",
                  method: 'post',
                  data: {
                    nume: jQuery('#nume').val(),
                    prenume: jQuery('#prenume').val(),
                    program: jQuery('#program').val()
                  },
                  success: function(result) {
                    jQuery('.alert').show();
                    jQuery('.alert').html(result.success);
                  }});
               });
            });
    </script>
</body>
</html>
