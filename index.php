<?php
ini_set('display_errors', 1);

if(isset($_POST['submit'])){
    require 'php/mailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;

    //$mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->charset = 'utf-8';
    //$mail->SMTPDebug = 2;
    $mail->PORT=587;
    $mail->SMTPAuth=true;
    $mail->SetLanguage("pl", "php/mailer/language/"); 
    $mail->SMTPSecure='tls';
    $mail->Username='MAIL';
    $mail->Password='PASSWORD';
    
    $mail->setFrom($_POST['email'],$_POST['nazwa']);
    $mail->addAddress('fistah@gmail.com');
    $mail->addReplyTo($_POST['email'],$_POST['nazwa']);

    $mail->isHTML(true);
    $mail->Subject='Wiadmomosc ze strony - Maja Wojtaszek: ';
    $mail->Body='<h1 align=center>Nazwa: '.$_POST['nazwa'].'<br>Email: '.$_POST['email'].'<br>Telefon: '.$_POST['telefon'].'<br>Treść: '.$_POST['content'].'</h1>';
    if(!$mail->send()){
        echo "<script type='text/javascript'>alert('Coś nie poszło po naszej myśli, spróbuj ponownie.');</script>";
    }
    else {
        echo "<script type='text/javascript'>alert('Dziękuje ".$_POST['nazwa']." za wysłanie wiadomośći, odpiszę lub oddzwonię niebawem');</script>";
        
    }
}
?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Maja Wojtaszek - wokalistka</title>
</head>
<body>
    <div class="wraper">
        <div class="menu">
            <div class="maja">Maja Wojtaszek </div>
            <div class="item">
                    <a href="#omnie">O MNIE</a></div>
            <div class="item">
                    <a href="#kontakt">KONTAKT</a></div>
            <div class="item">
                    <a href="#zdjecia">ZDJĘCIA</a></div>
            <div class="item">
                    <a href="#video">VIDEO</a></div>
            <div class="item">
                    <a href="#demo">DEMO</a></div>
        </div>
        <div class="face">
                <div class="contents" id="contents0"></div>
                <div class="contents" id="contents0"></div>
<div class="contents contentsHide" id="contents1">
    <div class="titles" id="omnie">O mnie</div>
    <div class="close2">*
        <div class="zamknij2">zamknij
        </div>
    </div>
                    <h3>
                        Jestem wokalistką, która swoje pierwsze muzyczne kroki zaczynała mając lat 6. 
                            Byłam laureatką wielu konkursów wokalnych. 
                            W roku 2012 brałam udział w programie "Szansa na sukces".
                            4 lata później próbowałam swoich sił w programie "The Voice of Poland", gdzie doszłam do trzeciego etapu.
                            Swoją przygodę z telewizją kontynuowałam w 2018 roku, gdzie zasiadłam jako juror w programie "All Together Now - Śpiewajmy razem". 
                            
                            Każdy występ traktuję poważnie i rzetelnie się do niego przygotowuję. 
                            Współpracuję ze wspaniałymi muzykami, śpiewając na polskich scenach muzycznych.</h3>
</div>
<div class="contents contentsHide" id="contents2"></div>
<div class="contents contentsHide" id="contents3">
        <div class="titles" id="kontakt">Kontakt</div>
         <div class="close4">*
                            <div class="zamknij4">zamknij
                            </div>
                        </div>
                                        <form action="" method="post">
                                            <input type="text" name="nazwa" id="" placeholder=" nazwa">
                                            <input type="text" name="telefon" id="" placeholder=" telefon">
                                            <input type="text" name="email" id="" placeholder=" email">
                                            <textarea name="content" id="" cols="30" rows="5" placeholder=" treść"></textarea>
                                            <input type="reset" value="wyczyść"> 
                                            <input type="submit" name="submit" value="wyślij">
                                        </form>
