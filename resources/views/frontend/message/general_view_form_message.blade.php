<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://codepen.io/skjha5993/pen/bXqWpR.css">
    <title>Registration Form Using Bootstrap 4</title>
    <style>
        label {
            font-weight: 600;
            color: rgb(15, 10, 153);
        }

        body {
            background: rgb(24, 8, 40);
        }



.jumbotron{


    padding: 1rem 0rem;

}



.container{

   margin-left: 270px;
   width: 800px; 
   height:70px; 
   background:#00BFFF; 
   margin-top:10px;

}

    </style>




</head>



<body>
    {{-- style="width: 800px; height:280px; background:#00BFFF" --}}

    {{-- Start General View --}}
    <div class="container" >


        <h4 style="color: #031419; margin-left:-30px" class="text-center">See Message Details</h4>
        <div class="row jumbotron" style="height: 270px">


            <div class="col-sm-12 form-group" style="margin-left: 600px">


                <a class="btn btn-primary" style="padding:5px 30px; font-size:15px;"
                href="https://mail.google.com/mail/u/0/?tab=wm#inbox?compose=new">Send Email</a>

            </div>


            <div class="col-sm-4 form-group">
                <label for="">Name:</label>
                {{ $general_view_admin_form_message->name }}
            </div>

            <div class="col-sm-4 form-group">
                <label for="email">Phone:</label>
                {{ $general_view_admin_form_message->phone }}
            </div>

            <div class="col-sm-4 form-group">
                <label for="email">Email:</label>
                {{ $general_view_admin_form_message->email }}
            </div>

            <label for="address-2" style="margin-left: 14px">Message:</label>
            <div class="col-sm-9 form-group card" style="width: 500px; height:100px; margin-left:10px">


                    {{ $general_view_admin_form_message->message }}



            </div>




        </div>
    </div>

    {{-- End General View --}}







</body>

</html>
