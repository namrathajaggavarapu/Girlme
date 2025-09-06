<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Background Size Change on Scroll</title>
    <link rel="stylesheet" href="employ.css">
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
        <h1 style="font-family: 'Times New Roman', Times, serif;font-size:100px"> Employment</h1>
        <p> Women's employment is important for gender equality, economic growth, and social change. It provides women with independence, financial security, and political participation, while also increasing productivity and competitiveness, reducing poverty, and challenging traditional gender roles. </p>
         <br>
          <p>  The Government of India has taken several measures to promote women's employment, some of which are: </p><br>
          <h3><a href= "https://vikaspedia.in/e-governance/women-and-e-governance/mahila-e-haat" >Mahila E-Haat:</a></h3><p>An online platform for women entrepreneurs to sell their products and services. </p><br>
          <h3><a href= "https://nrlm.gov.in/outerReportAction.do?methodName=showIndex#gsc.tab=0" >National Rural Livelihood Mission (NRLM):</a></h3><p>The NRLM aims to promote self-employment and entrepreneurship among rural women by providing them with financial assistance and training.</p><br>
          <h3><a href= "https://www.india.gov.in/support-training-and-employment-programme-women#:~:text=Support%20to%20Training%20and%20Employment%20Programme%20for%20Women%20(STEP)%20scheme,Central%20government%20and%20implementing%20agency" >Support to Training and Employment Programme for Women (STEP):</a></h3><p>The STEP scheme provides skill development training to women to enhance their employability and promote entrepreneurship. </p><br>
          <h3><a href= "https://www.mudra.org.in/ " >Pradhan Mantri Mudra Yojana (PMMY): </a></h3><p>The PMMY scheme provides financial assistance to women entrepreneurs to start or expand their businesses.</p><br>
          <h3><a href= "https://www.standupmitra.in/Home/SUISchemes " >Stand-Up India Scheme:</a></h3><p>The Stand-Up India Scheme aims to provide financial assistance to women entrepreneurs and entrepreneurs from marginalized communities to start or expand their businesses. </p><br>
          <h3><a href= "https://www.godigit.com/guides/government-schemes/women-empowerment-schemes-in-india " >Women-specific programs in different sectors:</a></h3><p>The government has introduced several schemes and programs in different sectors such as agriculture, health, education, and tourism to promote women's employment. </p><br>
       
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
                    <img src="we1.jpg" alt="Los Angeles" style="width:80%;">
                </div>
    
                <div class="item">
                    <img src="we2.jpg" alt="Chicago" style="width:80%;">
                </div>
    
                <div class="item">
                    <img src="we3.jpg" alt="New york" style="width:80%;">
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
       
          <p>For job opportunities specifically in India, some of the websites that show job opportunities for women are: </p><br>

        <h3><a href= "https://www.jobsforher.com/ " >JobsForHer</a></h3><br>
        <h3><a href= "https://www.naukri.com/women-jobs" >Naukri.com</a></h3><br>
        <h3><a href= "https://hersecondinnings.com/" >HerSecondInnings</a></h3><br>
        <h3><a href= "https://www.flexicareersindia.com/ " >Flexi Careers India</a></h3><br>
        <h3><a href= "https://womenrestart.com/" > WomenRestart</a></h3><br>
        <h3><a href= "https://sheroes.com/" >Sheroes</a></h3><br>
        <h3><a href= "https://jobsforwomen.co.in/" >JobsforWomens</a></h3><br>
        <h3><a href= "https://www.upwardly.in/women-careers " >Upwardly</a></h3><br>
        <h3><a href= "https://www.careercontessa.com/career-advice-india/" >Career Contessa India</a></h3><br>
        <h3><a href= "https://www.womensweb.in/category/careers/job-opportunities/" >Women's Web</a></h3><br>


      

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
