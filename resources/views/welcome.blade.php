<!DOCTYPE html>
<!-- Template by quackit.com -->
<html>
<head>
    <title>SunDay</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
</head>

<body style="height: 100%;">
    <div class="container-fluid">
        <div class="row" style="margin-top: -20px;">
            <div class="col-lg-12" style="background-color: red; text-align: center; margin-bottom: 20px">
                <p style="font-style: oblique; color: white; font-weight: bold; font-size: 60px">SUN*DAY</p>
            </div>
            <div class="container-fluid" style="background-color: white; padding-bottom: 20px;">
                <div class="row">
                    <div class="col-lg-6 col-sm-7  col-xs-12 mb-5" style="text-align: center; margin-top: 10px;">
                        <p style="color: red; font-size: 25px;">Today's Sun*Bear</p>
                        <p style="color: red; font-size: 100px; font-weight: bold; margin-top: -30px;">{{ $firstUser->name }}</p>
                        <form method="POST" action="/finished/{{ $firstUser->id }}" >
                            {{ csrf_field() }}
                            <input type="image" style="text-align: center; margin-top: -25px;" src="/img/Sun_Bear.png" height="100" width="110" />
                            <p style="color: red; font-size: 12px; margin-bottom: -10px; margin-top: 10px;">Click me to verify</p>
                        </form>
                        <p style="color: red; font-size: 12px">your sharing!</p>
                    </div>
                    <div class="col-lg-6 col-sm-5 col-xs-12 text-center">
                        <img class="img-circle" src="{{'/img/' . $firstUser->picture }}" alt="Today's Sun*Bear" height="300" width="300">
                    </div>
                </div>
            </div>
            <div class="col-lg-12" style="text-align: center; background-color: red; padding-top: 20px; padding-bottom: 10px;">
                <div class="row">
                    <input style="margin-left: 5px; margin-right: 5px; border-radius: 5px; font-size: 25px; font-style: oblique; font-weight: bold; color: red; border: none; height: 50px; width: 200px; padding: 0; background: white url(image) 0 0 no-repeat;" type="button" value="VOLUNTEER" data-toggle="modal" data-target="#favoritesModal">
                    @if ($firstUser->volunteer == 1)
                        <form method="POST" action="/cancel/{{ $firstUser->id }}">
                            {{ csrf_field() }}
                            <input style="margin-top: 20px;  border-radius: 5px; font-size: 25px; font-style: oblique; font-weight: bold; color: red; border: none; height: 50px; width: 160px; padding: 0; background: white url(image) 0 0 no-repeat;" type="submit" value="UNDO">
                        </form>
                    @endif
                    
                </div>
                <div style="margin-top: 20px;" class="col-lg-12"><p style="color: white; font-size: 40px; font-style: oblique; font-weight: bold;">MORNING GREETINGS</p></div>
                <div style="margin-top: 20px;" class="row">
                    <div style="color: white;" class="col-lg-4">
                        <p style="font-weight: bold; font-size: 16px;">CEBUANO LEVEL 1</p>
                        <p>Good morning : Maayong Buntag</p>
                        <p>Good afternoon : Maayong Hapon</p>
                        <p>Good evening : Maayong Gabii</p>
                        <p>Thank you : Salamat</p>
                        <p>Thank you so much : Salamat kaayo</p>
                        <p>You're Welcome: Walay Sapayan</p>
                    </div>
                    <div style="color: white;" class="col-lg-4">
                        <p style="font-weight: bold; font-size: 16px;">CEBUANO LEVEL 2</p>
                        <p>Una nako : i will go first</p>
                        <p>Amping : Take Care</p>
                        <p>Abot Nako : I have Arrived</p>
                        <p>Palihog : Please</p>
                        <p>Wa ko kasabot : i dont understand</p>
                        <p> Kaon Ta : Lets eat</p>
                    </div>
                    <div style="color: white;" class="col-lg-4">
                        <p style="font-weight: bold; font-size: 16px;">CEBUANO LEVEL 3</p>
                        <p>Padung nako : I'm on my way</p>
                        <p>Huwata ko : Wait for me</p>
                        <p>Asa naka? : where are you?</p>
                        <p>Humana naka? : are you done?</p>
                        <p>Nag unsa ka? : what are you doing?</p>
                        <p>Okay raka? : are you okay?</p>
                    </div>
                </div>
                <div style="margin-top: 20px;" class="row">
                    <div style="color: white;" class="col-lg-4">
                        <p style="font-weight: bold; font-size: 16px;">JAPANESE LEVEL 1</p>
                        <p>Ohayou Gozaimasu : Good morning</p>
                        <p>Konnichiwa : Good afternoon, Hello</p>
                        <p>Konbanwa : Good evening</p>
                        <p>Arigatou Gozaimasu : Thank you</p>
                        <p>Yoroshiku Onegaishimasu : Thank you in advance</p>
                        <p>Otsukaresama desu : Good job, Good bye, Hello</p>
                    </div>
                    <div style="color: white;" class="col-lg-4">
                        <p style="font-weight: bold; font-size: 16px;">JAPANESE LEVEL 2</p>
                        <p>Sumimasen : Execuse me.</p>
                        <p>Ittekimasu : I will go.</p>
                        <p>Itterasshai : Take Care.</p>
                        <p>Tadaima : I am home.</p>
                        <p>Okaeri nasai : Welcome back.</p>
                    </div>
                    <div style="color: white;" class="col-lg-4">
                        <p style="font-weight: bold; font-size: 16px;">JAPANESE LEVEL 3</p>
                        <p>Hajimemasite: Nice to meet you.</p>
                        <p>[NAME] to moushimasu: I am [NAME].</p>
                        <p>Chodai itashimasu: Received</p>
                        <p>Osewa ni narimasu: Thank you as always/in advance.</p>
                        <p>Osakini shitsurei shimau: I will go ahead.</p>
                        <p>Itadaki masu: I will eat.</p>
                        <p>Gochisou sama desu: Thank for the great meal.</p>
                    </div>
                </div>
                <div style="margin-top: 20px; margin-bottom: 20px;" class="row">
                    <div style="color: white;" class="col-lg-4">
                        <p style="font-weight: bold; font-size: 16px;">JAPANESE LEVEL 4</p>
                        <p>Odaijini shite kudasai : Take care.</p>
                        <p>Daijoubu desuka? : Are you okay?</p>
                        <p>Dou itashi mashite : You’re welcome.</p>
                        <p>Ryoukai shimashita : Noted./Certainly.</p>
                        <p>Kakunin shite kudasai : Please check.</p>
                        <p>Kyou mo ganbari mashou : Let's give it our all today!</p>
                    </div>
                    <div style="color: white;" class="col-lg-4">
                        <p style="font-weight: bold; font-size: 16px;">WARAY LEVEL 1</p>
                        <p>Good morning : Maupay na Aga</p>
                        <p>Good afternoon : Maupay na Kulop</p>
                        <p>Good evening : Maupay na Gab.i</p>
                        <p>Thank you : Salamat</p>
                        <p>Thank you so much : Damo nga Salamat</p>
                        <p>You're Welcome: Waray Sapayan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="favoritesModal" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" 
                    data-dismiss="modal" 
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" 
                    id="favoritesModalLabel">Members</h4>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <div class ="col-md-6">
                            <table>
                                <tr>
                                    <th class="" style="position:relative; bottom:10px;">Name</th>
                                </tr>
                                @foreach($users as $user)
                                    @if ($loop->iteration === 1)
                                    @else
                                    <tr>
                                        <td>{{ $user->name }} </td>
                                        <td>
                                            <form method="POST" action="/volunteered/{{ $user->id }}" >
                                                {{ csrf_field() }}
                                                <button type="submit" style="position:relative; top:10px; left:10px; border-radius: 5px; font-size: 18px; font-style: oblique; font-weight: bold; color: red; border: 1px solid grey; height: 35px; width: 120px; padding: 0; background: white url(image) 0 0 no-repeat;">Volunteer</button>
                    
                                            </form>
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div style="background-color: white; text-align: center; padding-top: 15px;">
            <img style="width: 80px;" src="/img/Logo_Footer.png">
            <p style="color: grey; font-size: 16px; margin-top: 5px; margin-right: 10px;">© 2019 Sun* Inc.</p>
        </div>
    </footer>
</body>
</html>