<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Background Size Change on Scroll</title>
    <link rel="stylesheet" href="rights.css">
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
      p{
        font-family: 'legriff';
    }
    </style>
</head>
</body>
     <div id="header"></div>
     <section>
        <h1 style="font-family: 'Times New Roman', Times, serif;font-size:100px;"> Rights</h1>
        <p> Rights are important for women to ensure they are treated fairly and equally. Women have faced discrimination and exclusion historically, and rights ensure access to opportunities, resources, and protections. Women's rights include education, healthcare, employment, political participation, and freedom from violence and discrimination. Securing women's rights promotes gender equality and creates a more just and inclusive world. </p><br>
        <p> The government of India has given several rights to women, some of which include:  </p>
        <br>
        <h3>Right to equality</h3><t></t><p>Women have the right to be treated equally with men in all aspects of life, including education, employment, and political participation. 
        </p>
        <h3>Right to education</h3><t></t><p>Women have the right to access education and the government has implemented several schemes and initiatives to promote girls' education in India. 
        </p>
        <h3>Right to work</h3><t></t><p>Women have the right to work and the government has implemented several policies to promote women's employment, such as maternity leave and reservation in certain government jobs. 
        </p>
        <h3>Right to health</h3><t></t><p> Women have the right to access healthcare services, including maternal health services and reproductive health services. 
      </p>
        <h3>Right to property</h3><t></t><p>Women have the right to own and inherit property, and the government has implemented several laws to protect women's property rights. 
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
                    <img src="r1.jpg" alt="Los Angeles" style="width:80%;">
                </div>
    
                <div class="item">
                    <img src="r2.jpg" alt="Chicago" style="width:80%;">
                </div>
    
                <div class="item">
                    <img src="r3.jpg" alt="New york" style="width:80%;">
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
        </p>
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