</div>
<div class="contents contentsHide" id="contents4">
        <div class="titles" id="zdjecia">Zdjęcia</div>
        <div class="close5">*
                           <div class="zamknij5">zamknij
                           </div>
                       </div>
                       <div class="pictures">
                            <div class="pion zdj9">
                                    <img class="figure-img" src="bg/9.jpg" alt="a kitten">
                                   </div>

                                   <div class="pion zdj5">
                                        <img class="figure-img" src="bg/5.jpg" alt="a kitten">
                                       </div>
                                       <div class="poziom zdj1">
                                        <img class="figure-img" src="bg/1.jpg" alt="a kitten">
                                       </div>
                                       <div class="poziom zdj2">
                                        <img class="figure-img" src="bg/2.jpg" alt="a kitten">
                                       </div>
                                       <div class="pion zdj3">
                                        <img class="figure-img" src="bg/3.jpg" alt="a kitten">
                                       </div>
                                       <div class="pion zdj4">
                                        <img class="figure-img" src="bg/4.jpg" alt="a kitten">
                                       </div>
                                       <div class="pion zdj12">
                                            <img class="figure-img" src="bg/12.jpg" alt="a kitten">
                                        </div>
                                       <div class="pion zdj6">
                                        <img class="figure-img" src="bg/6.jpg" alt="a kitten">
                                       </div>
                                       <div class="poziom zdj7">
                                        <img class="figure-img" src="bg/7.jpg" alt="a kitten">
                                       </div>
                                       <div class="poziom zdj8">
                                        <img class="figure-img" src="bg/8.jpg" alt="a kitten">
                                       </div>

                                       <div class="poziom zdj10">
                                        <img class="figure-img" src="bg/10.jpg" alt="a kitten">
                                       </div>
                                       <div class="poziom zdj13">
                                        <img class="figure-img" src="bg/13.jpg" alt="a kitten">
                                       </div>
                                       <div class="pion zdj11">
                                            <img class="figure-img" src="bg/11.jpg" alt="a kitten">
                                           </div>

                                           
                        </div>
</div>
<div class="contents contentsHide" id="contents5">
        <div class="titles" id="video">Video</div>
        <div class="close6">*
                           <div class="zamknij6">zamknij
                           </div>
                       </div>

                       <h3>"Something" - utwór własny</h3>
                       <div class="iframe">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/XzXur23jPj0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                       </div>
                                       
                       <h3>"I Wanna Hold You" - współpraca z zespołem Mardell</h3>
                       <div class="iframe">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/V5mjwYZ7gKw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                       </div>

                       <h3>Parodia "Cabana" - współpraca z kabaretem Czwarta Fala</h3>
                       <div class="iframe">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/bnKKhakmHok" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                       </div>

                       <h3>Piosenka o smogu cover "Libre" - współpraca z kabaretem Czwarta Fala</h3>
                       <div class="iframe">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/kQLLO1hbrnQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                       </div>

                       <h3>"Zaspana" - współpraca z kabaretem Czwarta Fala</h3>
                       <div class="iframe">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/ba0Lp9nE8Ws" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                       </div>


                       <h3>cover "The sound of silence"</h3>
                       <div class="iframe">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/DhZR6gsZOKY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                       </div>

                       <h3>cover "Let it snow"</h3>
                       <div class="iframe">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/keh88dN7z0w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                       </div>                               

</div>
<div class="contents contentsHide" id="contents6">
        <div class="titles" id="demo">Demo</div>
        <div class="close7">*
                           <div class="zamknij7">zamknij
                           </div>
                       </div>
                                       <h3>W krótce się pojawi...</h3>
</div>
                <div class="select1"></div>
                <div class="select2"></div>
                <div class="panels">
                        <div class="panel panel0" id=""></div>
                        <div class="panel panel1" id=""></div>
                        <div class="panel panel2" id=""></div>
                        <div class="panel panel3" id=""></div>
                        <div class="panel panel4" id=""></div>
                        <div class="panel panel5" id=""></div>
                        <div class="panel panel6" id=""></div>
                        <div class="panel panel7" id=""></div>
                        <div class="panel panel8" id=""></div>
                        <div class="panel panel9" id=""></div>
                        <div class="panel panel10" id=""></div>
                </div>
        </div>

<div class="social">
    <div class="fb"></div>
    <div class="inst"></div>
    <div class="yt"></div>
</div>
    </div>
    <script src="effects.js"></script>
</body>
</html>
