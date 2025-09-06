<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Background Size Change on Scroll</title>
    <link rel="stylesheet" href="safety.css">
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
      p{
        font-family: 'legriff';
    }
    .i{
      text-align: center;
    }
    </style>
</head>
</body>
     <div id="header"></div>
     <section>
        <h1 style="font-family: 'Times New Roman', Times, serif;font-size:100px">Safety</h1>
        <p>Ensuring women's safety is crucial for a just and inclusive society. It is a fundamental human right, and violence or harassment against women can have long-term physical and mental health effects. Women's safety is also vital for their participation in society and achieving gender equality. Gender-based violence and harassment are systemic problems rooted in gender inequality, and addressing them is a critical step towards creating a safer and more equitable world for women. </p>
        <br><p>The Government of India has taken several measures to ensure the safety of girls and women. Some of these measures include:  </p>
        <br><h3><a href= "https://wcd.nic.in/" >The Nirbhaya Fund:</a></h3><p>The Nirbhaya Fund was established in 2013 to support initiatives aimed at enhancing the safety and security of women, including the provision of emergency response services, the setting up of helplines, and the installation of CCTV cameras in public places. </p><br>
        <h3><a href= "https://safecity.mha.gov.in/ " >Safe City Project:</a></h3><p>he Safe City Project aims to create safer urban spaces for women by improving lighting, transportation, and public spaces and promoting gender-sensitive urban planning.  </p><br>
        <h3><a href= "https://vikaspedia.in/e-governance/women-and-e-governance/mahila-e-haat" >One Stop Centre Scheme: </a></h3><p>he One Stop Centre Scheme aims to provide support services to women affected by violence, including medical assistance, legal aid, and counseling.</p><br>
        <h3><a href= "https://vikaspedia.in/schemesall/schemes-for-women-schemesall/schemes-for-pregnancy-womens/women-helpline-scheme#:~:text=single%20uniform%20number.-,Benefits,ERSS)%20for%20all%20emergency%20assistance " >Women Helpline Scheme:</a></h3><p>The Women Helpline Scheme provides a 24-hour helpline for women in distress, including those facing violence or harassment.</p><br>
        <br><h3><a href= "https://www.indiafilings.com/learn/mahila-police-volunteers-mpvs-scheme/ " >Mahila Police Volunteer Scheme:</a></h3><p>The Mahila Police Volunteer Scheme aims to increase the participation of women in policing and improve the safety and security of women in their communities.  </p><br>
        <h3>Women defence during attack: </h3>
        <div class="i" >
        <iframe width="560" height="315" src="https://www.youtube.com/embed/KVpxP3ZZtAc"  title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen aling="middle"></iframe><br>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/SfAoGd8R-CM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe><br>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/Ww1DeUSC94o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="500">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
    
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="s1.jpg" alt="Los Angeles" style="width:80%;">
                </div>
    
                <div class="item">
                    <img src="s2.jpg" alt="Chicago" style="width:80%;">
                </div>
    
                <div class="item">
                    <img src="s3.jpg" alt="New york" style="width:80%;">
                </div>
            </div>
    
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
     </section>
     <script type="text/javascript">
       const bg= document.getElementById('header');
       window.addEventLIstener('scroll',function(){
        bg.style.backgroundSize = 160 - +window.pageYOffset/12+'%';
        bg.style.opacity=1 - + window.pageYOffset/700+'';
       })

     </script>
</body>
</html>
