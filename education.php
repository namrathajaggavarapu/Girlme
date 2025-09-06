<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Background Size Change on Scroll</title>
    <link rel="stylesheet" href="education.css">
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
         @import url('https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap');

    p{
        font-family: 'legriff';
    }
*
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
#header
{
    position: realtive;
    width: 100%;
    height: 100vh;  
    background: url(girledu.jpg);
    background-size: 100%;
    background-position: center;
    background-attachment: fixed;
}
section
{
    padding: 100px;
    color: #111;
}
section h2
{
    font-size: 2.5em;
    margin-bottom: 10px;
}
    </style>
</head>
</body>
     <div id="header"></div>
     <section>
        <h1 style="font-family: 'Times New Roman', Times, serif;font-size:100px"> Education</h1>
        <p>Girl education is crucial for empowering girls and women, breaking the cycle of poverty, promoting gender equality, and fostering social and economic development. Educated girls are more likely to make informed decisions, earn higher incomes, and contribute to their communities, leading to better health outcomes and reduced child marriage and early pregnancy. In short, girl education is a fundamental human right that can transform the lives of girls and their communities. 

 

          </p><br><p>Governments are taking various measures to improve girl education, including policy initiatives, community engagement, legal reforms, and international cooperation. These efforts aim to address the barriers that limit girls' access to education and create an enabling environment that promotes girls' education and empowerment. </p>
          
           <br>
          
    
          <p>The Indian government has launched several national-level schemes to promote girl education and empowerment, some of which are: </p>
          <br>
          
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
                    <img src="e1.jpg" alt="Los Angeles"  style="width:80%;">
                </div>
    
                <div class="item">
                    <img src="e2.jpg" alt="Chicago"  style="width:80%;">
                </div>
    
                <div class="item">
                    <img src="e3.jpg" alt="New york"  style="width:80%;">
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

          <h3><a href="https://wcd.nic.in/bbbp-schemes">Beti Bachao Beti Padhao (BBBP) Scheme:</a></h3><p>Launched in 2015, this scheme aims to improve the status of girls and women by addressing gender-biased sex-selective elimination, ensuring their survival, protection, and education. </p> 
          
          
          <br>
          <h3><a href="https://www.aicte-india.org/reports/overview/Sarva-Shiksha-Abhiyan">Sarva Shiksha Abhiyan (SSA):</a></h3><p> Launched in 2001, SSA aims to provide universal access to primary education for all children, including girls. </p>
          
           
          
           
          <br>
          <h3><a href="https://nhm.gov.in/index4.php?lang=1&level=0&linkid=152&lid=173">Rashtriya Kishor Swasthya Karyakram (RKSK):</a></h3><p> Launched in 2014, this scheme aims to provide comprehensive health and nutrition services to adolescent girls to promote their overall development and well-being. </p>
          
          
          
           
          <br>
          <h3><a href="https://dsel.education.gov.in/nsigse">National Scheme of Incentives to Girls for Secondary Education (NSIGSE):</a></h3><p> This scheme aims to encourage girls from economically weaker sections to complete secondary education by providing them with financial incentives. </p>
          
          
          <br>
          <h3><a href="https://apkgbv.apcfss.in/">Kasturba Gandhi Balika Vidyalaya (KGBV):</a></h3><p> Launched in 2004, KGBV aims to provide access to education for girls from disadvantaged communities by setting up residential schools for them. </p>
          </p>
           
          <br>
          <h3><a href="https://www.aai.aero/en/rcs-udan">Udaan Scheme:</a></h3><p>Launched in 2013, this scheme aims to provide opportunities for girl students from disadvantaged sections to pursue higher education in technical fields. </p>
          
           
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